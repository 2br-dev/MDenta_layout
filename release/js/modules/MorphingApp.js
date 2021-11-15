import * as THREE from '../lib/three.module.js';
import Stats from '../lib/stats.module.js';
import { OBJLoader } from '../lib/OBJLoader.js';
import { FXAAShader } from '../lib/FXAAShader.js';
import { ShaderPass } from '../lib/ShaderPass.js';
import { EffectComposer } from '../lib/EffectComposer.js';
import shaders from './shaders.js';

window.THREE = THREE;

class MorphingAPP{

    //#region Внутренние переменные
    morphMaterial;

    disassembling = false;
    assembling = false;
    doRaycast = true;
    
    container;

    pointSize;
    initialPointSize;
    pointColor;
    isAnimating;
    isAnimatingInterrupted;

    raycaster;
    raycastThreshold;

    renderer;
    scene;
    mesh;
    morphObjects = [];

    helper;
    stats;

    activeCamera;
    actorCamera;
    observerCamera;
    HPivot;
    VPivot;

    morphAttributes = [];
    morphInfluences = [];
    influenceArray = [];
    intersects = [];
    loadedObjects = 0;

    maxAngle;

    mousePos = {
        x: -.1,
        y: -.3,
        _x: 0,
        _y: 0
    }
    dpi;
    raycastDistance = 0;
    disolveAmount;

    animationVars = {
        speed: 1 / 100
    }

    requestAnimationFrameID;

    transitionSpeed;

    events = [];

    //#endregion

    // Инициалиация
    init = ( params = {
        /**@param pointSize Размер точки */ pointSize,
        /**@param pointColor Цвет точки */ pointColor,
        /**@param container DOM-элемент контейнера холста Canvas */ container,
        /**@param raycastThreshold Размер области пересечений */ raycastThreshold,
        /**@param disolveAmount Диапазон разлёта частиц */ disolveAmount,
        /**@param maxAngle Максимальный угол поворота */ maxAngle
    } ) => {
        //Установка начальных переменных
        let domEl = document.querySelector(params.container);
        if ( domEl ){
            this.container = domEl;
        }else{
            throw new Error( "Неверно указан контейнер!" );
        }

        if( !params.pointSize || params.pointSize >=3 ){
            throw new Error( "Размер точки не указан, или слишком велик" )
        }

        if( !params.pointColor || ( !params.pointColor instanceof THREE.Color && typeof( params.pointColor) !== 'number' ) ){
            throw new Error( "Не указан, или ошибочно указан цвет точки" );
        }else{
            this.pointColor = params.pointColor;
        }

        if( !params.raycastThreshold || typeof( params.raycastThreshold ) !== 'number' ){
            throw new Error( "Не указан, или некорректно указан размер области пересечений" );
        }else{
            this.raycastThreshold = params.raycastThreshold;
        }

        if( !params.raycastDistance || !typeof( params.raycastDistance ) === 'number' ){
            throw new Error( 'Не указан или неверно указана дистанция пересечений' )
        }else{
            this.raycastDistance = params.raycastDistance;
        }

        if ( !params.disolveAmout || !typeof( params.disolveAmout === 'number' ) ){
            throw new Error( "Не указан или неверно указан диапазон разлёта частиц" );
        }else{
            this.disolveAmout = params.disolveAmout;
        }

        
        if ( !params.transitionSpeed || !typeof( params.transitionSpeed === 'number' ) ){
            throw new Error( "Не указан или неверно указана скорость перехода" );
        }else{
            this.transitionSpeed = params.transitionSpeed;
        }

        this.initialPointSize = params.pointSize;
        
        this.maxAngle = params.maxAngle;

        // Инициализация 3D окружения
        this.init3JS( params.pointSize );

        this.on( 'morphingComplete', () => {
            this.animate();
        } )
    }

    // Назначение событий
    /**
     * 
     * @param {*} eventName Имя события
     * @param {*} callBack Обработчик
     */
    on = ( eventName, callBack ) => {
        this.events.push({
            name: eventName,
            callBack: callBack
        });
    }

