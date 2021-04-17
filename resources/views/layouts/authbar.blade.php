<section class="bar bar-3 bar--sm bg--secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="bar__module">
          {{-- <span class="type--fade">ApnaHouse Architects</span> --}}
        </div>
      </div>
      <div class="col-lg-6 text-right text-left-xs text-left-sm">
        <div class="bar__module">
          <ul class="menu-horizontal">
            @if (auth('architect')->check())
              <li>
                <a href="{{ route('architect.dashboard') }}">
                  Architect Account
                </a>
              </li>
            @else
              <li>
                <div class="modal-instance">
                  <a href="#" class="modal-trigger">Architect Login</a>
                  <div class="modal-container">
                    <div class="modal-content section-modal">
                      <section class="unpad ">
                        <div class="container">
                          <div class="row justify-content-center">
                            <div class="col-md-6">
                              <div class="boxed boxed--lg bg--white text-center feature">
                                <div class="modal-close modal-close-cross"></div>
                                <h3>Architect Account</h3>
                                <div class="feature__body">
                                  <form method="POST" action="{{ route('architect.login') }}">
                                    @csrf
                                    <div class="row">
                                      <div class="col-md-12">
                                        <input id="email" type="email"
                                          class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                          name="email" value="{{ old('email') }}" placeholder="Email" required
                                          autofocus>
                                      </div>
                                      <div class="col-md-12">
                                        <input id="password" type="password"
                                          class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                          name="password" placeholder="Password" required>
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
            @endif
            <span class="mr-3"> | </span>
            @if (auth('architect')->check())
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
                                        <input id="email" type="email"
                                          class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                          name="email" value="{{ old('email') }}" placeholder="Email" required
                                          autofocus>
                                      </div>
                                      <div class="col-md-12">
                                        <input id="password" type="password"
                                          class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                          name="password" placeholder="Password" required>
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
                                        <input id="name" placeholder="Full Name" type="text"
                                          class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                          name="name" value="{{ old('name') }}" required autofocus>
                                      </div>
                                      <div class="col-12">
                                        <input id="email" placeholder="Email ID" type="email"
                                          class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                          name="email" value="{{ old('email') }}" required>
                                      </div>
                                      <div class="col-12">
                                        <input id="password" placeholder="Password" type="password"
                                          class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                          name="password" minlength="8" required>
                                      </div>
                                      <div class="col-12">
                                        <input id="password-confirm" placeholder="Confirm Password" type="password"
                                          class="form-control" name="password_confirmation" required>
                                      </div>
                                      <div class="col-12">
                                        <button type="submit" class="btn btn--primary type--uppercase">Create
                                          Account</button>
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
            @else
              <li>
                <a href="{{ route('user.dashboard.dashboard') }}">
                  My Account
                </a>
              </li>
            @endif

            @auth
              <li><a href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            @endauth

          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
