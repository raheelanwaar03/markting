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

<body>
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div class="app-header st1">
        <div class="tf-container">
            <div class="tf-topbar d-flex justify-content-center align-items-center">
                <a href="#" class="back-btn"><i class="icon-left white_color"></i></a>
                <h3 class="white_color">Withdraw</h3>
            </div>
        </div>
    </div>
    <div class="card-secton topup-content">
        <div class="tf-container">
            <div class="tf-balance-box">
                <div class="d-flex justify-content-between align-items-center">
                    <p>Your Balance:</p>
                    <h3>{{ auth()->user()->balance }}pkr</h3>
                </div>
                <div class="tf-spacing-16"></div>
                <div class="tf-form">
                    <div class="group-input input-field input-money">
                        <label for="">Amout Of Money</label>
                        <input type="text" required class="search-field value_input st1" type="text">
                        <span class="icon-clear"></span>
                    </div>
                </div>

            </div>

        </div>
        <div class="bottom-navigation-bar">
            <div class="tf-container">
                <a href="#" id="btn-popup-up" class="tf-btn accent large">Continue</a>
            </div>
        </div>
    </div>

    <div class="amount-money mt-5">
        <div class="tf-container">
            <h3>Amount To Widthraw</h3>
            <ul class="money list-money">
                <li><a class="tag-money" href="#">50</a> </li>
                <li><a class="tag-money" href="#">100</a> </li>
                <li><a class="tag-money" href="#">200</a> </li>
                <li><a class="tag-money" href="#">500</a> </li>
                <li><a class="tag-money" href="#">1000</a> </li>
                <li><a class="tag-money" href="#">2000</a> </li>
            </ul>
        </div>
    </div>

    <div class="tf-panel up">
        <div class="panel_overlay"></div>
        <div class="panel-box panel-up wrap-content-panel">
            <div class="heading">
                <div class="tf-container">
                    <div class="d-flex align-items-center position-relative justify-content-center">
                        <i class="icon-close1 clear-panel"></i>
                        <h3>Confirm Withdraw</h3>
                    </div>
                </div>
            </div>
            <div class="main-topup">
                <div class="tf-container">
                    <h3>Choose Source</h3>
                    <div class="tf-card-block d-flex align-items-center justify-content-between">
                        <div class="inner d-flex align-items-center">
                            <div class="logo-img">
                                <img src="{{ asset('assets/images/logo-banks/card-visa3.png') }}" alt="image">
                            </div>
                            @if ($wallet !== null)
                                <div class="content">
                                    <h4><a href="#" class="fw_6">{{ $wallet->wallet_name }}</a></h4>
                                    <p>{{ $wallet->wallet_number }}</p>
                                    <i class="icon-right"></i>
                                </div>
                            @else
                                <h4><a href="{{ route('User.Add.Wallet') }}" class="fw_6">Add Wallet</a></h4>
                                <p>You have not added any wallet yet!</p>
                                <a href="{{ route('User.Add.Wallet') }}">
                                    <i class="icon-right"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <ul class="info">
                        <li>
                            <h4 class="secondary_color fw_4 d-flex justify-content-between align-items-center">Amout
                                <input type="text" style="border: none;width:100px;" required class="search-field value_input st1"></h4>
                        </li>
                        <li>
                            <h4 class="secondary_color fw_4 d-flex justify-content-between align-items-center">Fee <a
                                    href="#" class="success_color fw_7">Free</a></h4>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="total">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="secondary_color fw_4">Total</h4>
                                <h2><input type="text" style="border: none;width:100px;" required class="search-field value_input st1"
                               readonly></h2>
                            </div>
                        </div>
                        <a id="withdrawBtn" class="tf-btn accent large" onclick="showHelloModal()"><i
                                class="icon-secure1"></i> Withdraw</a>

                        <div class="modal fade" id="helloModal" tabindex="-1" role="dialog"
                            aria-labelledby="helloModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h1>Will be Transfer after a While (3 Working Hours)</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function showHelloModal() {
                                var modal = document.getElementById('helloModal');
                                modal.classList.add('show');
                                modal.style.display = 'block';

                                // Redirect after 3 seconds
                                setTimeout(function() {
                                    window.location.href = '/home.html';
                                }, 1000);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('assets/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/swiper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/main.js') }}"></script>

</body>

</html>