    // Инициализация ThreeJS
    /**
     * 
     * @param {*} pointSize  Размер точки
     */
    init3JS = ( pointSize ) => {

        if( !this.scene ){
            this.scene = new THREE.Scene();
            this.raycaster = new THREE.Raycaster();
            this.raycaster.params.Points.threshold = this.raycastThreshold;
        }

        this.initPoint( pointSize );
        this.initMaterials();
        this.initRenderer();
        this.initCameras();

        this.triggerEvent( 'environmentLoaded', null );

        this.animate();
        
    }

    // Инициализация точки
    /**
     * 
     * @param {*} pointSize Размер точки
     */
    initPoint = () => {

        let aspect = 32 / screen.pixelDepth;

        this.pointSize = this.initialPointSize * ( window.devicePixelRatio * aspect );
    }

    // Инициализация рендерера
    initRenderer = () => {

        // Базовая инициализация
        this.renderer = new THREE.WebGLRenderer( {alpha: true, antialias: true} );
        this.renderer.setSize( window.innerWidth, window.innerHeight );
        this.renderer.setPixelRatio( window.devicePixelRatio );

        // Постпроцесс
        let fxaa, composer;
        fxaa = new ShaderPass( FXAAShader );
        composer = new EffectComposer( this.renderer );
        composer.addPass( fxaa );
        const pixelRatio = this.renderer.getPixelRatio();
        fxaa.material.uniforms[ 'resolution' ].value.x = 1 / ( window.innerWidth * pixelRatio );
        fxaa.material.uniforms[ 'resolution' ].value.y = 1 / ( window.innerHeight * pixelRatio );

        this.container.appendChild( this.renderer.domElement );
    }

    // Инициализация камер
    initCameras = () => {

        let containerAspect = this.container.offsetWidth / this.container.offsetHeight;
        let windowAspect = window.innerWidth / window.innerHeight;

        let aspect = containerAspect;


        // Обозреватель
        this.observerCamera = new THREE.PerspectiveCamera( 75, aspect, 0.1, 1000 );
        this.observerCamera.name = "observer";

        // Актёр
        this.actorCamera = new THREE.PerspectiveCamera( 75, aspect, .1, 50 );
        this.actorCamera.name = "actor";

        // Визуальное представление камеры
        this.helper = new THREE.CameraHelper( this.actorCamera );
        // this.helper.visible = false;

        this.scene.add( this.observerCamera );
        this.scene.add( this.actorCamera );
        // this.scene.add( this.helper );

        this.Hpivot = new THREE.Mesh(new THREE.BoxGeometry(4, 1, 10), new THREE.MeshStandardMaterial());
        this.Vpivot = new THREE.Mesh(new THREE.BoxGeometry(4, 10, 1));
        this.scene.add(this.Vpivot);
        this.scene.add(this.Hpivot);
        this.Hpivot.visible = this.Vpivot.visible = false;

        this.Vpivot.parent = this.Hpivot;
        this.actorCamera.parent = this.Vpivot;

        this.observerCamera.position.x = 20;
        this.observerCamera.position.y = 20;
        this.observerCamera.position.z = 20;
        this.observerCamera.lookAt( 0, 0, 0 );
        this.actorCamera.position.z = 30;

        this.activeCamera = this.observerCamera;
    }

    // Инициализация материалов
    initMaterials = () => {
        
        this.morphMaterial = new THREE.PointsMaterial( { 
            color: this.pointColor,
            map: new THREE.TextureLoader().load("/img/particle_large.png"),
            transparent: true,
            blending: THREE.AdditiveBlending,
            alphaTest: .01,
            size: this.pointSize,
            side: THREE.DoubleSide
        } );

        let uniforms = {
            pointTexture: { value: new THREE.TextureLoader().load( "/img/particle_large.png" ) }
        };

    }

    // Инициализация сцены
    updateScene = () => {

        let aspect = this.container.offsetWidth / this.container.offsetHeight;
        
        this.actorCamera.aspect = this.observerCamera.aspect = aspect;
        this.actorCamera.updateProjectionMatrix();
        this.observerCamera.updateProjectionMatrix();
        this.renderer.setSize( this.container.offsetWidth, this.container.offsetHeight );
    }

