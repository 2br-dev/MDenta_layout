import MorphingAPP from './modules/MorphingApp.js';
import Zoomable from './modules/zoomable.js';
import * as THREE from './lib/three.module.js';
$.fn.parallax=function(){return $(this).each(function(){$(this).css("background-position","center "+(($(this).offset().top+($(this).height()/2)-$(window).scrollTop())/$(window).height()*100)+"%")})};

let MBox;
let zoomable;

let sTop;
let wWidth;
let wHeight;
let MApp;
let scrollStep = 0;

let implantOT;
let healingOT;
let prosthesisOT;
let labOT;

let cameraPos;
let mobileCameraPos = 20;
let desktopCameraPos = 18.5;

let storedStyle;

let morphSpeed = 1;

let swiper, swiper2;

update();

let commonParams = {
    pointSize: .18,
    pointColor: new THREE.Color(0, .9, 1),
    raycastThreshold: 3,
    raycastDistance: 2,
    disolveAmout: 7,
    transitionSpeed: 1.5,
    maxAngle: 90,
    container: '.three-container'
}

window.commonParams = commonParams;

let lab_data = {
    baseObject: {
        name: 'slepok',
        title: ''
    }
}

let healing_data = {
    baseObject: {
        name: 'microscope',
        title: ''
    }
}

let prosthesis_data = {
    baseObject: {
        name: 'scaner',
        title: ''
    }
}

let implants_data = {
    baseObject: {
        name: 'implant',
        title: ''
    }
}

let team_data = {
    baseObject: {
        name: 'doctor',
        title: ''
    }
}

let about_data = {
    baseObject: {
        name: 'chair',
        title: ''
    }
}

let main_data = {
    baseObject: {
        name: 'slepok',
        title: ''
    },
    morphingObjects: [
        {
            name: 'implant',
            title: 'Имплантация',
            percent: 0
        },
        {
            name: 'microscope',
            title: 'Лечение',
            percent: 0
        },
        {
            name: 'scaner',
            title: 'Протезирование',
            percent: 0
        },
        {
            name: 'logo',
            title: 'Зуботехническая лаборатория',
            percent: 0
        },
    ]
}

