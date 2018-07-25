<!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119240024-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119240024-1');
</script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta description="Share your creation, help people hang out with Beyonce or wear latest Nike , make people laugh or cry, start your own business with 2020, Don't loose out! Start monitizing your VR/AR Experience ">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>2020 programmatic Native Advertisement, monetize your VR/AR Experience</title>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<!--   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
  <script src="https://20-twenty.online/js/three.js"></script>
  <script src="https://20-twenty.online/js/libs/inflate.min.js"></script>
  <script src="https://20-twenty.online/js/loaders/FBXLoader.js"></script>
  <script src="https://20-twenty.online/js/controls/OrbitControls.js"></script>
  <script src="https://20-twenty.online/js/Detector.js"></script>
  <script src="https://20-twenty.online/js/libs/stats.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <!-- Styles -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


<!-- bootstrap table
 -->

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>

<!-- Latest compiled and minified Locales -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-en-US.min.js"></script>
<!--  highcharts
 --><script src="https://code.highcharts.com/maps/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="//code.highcharts.com/maps/modules/map.js"></script>
<script src="https://code.highcharts.com/maps/modules/data.js"></script>
<script src="https://code.highcharts.com/maps/modules/offline-exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>

  <link href="/css/app.css" rel="stylesheet">

<!-- end of high charts -->
</head>
<body ng-app="2020xRPlatform">
@include('includes.modalAssetUpload')
@include('includes.modalOrderInsert')

  @php
  $uri  = Route::currentRouteName();
  @endphp

  @if ($uri === 'login') 
  <div class="login_type">
  </div>

  @elseif ($uri === 'register')
  <div class="signin_type">
  </div>

  @endif


<div id="wrapper">
  <div id="app">  
    @include('includes.nav')
  </div>

  <main class="col-md-12">
    @yield('content')

  </main>

</div>
<div style="clear: both"></div>
<!-- <!--   @include('includes.footer') -->


@include('includes.footerscripts')
</body>
</html>