    // Обновление данных о позиции мыши
    /**
     * 
     * @param {*} e Событие
     */
    updateMouse = e => {

        this.triggerEvent( 'mousestart' );

        if ( window.outerWidth >= 600 ){


            TweenMax.to( $( '#cursor' ), 1.5, {
                left: e.pageX,
                top: e.pageY - $('html, body').scrollTop(),
                ease: Power4.easeOut,
                onUpdate: () => {
    
                    let centerX = parseInt($('#cursor').css('left')) - $(this.container).offset().left;
                    let centerY = parseInt($('#cursor').css('top'));
        
                    this.mousePos.x = (centerX / window.innerWidth) * 2 - 1;
                    this.mousePos.y = -(centerY / window.innerHeight) * 2 + 1;
                    this.mousePos._x = centerX;
                    this.mousePos._y = centerY;
                    this.triggerEvent( 'mousemove', this.mousePos );
    
                },
                onComplete: () => {
                    this.triggerEvent( 'mousestop' );
                }
            } );
        }

    }

    // Вызов событий
    /**
     * 
     * @param {*} eventName Имя события
     * @param {*} data Данные
     */
    triggerEvent = ( eventName, data ) => {

        let callbacks = this.events.filter(event => {
            return event.name == eventName
        });

        if( callbacks.length ){
            let callback = callbacks[0].callBack;
            callback.bind( window );
            callback( data );
        }
    }

    // Вызов событий с передачей множественных данных
    /**
     * 
     * @param {*} eventName Имя события
     * @param {*} data Данные
     */
    triggerEventData = ( eventName, data ) => {
        let callbacks = this.events.filter(event => {
            return event.name == eventName
        });

        if( callbacks.length ){
            let callback = callbacks[0].callBack;
            callback.bind( window );
            callback( ...data );
        }
    }

    // Переключение камер
    /**
     * 
     * @param {*} e Событие
     */
    switchCamera = () => {
        this.activeCamera = this.activeCamera.name == 'actor' ? this.observerCamera : this.actorCamera;
    }

    // Сравнение векторов
    /**
     * 
     * @param {*} vec1 Точка, которую сравниваем (Vector3)
     * @param {*} vec2 Точка, с которой сравниваем (Vector3)
     */
    isEqual = ( vec1, vec2 ) => {
        if(vec1.x == vec2.x && vec1.y == vec2.y && vec1.z == vec2.z){
            return true;
        }else{
            return false;
        }
    }

    // Анимация
    animate = () => {

        if( this.isAnimatingInterrupted ){
            this.isAnimatingInterrupted = false;
            window.cancelAnimationFrame( this.requestAnimationFrameID );
            return;
        }

        Promise.resolve().then(

            () => {

                let canvas = $(this.container).find('canvas')[0];

                if ( window.outerWidth >= 600 ){
            
                    let rX, rY;
    
                    if ( !this.maxAngle ){
    
                        rY = -( ( this.animationVars.speed + ( this.mousePos.x / 10 ) ) / 5);
                        rX = this.mousePos.y;
                        this.Hpivot.rotation.y += rY;
                        this.Vpivot.rotation.x = rX;
                    }else{
                        rY = this.mousePos.x * this.maxAngle;
                        rX = this.mousePos.y;
                        let aspect = window.innerWidth / window.innerHeight;
                        this.Hpivot.rotation.y = -rY / 111;
                        this.Vpivot.rotation.x = rX;
                    }

                    if( this.mesh && this.doRaycast ) {
                        
                        this.rayCast();
                    }
                }

                window.cancelAnimationFrame( this.requestAnimationFrameID );

                this.renderer.render( this.scene, this.activeCamera );
                this.requestAnimationFrameID = window.requestAnimationFrame( this.animate.bind( this ) );

            }
        )

    }

    // Остановка анимации
    stop = () => {
        this.isAnimatingInterrupted = true;
    }

