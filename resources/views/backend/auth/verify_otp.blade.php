<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

<head>
    <meta charset="utf-8" />
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme Config Js -->
    <script src="/assets/backend/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="/assets/backend/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />
    
    <!-- Icons css -->
    <link href="/assets/backend/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>
<body class="authentication-bg pb-0">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="card-body d-flex flex-column h-100">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="/" class="logo-dark"> 
                        <span><img src="{{ asset('/assets/frontend/images/cropped-header-logo-1.webp') }}" alt="dark logo" style="width:200px; height:50px;" ></span>
                    </a>
                    <a href="/" class="logo-light">
                        <span><img src="{{ asset('/assets/frontend/images/cropped-header-logo-1.webp') }}" alt="logo" style="width:200px; height:50px;" ></span>
                    </a>
                </div>

                <div class="my-auto">
                    <!-- title-->
                    <h4 class="mt-0">Verify OTP</h4>
                    <p class="text-muted mb-4">Enter your OTP to access account.</p>

                    @if($errors->has('otp'))  
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $errors->first('otp') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                                                 
                    @endif
                    
                    @if(session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- form -->
                    <form method="post" action="{{route('verify-otp')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="otp" class="form-label">Email address</label>
                            <input class="form-control" type="text" id="otp" name="otp" required placeholder="Enter OTP">
                        </div>

                        <div class="d-grid mb-0 text-center">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Submit </button>
                        </div>

                    </form>

                    @if(session('method') != 'email')

                        <form action="{{ route('resend-otp') }}" method="post">
                            @csrf
                            <input type="hidden" name="method" value="sms">
                            <button type="submit">Resend OTP via SMS</button>
                        </form>

                    @else

                        <form action="{{ route('resend-otp') }}" method="post">
                            @csrf
                            <input type="hidden" name="method" value="email">
                            <button type="submit">Resend OTP via Email</button>
                        </form>

                    @endif


                    <a href="{{ url(route('backend.login')) }}"><button type="submit">Back to Login</button>

                    <!-- end form-->
                </div>

                <!-- Footer-->
                <footer class="footer footer-alt">
                   {{-- <p class="text-muted">Don't have an account? <a href="pages-register-2.html" class="text-muted ms-1"><b>Sign Up</b></a></p> --}}
                </footer>

            </div> <!-- end .card-body -->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <!--<div class="auth-user-testimonial">
                <h2 class="mb-3">I love the color!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - Nexgeno
                </p>
            </div>--> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->
    <!-- Vendor js -->
    <script src="/assets/backend/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="/assets/backend/js/app.min.js"></script>


    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>