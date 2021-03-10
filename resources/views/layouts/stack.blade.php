<!doctype html>
<html lang="en">
    
<!-- Mirrored from trystack.mediumra.re/home-knowledge-base.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Sep 2018 10:26:44 GMT -->
<head>
        <meta charset="utf-8">
        <title>ApnaHouse-</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
        <link href="/stack/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/stack/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/stack/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/stack/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/stack/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/stack/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/stack/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/stack/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/stack/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        
    </head>
    @yield('css')
    <body class=" ">
        <a id="start"></a>
        <section class="bar bar-3 bar--sm bg--secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bar__module">
                            <span class="type--fade">ApnaHouse- Architects</span>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right text-left-xs text-left-sm">
                        <div class="bar__module">
                            <ul class="menu-horizontal">
                                
                                @if(Auth::guard('architect')->guest())
                                @guest
                                <li>
                                    <div class="modal-instance">
                                        <a href="#" class="modal-trigger">Login</a>
                                        <div class="modal-container">
                                            <div class="modal-content section-modal">
                                                <section class="unpad ">
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-6">
                                                                <div class="boxed boxed--lg bg--white text-center feature">
                                                                    
                                                                    <div class="modal-close modal-close-cross"></div>
                                                                    
                                                                    <h3>Login to Your Account</h3>
                                                                    <div class="feature__body">
                                                                            <form method="POST" action="{{ route('login') }}">
                                                                                @csrf
                                                                        
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <button class="btn btn--primary type--uppercase" type="submit">Login</button>
                                                                                </div>
                                                                            </div>
                                                                            <!--end of row-->
                                                                        </form>
                                                                        <span class="type--fine-print block">Dont have an account yet?
                                                                            <a href="#">Create account</a>
                                                                        </span>
                                                                        <span class="type--fine-print block">Forgot your username or password?
                                                                            <a href="#">Recover account</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end of row-->
                                                    </div>
                                                    <!--end of container-->
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="modal-instance">
                                        <a href="#" class="modal-trigger">Login Architect</a>
                                        <div class="modal-container">
                                            <div class="modal-content section-modal">
                                                <section class="unpad ">
                                                    <div class="container">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-6">
                                                                <div class="boxed boxed--lg bg--white text-center feature">
                                                                    
                                                                    <div class="modal-close modal-close-cross"></div>
                                                                    
                                                                    <h3>Login to Your Account</h3>
                                                                    <div class="feature__body">
                                                                            <form method="POST" action="{{ route('architect.login') }}">
                                                                                @csrf
                                                                        
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <button class="btn btn--primary type--uppercase" type="submit">Login</button>
                                                                                </div>
                                                                            </div>
                                                                            <!--end of row-->
                                                                        </form>
                                                                        <span class="type--fine-print block">Dont have an account yet?
                                                                            <a href="#">Create account</a>
                                                                        </span>
                                                                        <span class="type--fine-print block">Forgot your username or password?
                                                                            <a href="#">Recover account</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end of row-->
                                                    </div>
                                                    <!--end of container-->
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                    
                                <li>
                                    <div class="modal-instance">
                                        <a href="#" class="modal-trigger">Create Account</a>
                                        <div class="modal-container">
                                            <div class="modal-content">
                                                <section class="imageblock feature-large bg--white border--round ">
                                                    <div class="imageblock__content col-lg-5 col-md-3 pos-left">
                                                        <div class="background-image-holder">
                                                            <img alt="image" src="/stack/img/cowork-11.jpg" />
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row justify-content-end">
                                                            <div class="col-lg-7">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-lg-10 col-md-11">
                                                                        <h2>Create an account</h2>
                                                                        <form method="POST" action="{{ route('register') }}">
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                <input id="name" placeholder="Full Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                <input id="email" placeholder="Email ID" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="8"  required>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <button type="submit" class="btn btn--primary type--uppercase">Create Account</button>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <span class="type--fine-print">By signing up, you agree to the
                                                                                        <a href="#">Terms of Service</a>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <!--end row-->
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!--end of row-->
                                                            </div>
                                                            <!--end of col-->
                                                        </div>
                                                        <!--end of row-->
                                                    </div>
                                                    <!--end of container-->
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                              

                                @endguest
                                @elseif(Auth::guard('architect')->user())
                            <li><a href = "{{route('architect.dashboard')}}"><h5>{{Auth::guard('architect')->user()->name}}</h5></li></a>
                                <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            
                                </li>
                            
                                @endif
                                @auth
                                {{-- <li><a href = "{{route('home')}}"><h5>{{Auth::guard('web')->user()->name}}</h5></li></a> --}}
                                {{-- <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            
                                </li> --}}
                            @endauth

                                
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--end bar-->
            <!--end bar-->
            <nav id="menu1"  class="bar bar--sm bar-1 hidden-xs ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-md-2 hidden-xs">
                            <div class="bar__module">
                                <a href="#">
                                    <img class="logo logo-dark" alt="logo" src="/stack/img/logo_m.jpg" />
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                            <div class="bar__module">
                                <ul class="menu-horizontal text-left">
                                <li class="dropdown">
                                <a href="#">
                                    <span class="">Home</span>
                                        <!--end dropdown container-->
                                    </li>
                                </a>

                                <li class="dropdown">
                                <a href="#">    
                                <span class="">About Us</span>
                                        <!--end dropdown container-->
                                    </li>
                                </a>
                                    <li class="dropdown">
                                    <a href="#">    
                                        <span class="">Services</span>
                                        <!--end dropdown container-->
                                    </li>
                                </a>

                                    <li class="dropdown">
                                        <a href="#">
                                        <span class="">Contact Us</span>
                                        <!--end dropdown container-->
                                </li>
                            </a>
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
            <!--end bar-->
        </div>

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

<!-- Mirrored from trystack.mediumra.re/home-knowledge-base.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Sep 2018 10:26:45 GMT -->
</html>
@yield('js')