    // Загрузка 3D моделей
    /**
     * 
     * @param {*} objectsData Данные объектов
     * @param {*} callback Обработчик
     */
    loadObjects = ( objectsData ) => {

        let totalObjects 
        if( objectsData.morphingObjects ){
            if( objectsData.morphingObjects.length ){
                totalObjects = objectsData.morphingObjects.length + 1;
            }else{
                totalObjects = 1;
            }
        }else{
            totalObjects = 1;
        }
        
        let loader = new OBJLoader();
        this.triggerEvent( 'loadingstart' );
        
        // Загрузка базовой модели
        loader.load(
            '/obj/' + objectsData.baseObject.name + '.obj',
            object => {

                let pointsCount = this.initBaseObject( object, objectsData.baseObject.name );

                this.morphAttributes = [];
                this.morphInfluences = [];

                let anihilationMatrix = [ ...this.mesh.geometry.attributes.position.array];
                    
                for ( let i = 0; i < anihilationMatrix.length; i++ ){
                
                    let index = parseInt([Math.random() * 2]);
                    let operator = [1, -1][index];
                    let offset = Math.random() * this.disolveAmout;
                    anihilationMatrix[ i ] += offset * operator;
                }
                
                let anihilationAttribute = new THREE.Float32BufferAttribute( anihilationMatrix, 3 );
                anihilationAttribute.name = "annihilation";
                this.mesh.geometry.morphAttributes.position = [ anihilationAttribute ];
                this.mesh.morphTargetInfluences = [ 0 ];

                this.loadedObjects ++;
                this.triggerEvent( 'baseloaded', objectsData.baseObject );

                if(!objectsData.morphingObjects || objectsData.morphingObjects == []){
                    this.triggerEvent( 'loadingcomplete' );
                    return;
                }

                // Загрузка морфовых моделей
                objectsData.morphingObjects.forEach( mObj => {

                    loader.load(
                        '/obj/' + mObj.name + '.obj',
                        object => {
                            mObj.percent = 100;
                            this.triggerEvent( 'morphloaded', mObj );
                            this.loadedObjects ++;

                            this.initMorphObject( object, mObj.name, pointsCount );

                            if( this.loadedObjects == objectsData.morphingObjects.length + 1){

                                this.mesh.geometry.morphAttributes.position = this.morphAttributes;
                                this.mesh.morphTargetInfluences = this.morphInfluences;
                    
                                this.morphAttributes = [];
                                this.morphInfluences = [];

                                if ( totalObjects > 1 ){

                                    // Создание анигиляционной матрицы
                                    this.mesh.morphTargetInfluences.push( 0 );
                                    let anihilationMatrix = [ ...this.mesh.geometry.attributes.position.array];
                                    
                                    for ( let i = 0; i < anihilationMatrix.length; i++ ){
                                    
                                        let index = parseInt([Math.random() * 2]);
                                        let operator = [1, -1][index];
                                        let offset = Math.random() * this.disolveAmout;
                                        anihilationMatrix[ i ] += offset * operator;
                                    }
                                    
                                    let anihilationAttribute = new THREE.Float32BufferAttribute( anihilationMatrix, 3 );
                                    anihilationAttribute.name = "annihilation";
                                    this.mesh.geometry.morphAttributes.position.push( anihilationAttribute );
                                }
                                
                                this.triggerEvent( 'loadingcomplete' );
                            }
                        },
                        xhr => {

                            let percent = ( xhr.loaded / xhr.total * 100 ) ;

                            mObj.percent = percent;

                            // Вычисляем процент загруженных объектов
                            let allPercent = 0;
                            objectsData.morphingObjects.forEach(MO => {
                                allPercent += MO.percent
                            });

                            allPercent /= objectsData.morphingObjects.length;

                            this.triggerEvent( 'morphloading', allPercent );
                        }
                    )
                } );
            },
            xhr => {
                this.triggerEventData( 'baseloading', [ xhr, totalObjects ] );
            }
        )

    }

