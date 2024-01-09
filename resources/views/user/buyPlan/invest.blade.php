<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Plan Details</title>
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
                <h3>Plan Details</h3>
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
            <div class="col-sm-12 d-flex justify-content-between align-items-center m-4">
                <img src="{{ asset('image/' . $plan->image) }}" alt="img" class="img-fluid"
                    style="height: 80px;width:80px;">
                <p style="font-size:15px;color:rgb(19, 95, 208)">{{ $plan->plan_name }}
                </p>
                <p style="font-size:15px;color:rgb(19, 95, 208)">{{ $plan->persentage }}%</p>
                <p style="font-size:15px;color:rgb(19, 95, 208)">{{ $plan->duration }}Days</p>
            </div>
            <form class="tf-form mt-3" action="{{ route('User.Buy.Plan', $plan->id) }}" method="POST">
                @csrf
                <div class="group-input">
                    <label for="">Invest</label>
                    <input type="number" name="amount"
                        placeholder="Check your profit according to investment but it should be between in({{ $plan->min_invest }}-{{ $plan->max_invest }})">
                </div>
                <div class="st2">
                    <button type="submit" class="tf-btn accent large">Next</button>
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
