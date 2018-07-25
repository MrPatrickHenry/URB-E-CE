<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>2020</title>

    <!-- Scripts -->
    <script src="https://20-twenty.online/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
 <link rel="stylesheet" href="https://20-twenty.online/css/materialize.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://20-twenty.online/js/materialize.min.js"></script> 
   <script
    src="http://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
   <style>

body {
    display: flex;
    min-height: 100vh;
    font-family: 'Nunito Sans', sans-serif;
    color:#464650;
    flex-direction: column;
  }
  main {
    flex: 1 0 auto;
  }
    
    .hide-on-med-and-down:hover{
    background-color:#000;
}

.card{
    padding:5%;
}
 {{--    .dropdown-item{
    background-color:#FFF;
} --}}

    {{-- .dropdown-item:active{
    background-color:#b90000;
} --}}
</style>
</head>
<body>
    <div id="app">
         @include('includes.nav')


        <main class="py-4">
            @yield('content')
        </main>
    </div>

<script src="js/three.js"></script>

        <script src="js/libs/inflate.min.js"></script>
        <script src="js/loaders/FBXLoader.js"></script>

        <script src="js/controls/OrbitControls.js"></script>

        <script src="js/Detector.js"></script>
        <script src="js/libs/stats.min.js"></script>

        <script>

            if ( ! Detector.webgl ) Detector.addGetWebGLMessage();

            var container, stats, controls;
            var camera, scene, renderer, light;

            var clock = new THREE.Clock();

            var mixers = [];

            init();
            animate();

            function init() {

                container = document.createElement( 'div' );
                document.body.appendChild( container );

                camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 2000 );
                camera.position.set( 100, 200, 300 );

                controls = new THREE.OrbitControls( camera );
                controls.target.set( 0, 100, 0 );
                controls.update();

                scene = new THREE.Scene();
                scene.background = new THREE.Color( 0xa0a0a0 );
<!--                scene.fog = new THREE.Fog( 0xa0a0a0, 200, 1000 );
 -->
                light = new THREE.HemisphereLight( 0xffffff, 0x444444 );
                light.position.set( 0, 200, 0 );
                scene.add( light );

                light = new THREE.DirectionalLight( 0xffffff );
                light.position.set( 0, 200, 100 );
                light.castShadow = true;
                light.shadow.camera.top = 180;
                light.shadow.camera.bottom = -100;
                light.shadow.camera.left = -120;
                light.shadow.camera.right = 120;
                scene.add( light );

                // scene.add( new THREE.CameraHelper( light.shadow.camera ) );

                // ground
                var mesh = new THREE.Mesh( new THREE.PlaneGeometry( 2000, 2000 ), new THREE.MeshPhongMaterial( { color: 0x999999, depthWrite: false } ) );
                mesh.rotation.x = - Math.PI / 2;
                mesh.receiveShadow = true;
<!--                scene.add( mesh );
 -->
                var grid = new THREE.GridHelper( 2000, 20, 0x000000, 0x000000 );
                grid.material.opacity = 0.2;
                grid.material.transparent = true;

                // model
                var loader = new THREE.FBXLoader();
                loader.load( 'models/fbx/BaseMesh_Anim.fbx', function ( object ) {

                    object.mixer = new THREE.AnimationMixer( object );
                    mixers.push( object.mixer );

                    var action = object.mixer.clipAction( object.animations[ 0 ] );
                    action.play();

                    object.traverse( function ( child ) {

                        if ( child.isMesh ) {

                            child.castShadow = true;
                            child.receiveShadow = true;

                        }

                    } );

                    scene.add( object );

                } );

                renderer = new THREE.WebGLRenderer();
                renderer.setPixelRatio( window.devicePixelRatio );
                renderer.setSize( window.innerWidth, window.innerHeight );
                renderer.shadowMap.enabled = true;
                container.appendChild( renderer.domElement );

                window.addEventListener( 'resize', onWindowResize, false );

                // stats
                stats = new Stats();
                container.appendChild( stats.dom );

            }

            function onWindowResize() {

                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();

                renderer.setSize( window.innerWidth, window.innerHeight );

            }

            //

            function animate() {

                requestAnimationFrame( animate );

                if ( mixers.length > 0 ) {

                    for ( var i = 0; i < mixers.length; i ++ ) {

                        mixers[ i ].update( clock.getDelta() );

                    }

                }

                renderer.render( scene, camera );

                stats.update();

            }

        </script>

            



</body>
</html>