    // Инициализация базового мэша
    /**
     * 
     * @param {*} object Объект
     * @param {*} name Имя объекта
     * @returns Количество точек
     */
    initBaseObject = ( object, name ) => {

        var geometry;
        let mesh;

        object.traverse( child => {

            if( child instanceof THREE.Mesh ){

                geometry = child.geometry;
                mesh = new THREE.Points( geometry, this.morphMaterial );
                this.morphObjects.push(mesh);

                geometry.computeBoundingSphere();

                let sizes = [];

                // Запись размеров
                for ( let i = 0; i < geometry.attributes.position.array.length / 3; i++ ){
                    sizes.push(this.pointSize);
                }
                let sizesAttribute = new THREE.Float32BufferAttribute( sizes, 1 );
                mesh.name = name;
                mesh.geometry.setAttribute( 'size', sizesAttribute );

                // Запись оригинального расположения точек
                let orPos = [...geometry.attributes.position.array];
                let orAttr = new THREE.Float32BufferAttribute( orPos, 3 );
                mesh.geometry.setAttribute( 'position_original', orAttr );

                let colors = [];
                // Запись информации о цвете
                for ( let i = 0; i < geometry.attributes.position.array.length / 3; i++ ){
                    let color = new THREE.Color( this.pointColor );
                    colors.push( color.r );
                    colors.push( color.g );
                    colors.push( color.b );
                }
                let colorAttr = new THREE.Float32BufferAttribute( colors, 3 );
                mesh.geometry.setAttribute( 'color', colorAttr );

            }
        } );

        this.mesh = this.activeMesh = mesh;
        this.scene.add( this.mesh );

        return geometry.attributes.position.array.length;

    }

    // Инициализация морфовых мэшей
    /**
     * 
     * @param {*} object Объект
     * @param {*} name Имя
     * @param {*} pointsCount Количество точек
     */
    initMorphObject = ( object, name, pointsCount ) => {

        object.traverse(child => {

            if( child instanceof THREE.Mesh ){

                let cursor = 0;
                let positions = [];
                let sizes = [];

                for ( let i = 0; i < pointsCount; i++ ){

                    positions.push(child.geometry.attributes.position.array[cursor]);

                    cursor ++;
                    if(cursor >= child.geometry.attributes.position.array.length){
                        cursor = 0;
                    }
                    
                }

                for (let i = 0; i < pointsCount / 3; i ++){
                    sizes.push(this.pointSize);
                }

                let positionAttribute = new THREE.Float32BufferAttribute(positions, 3);
                positionAttribute.name = name;
                this.morphAttributes.push(positionAttribute);
                this.morphInfluences.push(0);

                child.material = this.morphMaterial;

                let morphMesh = new THREE.Points(child.geometry, this.morphMaterial);
                morphMesh.name = name;
                morphMesh.visible = false;
                this.morphObjects.push(morphMesh);
                // sortPoints(morphMesh);

                // Создание анигиляционной матрицы
                let distortedPosArray = [ ...child.geometry.attributes.position.array ];

                for ( let i = 0; i < distortedPosArray.length; i++ ){
                    let index = parseInt([Math.random() * 2]);
                    let operator = [1, -1][index];
                    let offset = Math.random() * this.disolveAmout;
                    distortedPosArray[ i ] += offset * operator;
                }
                let anihilationAttribute = new THREE.Float32BufferAttribute( distortedPosArray, 3 );
                anihilationAttribute.name = "anihilation";
                morphMesh.geometry.morphAttributes.position = [ anihilationAttribute ];
                morphMesh.morphTargetInfluences = [ 0 ];


                let orPos = [...child.geometry.attributes.position.array];
                let orAttr = new THREE.Float32BufferAttribute(orPos, 3);
                morphMesh.geometry.setAttribute('position_original', orAttr);

                let colors = [];
                // Запись информации о цвете
                for ( let i = 0; i < morphMesh.geometry.attributes.position.array.length / 3; i++ ){
                    let color = new THREE.Color( this.pointColor );
                    colors.push( color.r );
                    colors.push( color.g );
                    colors.push( color.b );
                }
                let colorAttr = new THREE.Float32BufferAttribute( colors, 3 );
                morphMesh.geometry.setAttribute( 'color', colorAttr );
                
                this.scene.add(morphMesh);
            }
        });
    }

