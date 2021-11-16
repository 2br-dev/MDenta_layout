class Zoomable{

    gallery = [];
    currentIndex = 0;


    constructor( selector ){

        document.querySelectorAll( selector ).forEach( image => {
            
            this.gallery.push( this.getSrc( image ) );
        } );

        this.prepeareDom();

        $('body').on( 'click', selector, this.openImage.bind( this ) );
        $('body').on( 'click', '.zoomable-next', this.nextImage.bind( this ) );
        $('body').on( 'click', '.zoomable-prev', this.prevImage.bind( this ) );
        $('body').on( 'click', '.zoomable-close', this.closeImage.bind( this ) );
        $('body').on( 'click', '.zoom-container', this.closeImage.bind( this ) );
        $(window).on( 'scroll', this.closeImage.bind( this ) );

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
        let image = document.createElement( 'a' );
        image.className = "zoomable-image";
        zoomContainer.append( image );
        
        document.body.append( zoomContainer );
    }

    openImage( e ){
        let img = this.getSrc( e.currentTarget );
        $( '.zoomable-image' ).css({
            backgroundImage: 'url(' + img + ")"
        });
        setTimeout(() => {
            $('.zoom-container').addClass( 'open' );
        }, 200);

        this.currentIndex = this.gallery.indexOf( img );
    }

    closeImage( e ){

        if( e.type == 'click' ){

            let path = e.originalEvent.path;
            
            let links = path.filter( el => {
                return el.tagName == "A"
            } );
    
            if( !links.length )
                return;
    
            if( !$(links[0]).hasClass('zoomable-close') )
                return
        }

        $('.zoom-container').removeClass( 'open' );
    }

    nextImage(){
        
        let nextIndex = this.currentIndex + 1;
        if( nextIndex >= this.gallery.length){
            nextIndex = 0;
        }

        $('.zoomable-image').css({
            backgroundImage: "url(" + this.gallery[ nextIndex ] + ")"
        });

        this.currentIndex = nextIndex;
    }

    prevImage(){

        let prevIndex = this.currentIndex - 1;
        if ( prevIndex < 0 ){
            prevIndex = this.gallery.length - 1;
        }

        $('.zoomable-image').css({
            backgroundImage: "url(" + this.gallery[ prevIndex ] + ")"
        })

        this.currentIndex = prevIndex;
    }

}

export default Zoomable