$(document).ready(() => {


    if ( $( 'main#main' ).length ){
        implantOT = $('#s-implants').offset().top       - $('#s-implants').height() / 3;
        healingOT = $('#s-healing').offset().top        - $('#s-healing').height() / 3;
        prosthesisOT = $('#s-prosthesis').offset().top  - $('#s-prosthesis').height() / 3;
        labOT = $('#s-lab').offset().top                - $('#s-lab').height() / 3;
    }

    if( $('#main-photos').length ){

        swiper = new Swiper('#main-photos', {
            spaceBetween: 20,
            loop: true,
            navigation: {
                    nextEl: '.next',
                    prevEl: '.prev'
            },
            pagination: {
                    type: 'bullets',
                    el: '.pagination-wrapper',
                    clickable: true
            },
            breakpoints: {
                    600: {
                        slidesPerView: 1
                    },
                    900: {
                        slidesPerView: 2
                    },
                    1200: {
                        slidesPerView: 3
                    }
            }
        });
    }

    zoomable = new Zoomable('.zoomable');

    if( $('#implants-swiper').length ){

        swiper = new Swiper( '#implants-swiper', {
            navigation: {
                nextEl: '.next',
                prevEl: '.prev'
            },
            pagination: {
                type: 'bullets',
                el: '.pagination-wrapper',
                clickable: true
            },
            autoHeight: true
        } );

        swiper.on( 'slideChange', () => {
            let top = $('#implants-swiper').offset().top - 80;
            $('html, body').animate({
                scrollTop: top
            })
        }, 400 )
    }

    if( swiper != undefined ){

        swiper.on('slideChange', () => {
            $('.lazy').lazy({
                afterLoad: ( el ) => {
                    $( el ).addClass( 'complete' );
                }
            });
        });
    }

    if ( $('main#team').length ){

        let members = document.querySelectorAll('.member-swiper');

        let sourceDelay = 0;

        members.forEach( member => {
            
            sourceDelay += 200;

            setTimeout(() => {

                let galleryId = member.dataset['gallery'];
                let zoomable = new Zoomable('.' + galleryId);
    
                let memberSwiper = new Swiper( member, {
                    pagination: {
                        type: "bullets",
                        el: ".member-pagination",
                    },
                    speed: 1000,
                    autoplay: {
                        delay: 5000,
                    },
                    loop: true,
                } );
                memberSwiper.on('slideChange', () => {
                    $('.lazy').lazy();
                });
            }, sourceDelay);
        } );
    }

    if ( $('main#contacts').length ){
        initMap();
    }

    if ( $( 'main#about' ).length ){

        swiper = new Swiper( document.querySelector( '#gallery-top' ), {
            loop: true,
            loopedSlides: 5,
            spaceBetween: 2,
            navigation: {
                nextEl: '.trigger-right',
                prevEl: '.trigger-left'
            }
        } );
        swiper.on('slideChange', () => {
            $( '.lazy' ).lazy({
                afterLoad: ( el ) => {
                    $( el ).addClass( 'complete' );
                }
            });
        });

        swiper2 = new Swiper( document.querySelector( '#gallery-bottom' ), {
            slidesPerView: 5,
            spaceBetween: 10,
            loop: true,
            slideToClickedSlide: true,
            centeredSlides: true
        } );
        swiper2.on('slideChange', () => {
            $( '.lazy' ).lazy({
                afterLoad: ( el ) => {
                    $( el ).addClass( 'complete' );
                }
            });
        });

        swiper.controller.control = swiper2;
        swiper2.controller.control = swiper;
        
    }
    
    initFrameworks();
    initMApp();

});

function initMApp(){

    let id = $('main').attr('id');
    
    switch(id){
        case "lab": initPageMApp( lab_data ); break;
        case "healing": initPageMApp( healing_data ); break;
        case "main": initPageMApp( main_data ); correctScales(); break;
        case "prosthesis": initPageMApp( prosthesis_data ); break;
        case "implants": initPageMApp( implants_data ); break;
        case "team": initPageMApp( team_data ); break;
        case "about": initPageMApp( about_data ); break;
        default: $('#splash').addClass('loaded'); break;
    }
}

function initPageMApp( data ){
    MApp = new MorphingAPP();
    window.MApp = MApp;

    cameraPos = desktopCameraPos;

    let params = {...commonParams};
   
    MApp.init( params );

    if( window.outerWidth <= 800 ){
        cameraPos = mobileCameraPos
    }
    MApp.actorCamera.position.z = cameraPos;

    MApp.activeCamera = MApp.actorCamera;
    MApp.loadObjects( data );

    initEvents();
}

function initFrameworks(){

    $('.lazy').lazy({
        afterLoad: ( el ) => {
            $( el ).addClass( 'complete' );
        }
    });

    M.Sidenav.init(document.querySelector('.sidenav'));
}

function initEvents(){
    $( window ).on( 'mousemove', MApp.updateMouse );
    $( window ).on( 'resize', update );
    $( window ).on( 'scroll', updateScrollElements );
    $( 'body' ).on( 'mouseenter', 'a', hideCursor );
    $( 'body' ).on( 'mouseleave', 'a', showCursor );
    MApp.on( 'baseloading', labBaseLoading );
    MApp.on( 'morphloading', mainMorphLoading );
    MApp.on( 'loadingcomplete', () => {

        if (scrollStep == 0){

            if( $( 'main#main' ).length ){
                MApp.morph( 'logo', 0 );
                MApp.activeMeshName = 'logo';
            }
        }
        
        
        updateScrollElements();
        correctScales();

        MApp.animate();

        $('#splash').addClass('loaded');
    } );
    $( 'body' ).on( 'mousemove', 'canvas', () => {
        $( '#cursor' ).removeClass( 'hidden' );
    } );
    $( 'body' ).on( 'mouseleave', 'canvas', () => {
        $( '#cursor' ).addClass( 'hidden' );
    } );
}