    // Обработка пересечений
    rayCast = () => {

        const { top, left, width, height } = this.renderer.domElement.getBoundingClientRect();

        let offset = this.container.offsetTop - document.documentElement.scrollTop;

        let mPos = {
            x: (this.mousePos._x / width) * 2 - 1,
            y: -((this.mousePos._y - top) / height) * 2 + 1
        }

        if ( !this.activeMesh || this.dissolved || window.innerWidth < 600 || this.isAnimating  ) return;

        let mesh = this.activeMesh;
        let attributes = mesh.geometry.attributes;
       
        this.raycaster.setFromCamera( mPos, this.activeCamera );
        this.intersects = this.raycaster.intersectObject( mesh, false );
        this.triggerEvent( 'intersects', this.intersects );

        // Сброс позиций
        for( var i=0; i < attributes.position.array.length; i++ ){
            attributes.position.array[ i ] = attributes.position_original.array[ i ];
        }

        if ( this.intersects.length ){

            let maxDistance = Math.max(...this.intersects.map( e => e.distanceToRay ));
            let max = this.raycastDistance;

            for ( let i = 0; i < this.intersects.length; i++ ){

                let intersect = this.intersects[ i ];
                let sizeIndex = intersect.index;
                let positionIndex = sizeIndex * 3;
                let origin = new THREE.Vector3( 0, 0, 0 );
                let point = new THREE.Vector3(
                    attributes.position_original.array[ positionIndex ],
                    attributes.position_original.array[ positionIndex + 1 ],
                    attributes.position_original.array[ positionIndex + 2 ],
                );
                let percent = intersect.distanceToRay / maxDistance;
                let direction = point.clone().normalize();

                if ( !this.isEqual( origin, direction ) ){

                    let ray = new THREE.Ray( origin, direction );
                    let currentDistance = point.distanceTo( origin );
                    let offset = max - ( max * percent );
                    let newDistance = currentDistance + offset;
                    let destination = new THREE.Vector3();
                    ray.at( newDistance, destination );

                    attributes.position.array[ positionIndex ] = destination.x;
                    attributes.position.array[ positionIndex + 1 ] = destination.y;
                    attributes.position.array[ positionIndex + 2 ] = destination.z;
                }
            }
        }

        attributes.position.needsUpdate = true;
    }

    // Инициализация перетеканий
    /**
     * 
     * @param {*} name Имя объекта перетекания
     * @param {*} speed Скорость перетекания
     */
    morph = ( name, speed ) => {

        // Если объект растворён или запущена другая анимация, прерываем выполнение
        if( this.isAnimating || !this.mesh ) return;

        let targetArray = new Int32Array( this.mesh.morphTargetInfluences.length );

        this.stop();

        // Скрываем все объекты, кроме базового
        for ( let i = 1; i < this.morphObjects.length; i++ ){
            this.morphObjects[ i ].visible = false;
        }
        this.mesh.visible = true;
        this.mesh.material = this.morphMaterial;

        let influence = this.mesh.geometry.morphAttributes.position.filter( element => {
            return element.name == name;
        } )[ 0 ];

        let influenceIndex = this.mesh.geometry.morphAttributes.position.indexOf( influence );

        if ( influenceIndex >= 0 ){
            targetArray[ influenceIndex ] = 1;
        }

        // Запуск трансформации
        targetArray[ targetArray.length ] = 0;

        this.isAnimating = true;

        for ( let i = 0; i < targetArray.length; i++ ){
            this.tweenMorph( i, targetArray[ i ], influenceIndex, speed );
        }


    }

