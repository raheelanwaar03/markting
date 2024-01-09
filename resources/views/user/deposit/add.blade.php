<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Deposit</title>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo.png') }}" />
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}" />
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/icons-alipay.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/styles.css') }}" />
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('assets/app/icons/icon-192x192.png') }}">
</head>


<body class="bg_surface_color">

    <x-alert />
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div class="header mb-1 is-fixed">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
                <h3>Deposit</h3>
            </div>
        </div>
    </div>
    <div class="content-by-bank mt-3">
        <div class="tf-container">
            <div class="heading">
                <h3 class="d-flex justify-content-between fw_6">Deposit To <a href="#">Help <i
                            class="icon-right"></i></a></h3>
                <div class="tf-spacing-12"></div>
            </div>
            <form class="tf-form mt-3" action="{{ route('User.Store.Transfer') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="group-input">
                    <label for="">Bank</label>
                    <div class="box-custom-select">
                        <select class="default-select" name="bank">
                            <option class="item" value="easypaisa"
                                data-thumbnail="https://freesvg.org/img/1612850349easypaisa.png">
                                EasyPaisa</option>
                            <option class="item" value="jazzcash"
                                data-thumbnail="https://seeklogo.com/images/N/new-jazz-logo-D69BD35771-seeklogo.com.png?v=638133576270000000">
                                JazzCash</option>
                            <option class="item" value="nayapay"
                                data-thumbnail="https://ffnews.com/wp-content/uploads/2021/08/1618827688137.jpeg">
                                NayaPay</option>
                            <option class="item" value="sadapay"
                                data-thumbnail="https://mena.news/wp-content/uploads/2021/04/sadapay.png">Sadapay
                            </option>
                            <option class="item" value="meezan"
                                data-thumbnail="https://complaint.pk/storage/brands/meezan%20bank%20complaints_1678659901.png">
                                Meezan Bank</option>
                        </select>
                        <div class="lang-select">
                            <ul class="btn-select" value=""></ul>
                            <i class="icon-down"></i>
                        </div>
                        <div class="banks-select">
                            <ul id="box-select"></ul>
                        </div>
                    </div>

                </div>
                <div class="group-input">
                    <label for="">From Account Number</label>
                    <input type="text" name="account_number" placeholder="1234 0000 2134 3243">
                    <div class="credit-card">
                        <span>Saved Number</span>
                        <i class="icon-bankgroup"></i>
                    </div>

                </div>
                <div class="group-input">
                    <label for="">Account Name</label>
                    <input type="text" name="account_name" placeholder="Your Bank Name">
                </div>
                <div class="group-input input-field input-money">
                    <label for="">Amout Of Money</label>
                    <input type="text" name="money" value="5000" required class="search-field value_input st1"
                        type="text">
                    <span class="icon-clear"></span>
                    <div class="money">
                        <a class="tag-money" href="#">500</a>
                        <a class="tag-money" href="#">1000</a>
                        <a class="tag-money" href="#">5000</a>
                    </div>
                </div>
                <div class="group-input">
                    <label for="">Payment Screen Shot</label>
                    <input type="file" name="screen_shot" class="form-control">
                    <div class="tf-spacing-12"></div>
                    <div class="group-checkbox">
                        <input type="checkbox" class="tf-checkbox st1" checked>
                        <span class="fw_3">Send Selected Amount to our <b>()</b> number with account title <b>()</b> in <b>()</b> bank. After Tranfer Add ScreenShot and also send it to +92373084032 On What's app - money will
                            be added under
                            12 working hours in your account.</span>
                    </div>
                </div>
                <div class="bottom-navigation-bar bottom-btn-fixed st2">
                    <button type="submit" class="tf-btn accent large">Continue</button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('assets/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/swiper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/main.js') }}"></script>

</body>

</html>
