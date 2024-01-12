<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Login</title>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo.png') }}" />
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}" />
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/icons-alipay.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/styles.css') }}" />
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('assets/app/icons/icon-192x192.png') }}">

</head>

<body>
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div class="header">
        <div class="tf-container">
            <div class="tf-statusbar br-none d-flex justify-content-center align-items-center">
                <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
            </div>
        </div>
    </div>
    <div class="mt-3 register-section">
        <div class="tf-container">
            <form class="tf-form" action="{{ route('login') }}" method="POST">
                @csrf
                <h1>Login</h1>
                <div class="group-input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Example@gmail">
                </div>
                <div class="group-input auth-pass-input last">
                    <label>Password</label>
                    <input type="password" name="password" class="password-input" placeholder="Password">
                    <a class="icon-eye password-addon" id="password-addon"></a>
                </div>
                <a href="#" class="auth-forgot-password mt-3">Forgot Password?</a>

                <button type="submit" class="tf-btn accent large">Log In</button>

            </form>
            <div class="auth-line">Or</div>
            <p class="mb-9 fw-3 text-center">Already have a Account? <a href="{{ route('register') }}"
                    class="auth-link-rg">Sign up</a></p>
        </div>
    </div>



    <script type="text/javascript" src="{{ asset('assets/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/password-addon.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/init.js') }}"></script>


</body>

</html>
