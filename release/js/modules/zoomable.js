class Zoomable{

    gallery = [];
    currentIndex = 0;
    selector;
    dragging = false;
    oldMouse;
    newMouse;

    constructor( selector ){

        if( !window.zoomable ){
            window.zoomable = [];
        }

        if( !$(selector).length ){
            return false;
        }

        document.querySelectorAll( selector ).forEach( image => {
            this.selector = selector;
            this.gallery.push( this.getSrc( image ) );
        } );

        this.prepeareDom();
        this.setupEvents();

        window.zoomable.push( this );
    }

    setupEvents(){
        $('body').on( 'click', this.selector, this.openImage.bind( this ) );
        $('body').on( 'click', '.zoomable-next', this.nextImage.bind( this ) );
        $('body').on( 'click', '.zoomable-prev', this.prevImage.bind( this ) );
        $('body').on( 'click', '.zoomable-close', this.closeImage.bind( this ) );
        $('body').on( 'click', '.zoom-container', this.closeImage.bind( this ) );
        $(window).on( 'scroll', this.closeImage.bind( this ) );
        $('html, body').on('keyup', this.keyboardEvents.bind( this ));

        $('body').on('mousedown', '.zoom-container' , this.startDrag.bind( this ));
        $('body').on('mousemove', '.zoom-container' , this.moveDrag.bind( this ));
        $('body').on('mouseup', '.zoom-container' , this.endDrag.bind( this ));

        document.querySelector('.zoom-container').addEventListener( 'touchstart', this.startDrag.bind( this ), {passive: true} );
        document.querySelector('.zoom-container').addEventListener( 'touchmove', this.moveDrag.bind( this ), {passive: true} );
        document.querySelector('.zoom-container').addEventListener( 'touchend', this.endDrag.bind( this ), {passive: true} );
    }

    startDrag( e ){
        if( e.type == 'mousedown' ){
            e.preventDefault();
            e.stopPropagation();
            this.oldMouse = e.clientX;
        }else{
            this.oldMouse = e.touches[0].clientX;
        }
    }

    moveDrag( e ){
        this.dragging = true;
    }

    endDrag( e ){

        if ( e.type == 'mouseup' ){
            e.preventDefault();
            e.stopPropagation();
            this.newMouse = e.clientX;
        }else{
            this.newMouse = e.changedTouches[0].clientX;
        }

        let difference = Math.abs( this.oldMouse - this.newMouse );
        if( difference < 10 ) return;


        if ( this.dragging == true ){
            
            if( this.newMouse > this.oldMouse ){
                // Drag right
                this.nextImage();
            }else{
                // Drag left
                this.prevImage();
            }
        }

        this.dragging = false;
        this.oldMouse = this.newMouse = null;
    }

    keyboardEvents( e ){
        switch( e.keyCode ){
            case 39: this.nextImage(); break;
            case 37: this.prevImage(); break;
            case 27: this.closeImage(); break;
        }
    }

    getSrc( image ){
        switch( image.tagName ){
            case "DIV":
                let src = image.dataset.src;
                if ( src ){
                    return src
                }else{
                    return image.style.backgroundImage.substr(5,image.style.backgroundImage.length-7);
                }
            case "IMG":
                return image.prop.src; break;
        }
    }

    prepeareDom(){

        if( $( '.zoom-container' ).length ) return;

        // Main view component
        let zoomContainer = document.createElement('div');
        zoomContainer.className = "zoom-container";

        // Left arrow trigger
        let leftArrow = document.createElement('a');
        leftArrow.className = "zoomable-prev";
        let leftArrowIcon = document.createElement('i');
        leftArrowIcon.className = 'mdi mdi-chevron-left';
        leftArrow.append( leftArrowIcon );
        zoomContainer.append( leftArrow );

        // Right arrow trigger
        let rightArrow = document.createElement('a');
        rightArrow.className = "zoomable-next";
        let rightArrowIcon = document.createElement('i');
        rightArrowIcon.className = 'mdi mdi-chevron-right';
        rightArrow.append( rightArrowIcon );
        zoomContainer.append( rightArrow );

        // CloseTrigger
        let closeTrigger = document.createElement('a');
        closeTrigger.className = 'zoomable-close';
        let closeTriggerIcon = document.createElement('i');
        closeTriggerIcon.className = "mdi mdi-close";
        closeTrigger.append( closeTriggerIcon );
        zoomContainer.append( closeTrigger );

        // Image wrapper
        let image = document.createElement( 'img' );
        image.className = "zoomable-image";
        zoomContainer.append( image );
        
        document.body.append( zoomContainer );
    }

    openImage( e ){
        let img = this.getSrc( e.currentTarget );
        $( '.zoomable-image' ).attr({
            src: img
        });
        document.querySelector('.zoom-container').zoomableInstance = this;
        setTimeout(() => {
            $('.zoom-container').addClass( 'open' );
        }, 200);

        this.currentIndex = this.gallery.indexOf( img );
    }

    closeImage( e ){

        if ( e ) {
            
            if( e.type == 'click' ){
    
                let path = this.composedPath( e.target );
                
                let links = path.filter( el => {
                    return el.tagName == "A" || el.tagName == "IMG"
                } );
        
                if( links.length ){

                    if( !$(links[0]).hasClass('zoomable-close') )
                        return
                }
            }
        }

        $('.zoom-container').removeClass( 'open' );
    }

    nextImage( e ){

        let instance = document.querySelector('.zoom-container').zoomableInstance;
        
        let nextIndex = instance.currentIndex + 1;
        if( nextIndex >= instance.gallery.length){
            nextIndex = 0;
        }

        $('.zoomable-image').attr({
            src: instance.gallery[ nextIndex ]
        });

        instance.currentIndex = nextIndex;
    }

    prevImage( e ){

        let instance = document.querySelector('.zoom-container').zoomableInstance;


        let prevIndex = instance.currentIndex - 1;
        if ( prevIndex < 0 ){
            prevIndex = instance.gallery.length - 1;
        }

        $('.zoomable-image').attr({
            src: instance.gallery[ prevIndex ]
        })

        instance.currentIndex = prevIndex;
    }

    composedPath (el) {

        var path = [];
    
        while (el) {
    
            path.push(el);
    
            if (el.tagName === 'HTML') {
    
                path.push(document);
                path.push(window);
    
                return path;
           }
    
           el = el.parentElement;
        }
    }

}

export default Zoomable