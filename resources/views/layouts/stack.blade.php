<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> ApnaHouse </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site Description Here">
  <link rel="icon" href="/brand/favicon.jpg">
  <link href="/stack/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/stack/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/stack/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/stack/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/stack/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/stack/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/stack/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/stack/css/theme.css" rel="stylesheet" type="text/css" media="all" />
  <link href="/stack/css/custom.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
@yield('css')

<body class=" ">
  <a id="start"></a>

  @include('layouts.authbar')

  <nav id="menu1" class="bar bar--sm bar-1 hidden-xs ">
    <div class="container">
      <div class="row">
        <div class="col-lg-1 col-md-2 hidden-xs">
          <div class="bar__module">
            <a href="#">
              <img class="logo logo-dark" alt="logo" src="/brand/apnahouse.png" height="50px" />
              {{-- <img class="logo logo-dark" alt="logo" src="/stack/img/logo_m.jpg" /> --}}
            </a>
          </div>
        </div>
        <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
          <div class="bar__module">
            <ul class="menu-horizontal text-left">
              <li class="dropdown">
                <a href="#">
                  <span class="">Home</span>
                </a>
              </li>
              <li class="dropdown">
                <a href="#">
                  <span class="">About Us</span>
                </a>
              </li>
              <li class="dropdown">
                <a href="/plans">
                  <span class="">See Plans</span>
                </a>
              </li>
              <li class="dropdown">
                <a href="#">
                  <span class="">Services</span>
                </a>
              </li>

              <li class="dropdown">
                <a href="#">
                  <span class="">Contact Us</span>
                </a>
              </li>
            </ul>
          </div>
          <!--end module-->
          <hr>
          <!--end module-->
        </div>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </nav>

  @yield('content')
  @yield('table')

  <footer class="text-center-xs space--xs bg--dark ">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <ul class="list-inline">
            <li>
              <a href="#">
                <span class="h6 type--uppercase">About</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="h6 type--uppercase">Careers</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="h6 type--uppercase">Support</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-5 text-right text-center-xs">
          <ul class="social-list list-inline list--hover">
            <li>
              <a href="#">
                <i class="socicon socicon-google icon icon--xs"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="socicon socicon-twitter icon icon--xs"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="socicon socicon-facebook icon icon--xs"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="socicon socicon-instagram icon icon--xs"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!--end of row-->
      <div class="row">
        <div class="col-md-7">
          <span class="type--fine-print">&copy;
            <span class="update-year"></span> Stack Inc.</span>
          <a class="type--fine-print" href="#">Privacy Policy</a>
          <a class="type--fine-print" href="#">Legal</a>
        </div>
        <div class="col-md-5 text-right text-center-xs">
          <a class="type--fine-print" href="#">support@stack.io</a>
        </div>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </footer>
  </div>
  <!--<div class="loader"></div>-->
  <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
    <i class="stack-interface stack-up-open-big"></i>
  </a>
  <script src="/stack/js/jquery-3.1.1.min.js"></script>
  <script src="/stack/js/flickity.min.js"></script>
  <script src="/stack/js/easypiechart.min.js"></script>
  <script src="/stack/js/parallax.js"></script>
  <script src="/stack/js/typed.min.js"></script>
  <script src="/stack/js/datepicker.js"></script>
  <script src="/stack/js/isotope.min.js"></script>
  <script src="/stack/js/ytplayer.min.js"></script>
  <script src="/stack/js/lightbox.min.js"></script>
  <script src="/stack/js/granim.min.js"></script>
  <script src="/stack/js/jquery.steps.min.js"></script>
  <script src="/stack/js/countdown.min.js"></script>
  <script src="/stack/js/twitterfetcher.min.js"></script>
  <script src="/stack/js/spectragram.min.js"></script>
  <script src="/stack/js/smooth-scroll.min.js"></script>
  <script src="/stack/js/scripts.js"></script>
</body>

</html>
@yield('js')
