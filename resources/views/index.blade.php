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
@include('partials.head')

<body><!-- set class="dark" on body tag for DARK-THEME -->

  @include('partials.preloaderxwrapper')

<main class="site-wrapper">
  @if (!Request::routeIs('home'))
    @include('partials.page-top')
  @endif

  @yield('hexagon')
  
  <main class="site-wrapper" style="padding-top: {{ Request::routeIs('home') ? '0' : '70px' }};">
    @yield('content')
  </main>
</main> <!-- /.site-wrapper -->

@include('partials.bottom-asset')

</body>
</html>
