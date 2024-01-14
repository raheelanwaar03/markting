<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>QR code</title>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo.png') }}" />
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}" />
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/icons-alipay.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/styles.css') }}" />
    <link rel="manifest" href="#" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('assets/app/icons/icon-192x192.png') }}">
</head>

<body>
    <div class="header">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
                <h3>QR Code</h3>
            </div>
        </div>
    </div>
    <div class="wrap-qr">
        <div class="tf-container">
            <h2 class="fw_6 text-center">Your QR Code</h2>
            <div class="logo-qr">
                <img src="{{ asset('assets/images/scan-qr/qrcode1.png') }}" alt="image">
            </div>

        </div>
    </div>
    <div class="bottom-navigation-bar bottom-btn-fixed">
        <div class="tf-container d-flex gap-3">
            <a href="#" class="tf-btn accent medium">App</a>
            <a href="#" class="tf-btn outline medium">Scan For Downloading</a>

        </div>
    </div>

    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>

</body>

</html>
