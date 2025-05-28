<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!-- 
THEME: Phantom - Bootstrap Portfolio Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/phantom-best-bootstrap-portfolio-template/
DEMO: https://demo.themefisher.com/phantom/
GITHUB: https://github.com/themefisher/Phantom-Bootstrap-Portfolio-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Phantom - Bootstrap Portfolio Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Portfolio HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Html5 Portfolio Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="phantom" />

  <!-- Essential Stylesheets -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css')}} ">
  <link rel="stylesheet" href="{{ asset('plugins/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/themefisher-fonts/css/themefisher-fonts.min.css') }}">  

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  <!-- Theme Stylesheet -->
  <link rel="stylesheet" href="#" id="color-changer">
  
  <!--Favicon-->
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

</head>
<body><!-- set class="dark" on body tag for DARK-THEME -->

  <div class="preloader">
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
  </div>

  <div class="preview-wrapper">
    <div class="switcher-head">
      <span>Style Switcher</span>
      <div class="switcher-trigger tf-tools"></div>
    </div>

    <div class="switcher-body">
      <h4>Choose Color:</h4>
      <ul class="color-options list-none">
        <li class="c0" data-color="red" title="Default">Default</li>
        <li class="c1" data-color="blue" title="Red">Red</li>
        <li class="c2" data-color="green" title="Green">Green</li>
        <li class="c3" data-color="yellow" title="Blue">Blue</li>
      </ul>
    </div>
  </div>

<main class="site-wrapper">
  @if (!Request::routeIs('home'))
    @include('partials.page-top')
  @endif

  @yield('hexagon')
  
  <main class="site-wrapper" style="padding-top: {{ Request::routeIs('home') ? '0' : '70px' }};">
    @yield('content')
  </main>
</main> <!-- /.site-wrapper -->



<!-- 
Essential Scripts
=====================================-->
<script src="{{ asset('plugins/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('plugins/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('plugins/slick/slick.min.js')}} "></script>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
