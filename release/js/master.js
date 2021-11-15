import MorphingAPP from './modules/MorphingApp.js';
import * as THREE from './lib/three.module.js';
$.fn.parallax=function(){return $(this).each(function(){$(this).css("background-position","center "+(($(this).offset().top+($(this).height()/2)-$(window).scrollTop())/$(window).height()*100)+"%")})};

let MBox;

let sTop;
let wWidth;
let wHeight;
let MApp;
let scrollStep = 0;

let implantOT;
let healingOT;
let prosthesisOT;
let labOT;

let storedStyle;

let morphSpeed = .2;

let swiper;

update();

let commonParams = {
    pointSize: .2,
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
        default: $('#splash').addClass('loaded'); break;
    }
}

function initPageMApp( data ){
    MApp = new MorphingAPP();
    window.MApp = MApp;

    let params = {...commonParams};
   
    MApp.init( params );
    
    MApp.actorCamera.position.z = 24
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
        
        if( $( 'main#main' ).length ){
            MApp.morph( 'logo', 0 );
            MApp.activeMeshName = 'logo';
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

    switch( true ){
        case ( sTop <= wHeight / 20 && scrollStep != 0 ):
            $('#cursor').removeClass('hidden').removeClass('small');
            switchFigure( 'logo', 0, 0, 1, '.three-container' );
            scrollStep = 0;
            break;
        case ( ( sTop >= wHeight / 20 && sTop <= implantOT ) && scrollStep != 1 ):
            $('#cursor').addClass('hidden').addClass('small');
            if( scrollStep < 1 ){
                switchFigure( 'implant', 1, 1, 1, '.canvas-wrapper' );
            }else{
                MApp.morph( 'implant', .5);
            }
            scrollStep = 1;
            break;
        case ( ( sTop >= implantOT && sTop <= healingOT ) && scrollStep != 2 ):
            $('#cursor').addClass('hidden').addClass('small');
            MApp.switchContainer( '.canvas-wrapper' );
            MApp.activeCamera.position.z = 24;
            MApp.morph( 'microscope', .5 );
            scrollStep = 2;
            break;
        case ( ( sTop >= healingOT && sTop <= prosthesisOT ) && scrollStep != 3 ):
            $('#cursor').addClass('hidden').addClass('small');
            MApp.switchContainer( '.canvas-wrapper' );
            MApp.activeCamera.position.z = 24;
            MApp.morph( 'scaner', .5 );
            scrollStep = 3;
            break;
        case ( ( sTop >= prosthesisOT && sTop <= labOT ) && scrollStep != 4 ):
            $('#cursor').addClass('hidden').addClass('small');
            MApp.switchContainer( '.canvas-wrapper' );
            MApp.activeCamera.position.z = 24;
            MApp.morph( 'slepok', .5 );
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
            MApp.activeCamera.position.z = 24;
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