@extends('layouts.app')

@section('content')

    <main class="main pages">
      <div class="page-header breadcrumb-wrap">
        <div class="container">
          <div class="breadcrumb">
            <a href="{{ route('home') }}" rel="nofollow"
              ><i class="fi-rs-home mr-5"></i>Home</a
            >
            <span></span>Register
          </div>
        </div>
      </div>
      <div class="page-content pt-150 pb-150">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
              <div class="row">
                <div class="col-lg-6 col-md-8">
                  <div class="login_wrap widget-taber-content background-white">
                    <div class="padding_eight_all bg-white">
                      <div class="heading_s1">
                        <h1 class="mb-5">Create an Account</h1>
                        <p class="mb-30">
                          Already have an account?
                          <a href="{{ route('login') }}">Login</a>
                        </p>
                      </div>
                      <form method="post" action="{{ route('register.submit') }}">
                        @csrf
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul style="margin-bottom: 0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="Email Address" />
                        </div>
                        <div class="form-group">
                          <input
                            required=""
                            type="password"
                            name="password"
                            placeholder="Password"
                          />
                        </div>
                        <div class="form-group">
                          <input required="" type="password" name="confirm_password" placeholder="Confirm password" />
                        </div>
                        <div class="login_footer form-group">
                          <div class="chek-form">
                            <input type="text" required="" name="security_code" placeholder="Security code *" />
                          </div>
                          <span class="security-code">
                            <b class="text-new">8</b>
                            <b class="text-hot">6</b>
                            <b class="text-sale">7</b>
                            <b class="text-best">5</b>
                          </span>
                        </div>
                        <div class="payment_option mb-50">
                            <div class="custome-radio">
                                <input class="form-check-input"
                                    required
                                    type="radio"
                                    name="user_type"
                                    id="customer"
                                    value="customer"
                                    {{ old('user_type') == 'customer' ? 'checked' : '' }}>
                                <label class="form-check-label" for="customer">I am a customer</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input"
                                    required
                                    type="radio"
                                    name="user_type"
                                    id="vendor"
                                    value="vendor"
                                    {{ old('user_type') == 'vendor' ? 'checked' : '' }}>
                                <label class="form-check-label" for="vendor">I am a vendor</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input"
                                    required
                                    type="radio"
                                    name="user_type"
                                    id="rider"
                                    value="rider"
                                    {{ old('user_type') == 'rider' ? 'checked' : '' }}>
                                <label class="form-check-label" for="rider">I am a rider</label>
                            </div>
                        </div>
                        <div class="login_footer form-group mb-50">
                          <div class="chek-form">
                            <div class="custome-checkbox">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="checkbox"
                                id="exampleCheckbox12"
                                value=""
                              />
                              <label
                                class="form-check-label"
                                for="exampleCheckbox12"
                                ><span
                                  >I agree to terms &amp; Policy.</span
                                ></label
                              >
                            </div>
                          </div>
                          <a href="#"
                            ><i class="fi-rs-book-alt mr-5 text-muted"></i>Learn
                            more</a
                          >
                        </div>
                        <div class="form-group mb-30">
                          <button
                            type="submit"
                            class="btn btn-fill-out btn-block hover-up font-weight-bold"
                            name="login"
                          >
                            Submit &amp; Register
                          </button>
                        </div>
                        <p class="font-xs text-muted">
                          <strong>Note:</strong>Your personal data will be used
                          to support your experience throughout this website, to
                          manage access to your account, and for other purposes
                          described in our privacy policy
                        </p>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 pr-30 d-none d-lg-block">
                  <div class="card-login mt-115">
                    <a href="{{ route('login.facebook') }}" class="social-login facebook-login">
                      <img
                        src="assets/imgs/theme/icons/logo-facebook.svg"
                        alt=""
                      />
                      <span>Continue with Facebook</span>
                    </a>
                    <a href="{{ route('login.google') }}" class="social-login google-login">
                      <img
                        src="assets/imgs/theme/icons/logo-google.svg"
                        alt=""
                      />
                      <span>Continue with Google</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '{{ session('error') }}',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@endsection