function correctScales(){

    if( !MApp ) return;
    if( !MApp.activeMesh ) return;

    if( $( '#main' ).length ){
        
        if( window.innerWidth <= 800 ){
            if( sTop <= wHeight ){
                MApp.activeMesh.scale.set( .5, .5, .5 );
                for( let i = 0; i < MApp.morphObjects.length; i++ ){
                    MApp.morphObjects[ i ].scale.set( .5, .5, .5 );
                }
            }else{
                for( let i = 0; i < MApp.morphObjects.length; i++ ){
                    MApp.morphObjects[ i ].scale.set( 1, 1, 1 );
                }
                MApp.activeMesh.scale.set( 1, 1, 1 );
            }
        }else{
            for( let i = 0; i < MApp.morphObjects.length; i++ ){
                MApp.morphObjects[ i ].scale.set( 1, 1, 1 );
            }
            MApp.activeMesh.scale.set(1, 1, 1);
        }
    }
}

function splashLoaded(){
    $('#splash').addClass('loaded');
}

function mainMorphLoading( percent ){
    $( '#loading-bar .percent' ).css( 'width', percent + '%' );
    $( '#loading-bar .percent' ).attr( 'data-width', percent );
}

function labBaseLoading( xhr, totalObjects ){
    let percent = ( xhr.loaded / xhr.total * 100 ) / totalObjects;
    $('#loading-bar .percent').css('width', percent + '%');
    $('#loading-bar .percent').attr('data-width', percent);
}

function update(){
    wWidth = window.innerWidth;
    wHeight = window.innerHeight;
    correctScales();

    cameraPos = window.outerWidth <= 800 ? mobileCameraPos : desktopCameraPos;
    
    if( MApp !== undefined ){
        MApp.updateScene();
    }
}

function updateScrollElements(){
    
    if( MApp.isAnimating ) return;
    let id = $('main').attr('id');
    sTop = $('html, body').scrollTop();
    $('.parallax').parallax();

    switch(id){
        case "lab" : updateLabElements(); break;
        case "main": updateMainElements(); break;
        case "healing": updateLabElements(); break;
        case "prosthesis": updateLabElements(); break;
        case "implants": updateLabElements(); break;
        case "team": updateLabElements(); break;
        case "about": updateLabElements(); break;
    }
}

function resetMorphInfluences(){
    for( i = 0; i < MApp.morphingObjects.length; i++ ){
        MApp.morphObjects[ i ].morphTargetInfluences = [ 0 ];
    }
}

