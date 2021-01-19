<!DOCTYPE html>
<html lang="en">
  <head>
    <title>VNVC &mdash; </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 " rel="stylesheet">
    <link rel="stylesheet" href="{{asset('client/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('client/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('client/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('client/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('client/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('client/css/style.css')}}">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    @include('client.partial.header_home')
    @show

    @yield('content')

    @include('client.partial.footer')
    @show
  </div> <!-- .site-wrap -->

  <script src="{{asset('client/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('client/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('client/js/jquery-ui.js')}}"></script>
  <script src="{{asset('client/js/popper.min.js')}}"></script>
  <script src="{{asset('client/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('client/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('client/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('client/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('client/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('client/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('client/js/aos.js')}}"></script>
  <script src="{{asset('client/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('client/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('client/js/main.js')}}"></script>

  </body>
</html>
