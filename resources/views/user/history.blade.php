<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>History</title>
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
                <h3>History</h3>
            </div>
        </div>
    </div>
    <div id="app-wrap">
        <div class="app-section st1 mt-1 bg_white_color">
            <div class="tf-container">
                <div class="wrap-total">
                    <div class="total-item">
                        <a href="#" class="box-icon bg_primary"><i
                                class="icon-arrow-up_minor primary_color"></i></a>
                        <div class="content">
                            <p class="fw_4">INVESTED</p>
                            <h2 class="fw_6 success_color">RS {{ user_investment() }}</h2>
                        </div>
                    </div>
                    <div class="total-item">
                        <a href="#" class="box-icon bg_critical"><i
                                class="icon-arrow-up_minor critical_color arrow-down"></i></a>


                        <div class="content">
                            <p class="fw_4">Outcome</p>
                            <h2 class="fw_6 critical_color">RS 878.35</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="app-section st1 mt-1 mb-5 bg_white_color">
            <div class="tf-container">
                <div class="trading-month">
                    <h4 class="fw_5 mb-3">November</h4>
                    <div class="group-trading-history mb-5">
                        <a class="tf-trading-history" href="61_filter-research.html">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-electricity-1"></i>
                                </div>
                                <div class="content">
                                    <h4>AD Machine</h4>
                                    <p>Today 10:27 AM</p>
                                </div>
                            </div>
                            <span class="num-val success_color">RS 343</span>
                        </a>
                        <a class="tf-trading-history" href="61_filter-research.html">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-electricity-1"></i>
                                </div>
                                <div class="content">
                                    <h4>AD Machine</h4>
                                    <p>Today 10:27 AM</p>
                                </div>
                            </div>
                            <span class="num-val success_color">RS 343</span>
                        </a>
                    </div>
                </div>
                <div class="trading-month">
                    <h4 class="fw_5 mb-3">November</h4>
                    <div class="group-trading-history mb-5">
                        <a class="tf-trading-history" href="61_filter-research.html">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-electricity-1"></i>
                                </div>
                                <div class="content">
                                    <h4>AD Machine</h4>
                                    <p>Today 10:27 AM</p>
                                </div>
                            </div>
                            <span class="num-val success_color">RS 343</span>
                        </a>
                        <a class="tf-trading-history" href="61_filter-research.html">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-electricity-1"></i>
                                </div>
                                <div class="content">
                                    <h4>AD Machine</h4>
                                    <p>Today 10:27 AM</p>
                                </div>
                            </div>
                            <span class="num-val success_color">RS 343</span>
                        </a>

                    </div>
                </div>
                <div class="trading-month">
                    <h4 class="fw_5 mb-3">September</h4>
                    <div class="group-trading-history mb-5">
                        <a class="tf-trading-history" href="61_filter-research.html">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-electricity-1"></i>
                                </div>
                                <div class="content">
                                    <h4>AD Machine</h4>
                                    <p>Today 10:27 AM</p>
                                </div>
                            </div>
                            <span class="num-val success_color">RS 343</span>
                        </a>
                        <a class="tf-trading-history" href="61_filter-research.html">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-electricity-1"></i>
                                </div>
                                <div class="content">
                                    <h4>AD Machine</h4>
                                    <p>Today 10:27 AM</p>
                                </div>
                            </div>
                            <span class="num-val success_color">RS 343</span>
                        </a>
                        <a class="tf-trading-history" href="61_filter-research.html">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-electricity-1"></i>
                                </div>
                                <div class="content">
                                    <h4>AD Machine</h4>
                                    <p>Today 10:27 AM</p>
                                </div>
                            </div>
                            <span class="num-val success_color">RS 343</span>
                        </a>
                        <a class="tf-trading-history" href="61_filter-research.html">
                            <div class="inner-left">
                                <div class="icon-box rgba_primary">
                                    <i class="icon icon-electricity-1"></i>
                                </div>
                                <div class="content">
                                    <h4>AD Machine</h4>
                                    <p>Today 10:27 AM</p>
                                </div>
                            </div>
                            <span class="num-val success_color">RS 343</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-navigation-bar">
        <div class="tf-container">
            <ul class="tf-navigation-bar">
                <li>
                    <a class="fw_4 d-flex justify-content-center align-items-center flex-column" href="{{ route('User.Dashboard') }}"><i
                            class="icon-home"></i> Home</a>
                </li>
                <li class="active">
                    <a class="fw_6 d-flex justify-content-center align-items-center flex-column"
                        href="{{ route('User.History') }}">
                        <i class="icon-history"></i> History</a>
                </li>
                <li>
                    <a class="fw_4 d-flex justify-content-center align-items-center flex-column"
                        href="40_qr-code.html">
                        <i class="icon-scan-qr-code"></i> </a>
                </li>
                <li>
                    <a class="fw_4 d-flex justify-content-center align-items-center flex-column"
                        href="62_rewards.html">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.25" cy="12" r="9.5" stroke="#717171" />
                            <path
                                d="M17.033 11.5318C17.2298 11.3316 17.2993 11.0377 17.2144 10.7646C17.1293 10.4914 16.9076 10.2964 16.6353 10.255L14.214 9.88781C14.1109 9.87213 14.0218 9.80462 13.9758 9.70702L12.8933 7.41717C12.7717 7.15989 12.525 7 12.2501 7C11.9754 7 11.7287 7.15989 11.6071 7.41717L10.5244 9.70723C10.4784 9.80483 10.3891 9.87234 10.286 9.88802L7.86469 10.2552C7.59257 10.2964 7.3707 10.4916 7.2856 10.7648C7.2007 11.038 7.27018 11.3318 7.46702 11.532L9.2189 13.3144C9.29359 13.3905 9.32783 13.5 9.31021 13.607L8.89692 16.1239C8.86027 16.3454 8.91594 16.5609 9.0533 16.7308C9.26676 16.9956 9.6394 17.0763 9.93735 16.9128L12.1027 15.7244C12.1932 15.6749 12.3072 15.6753 12.3975 15.7244L14.563 16.9128C14.6684 16.9707 14.7807 17 14.8966 17C15.1083 17 15.3089 16.9018 15.4469 16.7308C15.5845 16.5609 15.6399 16.345 15.6033 16.1239L15.1898 13.607C15.1722 13.4998 15.2064 13.3905 15.2811 13.3144L17.033 11.5318Z"
                                stroke="#717171" stroke-width="1.25" />
                        </svg>
                        App</a>
                </li>
                <li>
                    <a class="fw_4 d-flex justify-content-center align-items-center flex-column"
                        href="{{ route('User.Profile') }}">
                        <i class="icon-user-outline"></i> Profile</a>
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('assets/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/swiper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/main.js') }}"></script>

</body>

</html>