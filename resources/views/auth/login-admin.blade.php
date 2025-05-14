<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Hain Express</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/imgs/hain-logo.png') }}" />
        <!-- Template CSS -->
       <script src="{{ asset('backend/js/vendors/color-modes.js') }}"></script>
        <link href="{{ asset('backend/css/main.css?v=6.0') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <main>
            <header class="main-header style-2 navbar">
                <div class="col-brand">
                    <a href="{{ route('home') }}" class="brand-wrap">
                        <img src="{{ asset('backend/imgs/hain-logo-RECT.png') }}" class="logo" alt="Hain Express" />
                    </a>
                </div>
            </header>
          <!-- resources/views/auth/admin-login.blade.php -->
          
        <section class="content-main mt-120 mb-120">
            <div class="card mx-auto card-login">
                <div class="card-body">
                    <img src="{{ asset('backend/imgs/hain-logo-RECT.png') }}" class="logo" alt="Hain Express" /> 
                    <br><br>
                    <h2 class="card-title mb-4 text-center">SIGN IN</h2>

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{ route('admin.login.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" name="email" placeholder="Email Address" type="text" required />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" name="password" placeholder="Password" type="password" required />
                        </div>
                        <div class="mb-3">
                            <a href="#" class="float-end font-sm text-muted">Forgot password?</a>
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" name="remember" />
                                <span class="form-check-label">Remember Me</span>
                            </label>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary w-100 text-center">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        </main>
        <script src="{{ asset('backend/js/vendors/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('backend/js/vendors/bootstrap.bundle.min.js') }} "></script>
        <script src="{{ asset('backend/js/vendors/jquery.fullscreen.min.js') }} "></script>
        <!-- Main Script -->
        <script src="{{ asset('backend/js/main.js?v=6.0') }} " type="text/javascript"></script>
    </body>
</html>
