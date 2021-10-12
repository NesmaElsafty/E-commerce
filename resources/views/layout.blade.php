<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    MalaZ E-Commerce 
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/material-kit.css?v=2.0.7') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href=" {{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
</head>
<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ route('home') }}">
        Home </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('MainCategories') }}">
               Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('MainProducts') }}">
               Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('MainBranches')}}">
               Branches
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
              <i class="fa fa-instagram"></i>
            </a>
          </li>

          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">settings</i>
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="{{ route('profile')}}" class="dropdown-item">
                <i class="material-icons">person</i> Profile
              </a>

              <a href="{{ route('cart')}}" class="dropdown-item">
                <i class="material-icons">shopping_cart</i> Cart
              </a>

              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="dropdown-item" href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                <i class="material-icons">logout</i>
                {{ __('Log Out') }}
              </a>
            </form>
          </div>
        </li>
<!-- endif -->

      </ul>
    </div>
  </div>
</nav>
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: URL('../assets/img/bg2.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1>Malaz E-Commerce.</h1>
          <h3>This is main page of Malaz E-Commerce</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main main-raised">
  <div class="section section-basic">
    <div class="container">
     @yield('content')


   </div>
 </div>


</div>

</body>
<footer class="footer" data-background-color="black">

</footer>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
<!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>
<script>
  $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });

  </script>
</body>

</html>