function updateMainElements(){

    implantOT = $('#s-implants').offset().top       + $('#s-implants').height() / 3;
    healingOT = $('#s-healing').offset().top        + $('#s-healing').height() / 3;
    prosthesisOT = $('#s-prosthesis').offset().top  + $('#s-prosthesis').height() / 3;
    labOT = $('#s-lab').offset().top                + $('#s-lab').height() / 3;

    if( MApp.isAnimating ) return;

    if ( sTop >= wHeight / 20 && scrollStep == 0 ){
        // Initial scroll is other then zero
        switch(true){
            case ( sTop >= implantOT && sTop <= healingOT ) : scrollStep = 2; break;
            case ( sTop >= healingOT && sTop <= prosthesisOT ) : scrollStep = 3; break;
            case ( sTop >= prosthesisOT && sTop <= labOT ): scrollStep = 4; break;
            default: scrollStep = 1; break;
        }
        scrollStep -= 1;
    }


    switch( true ){
        case ( sTop <= wHeight / 20 && scrollStep != 0 ):
            $('#cursor').removeClass('hidden').removeClass('small');
            switchFigure( 'logo', 0, 0, 2, '.three-container' );
            scrollStep = 0;
            break;
        case ( ( sTop >= wHeight / 20 && sTop <= implantOT ) && scrollStep != 1 ):
            $('#cursor').addClass('hidden').addClass('small');
            if( scrollStep < 1 ){
                switchFigure( 'implant', 2, 0, 0, '.canvas-wrapper' );
            }else{
                MApp.morph( 'implant', 1.6);
            }
            scrollStep = 1;
            break;
        case ( ( sTop >= implantOT && sTop <= healingOT ) && scrollStep != 2 ):
            $('#cursor').addClass('hidden').addClass('small');
            MApp.switchContainer( '.canvas-wrapper' );
            MApp.activeCamera.position.z = cameraPos;
            MApp.morph( 'microscope', 1.6);
            scrollStep = 2;
            break;
        case ( ( sTop >= healingOT && sTop <= prosthesisOT ) && scrollStep != 3 ):
            $('#cursor').addClass('hidden').addClass('small');
            MApp.switchContainer( '.canvas-wrapper' );
            MApp.activeCamera.position.z = cameraPos;
            MApp.morph( 'scaner', 1.6 );
            scrollStep = 3;
            break;
        case ( ( sTop >= prosthesisOT && sTop <= labOT ) && scrollStep != 4 ):
            $('#cursor').addClass('hidden').addClass('small');
            MApp.switchContainer( '.canvas-wrapper' );
            MApp.activeCamera.position.z = cameraPos;
            MApp.morph( 'slepok', 1.6 );
            scrollStep = 4;
            break;
    }

    correctScales();

}

function switchFigure( name, dSpeed, mSpeed, aSpeed, container ){
    MApp.disassemble(dSpeed, () => {
        MApp.morph( name, mSpeed );
        MApp.disassemble(0);
        MApp.switchContainer( container, () => {
            MApp.activeCamera.position.z = cameraPos;
        } );
        MApp.assemble( aSpeed );
    });
}

function updateLabElements(){
    
    if( sTop >= wHeight / 10 ){
        if ( MApp.isAnimating !== true ){
            MApp.disassemble( 1 );
        }
        $('#cursor').addClass('hidden');
    }

    if( sTop <= wHeight / 10 ){
        if ( MApp.isAnimating !== true ){
            MApp.assemble( 1 );
        }
        $('#cursor').removeClass('hidden');
    }
}

function showCursor(){
    if( $('html, body').scrollTop() <= window.outerHeight / 6 ){
        $('#cursor').removeClass('hidden');
    }
}

function hideCursor(){
    $('#cursor').addClass('hidden');
}

// Инициализация карты
function initMap(){

    loadScript( "https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js", () => {

        let coords = [38.9963,45.0366];
        let token = "pk.eyJ1IjoiZ2VuZXN5cyIsImEiOiJja2xyejVqbTAwN3c2MnBwdjZvdHVhOHpiIn0.IrmmbUMTtmXBxZjv8mcH8Q";

        mapboxgl.accessToken = token;
        let map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/genesys/ckwaddoxs3nyw15qnakq6fnnv',
            center: coords,
            zoom: 17,
            pitch: 60,
        });

        const el = document.createElement( 'div' );
        el.className = 'marker';

        let marker = new mapboxgl.Marker( el )
            .setLngLat(coords)
            .addTo(map);

        map.scrollZoom.disable()
        map.addControl(new mapboxgl.NavigationControl());

    } )
}

//Функция подключения
function loadScript(url, callback){

    var script = document.createElement("script")
    script.type = "text/javascript";

    if (script.readyState){  //IE
        script.onreadystatechange = function(){
            if (script.readyState == "loaded" ||
                    script.readyState == "complete"){
                script.onreadystatechange = null;
                callback();
            }
        };
    } else {  //Others
        script.onload = function(){
            callback();
        };
    }

    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
}