    // Анимация перетеканий
    /**
     * 
     * @param {*} index Индекс морфового атрибута
     * @param {*} newVal Новое значение
     * @param {*} visibleObjectIndex Индекс видимого объекта
     * @param {*} speed Скорость анимации
     */
    tweenMorph = ( index, newVal, visibleObjectIndex, speed ) => {

        if ( this.influenceArray.length == 0 ){
            this.influenceArray = new Int32Array( this.mesh.morphTargetInfluences.length );
        }

        let influenceObj = {
            val: this.influenceArray[ index ]
        }

        if( influenceObj.val == newVal ) return;

        TweenMax.to( influenceObj, speed, {
            ease: Power4.easeInOut,
            val: newVal,
            onUpdate: () => { 
                this.mesh.morphTargetInfluences[ index ] = influenceObj.val
                this.renderer.render( this.scene, this.activeCamera );
            },
            onComplete: () => {

                this.activeMesh = this.morphObjects[ visibleObjectIndex + 1 ];
                this.influenceArray[ index ] = newVal;

                if ( visibleObjectIndex >= 0 ){
                    this.mesh.visible = false;
                    this.morphObjects[ visibleObjectIndex + 1 ].visible = true;
                }else{
                    this.mesh.material = this.morphMaterial;
                }

                for ( let i = 0; i < this.morphObjects.length; i++ ){
                    this.morphObjects[ i ].morphTargetInfluences.fill( 0 );
                }

                this.isAnimating = false;

                this.triggerEvent('morphingComplete');
            }
        } )
    }

    // Растворение 3D объекта
    /**
     * 
     * @param {*} speed Скорость
     * @param {*} callBack Функция по завершению
     */
    disassemble = ( speed, callBack = () => {} ) => {

        if ( !this.activeMesh ) return;

        let influenceIndex = this.loadedObjects > 1 ? this.activeMesh.morphTargetInfluences.length - 1 : 0;
        let anihilationInfluence = this.activeMesh.morphTargetInfluences[ influenceIndex ];

        if(anihilationInfluence != 0) return;

        let influenceObj = {
            val: anihilationInfluence
        }

        let pSize = this.pointSize;

        TweenMax.to(influenceObj, speed, {
            val: 1,
            ease: Power4.easeIn,
            onUpdate: () => {

                let percent = influenceObj.val / 1;
                let pointSize = pSize - pSize * percent

                this.isAnimating = true;
                this.activeMesh.morphTargetInfluences[ influenceIndex ] = influenceObj.val
                this.activeMesh.material.size = pointSize;

                this.renderer.render( this.scene, this.activeCamera );

            },
            onComplete: () => {

                this.dissolved = true;
                this.isAnimating = false;
                // this.morphMaterial.size = pSize;

                callBack();
            }
        })
    }

    // Сборка 3D объекта
    /**
     * 
     * @param {*} speed Скорость
     * @param {*} callBack Функция по завершению
     */
    assemble = ( speed, callback = () => {} ) => {

        let influenceIndex = this.activeMesh.morphTargetInfluences.length - 1;
        let anihilationInfluence = this.activeMesh.morphTargetInfluences[ influenceIndex ];

        if(anihilationInfluence != 1) return;

        let influenceObj = {
            val: 1
        }

        let pSize = this.pointSize;

        TweenMax.to(influenceObj, speed, {
            val: 0,
            ease: Power4.easeOut,
            onUpdate: () => {

                this.isAnimating = true;
                
                let percent = influenceObj.val / 1;
                let pointSize = pSize - pSize * percent
                this.activeMesh.morphTargetInfluences[ influenceIndex ] = influenceObj.val
                this.activeMesh.material.size = pointSize;

                this.renderer.render( this.scene, this.activeCamera );

                console.log( pointSize );
            },
            onComplete: () => {
                this.dissolved = false;
                this.isAnimating = false;
                this.morphMaterial.size = pSize;

                callback();
            }
        })
    }

    // Переключение контейнера
    /**
     * 
     * @param {*} container Селектор нового контейнера
     */
    switchContainer = ( container, callback = () => {} ) => {

        // Если контейнер тот же самый, выходим
        if ( this.container.classList.contains( container.substring(1) ) ) return;

        // Остановка текущего рендера и очистка холста
        this.stop();
        this.container.innerHTML = '';
        
        // Реинициализация
        this.container = document.querySelector( container );

        this.init3JS( this.pointSize, false );
        this.activeCamera = this.actorCamera;
        this.renderer.setSize( this.container.offsetWidth, this.container.offsetHeight );

        for( let i = 0; i < this.morphObjects.length; i ++ ){
            this.morphObjects[ i ].material.size = this.pointSize;
        }

        callback();

        // Запуск анимации
        this.animate();

    }
}

export default MorphingAPP;