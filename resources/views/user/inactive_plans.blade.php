<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/icons-alipay.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/styles.css') }}" />
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('assets/app/icons/icon-192x192.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <x-alert />
    <div class="container">
        <nav class="navbar shadow">
            <h3 class="heading">Trade</h3>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a href="{{ route('User.Plan.Status') }}" style="text-decoration:none">
                        <div class="three-div">
                            <i class="fa-solid fa-hourglass-half" style="margin-left:35px;"></i> <br>
                            <span style="margin-left: 20px;">Active</span>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{ route('User.Claimed.Plan.Status') }}" style="text-decoration:none">
                        <div class="three-div">
                            <i id="icons" class="fa-solid fa-arrows-up-to-line" style="margin-left: 30px;"></i> <br>
                            <span style="margin-left: 20px;">Claimed</span>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <div class="one-div">
                        <a href="{{ route('User.Inactive.Plan.Status') }}" style="text-decoration:none;">
                            <i id="icons" class="fa-solid fa-cubes-stacked" style="margin-left: 20px;"></i> <br>
                            <span style="color: #0e6e15; margin-left: 20px;">Completed</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-section st1 mt-1 mb-5 bg_white_color">
            <div class="tf-container">
                <div class="trading-month">
                    <h4 class="fw_5 mb-3">{{ month() }} AI Technology</h4>
                    <div class="group-trading-history mb-5">
                        @forelse ($history as $item)
                            <div class="tf-trading-history" href="#">
                                <div class="inner-left">
                                    <div class="icon-box rgba_primary">
                                        <i class="icon icon-electricity-1"></i>
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-around align-items-center">
                                            <h2>{{ $item->plan_name }}</h2>
                                            @if ($item->status == 'pending')
                                                <p style="color:red">({{ $item->status }})</p>
                                            @else
                                                <p style="color:green">({{ $item->status }})</p>
                                            @endif
                                        </div>
                                        <p>Invest: {{ $item->amount }}</p>
                                        <p>Daily Icome: {{ $item->daily_profit }}</p>
                                        <p>Total Icome: {{ $item->total_profit }}</p>
                                        <p>
                                            Percentage: @progression($item->duration, $item->amount)%
                                        </p>
                                        <p>Start Date <span
                                                style="font-size:15px;color:#0e6e15;">({{ $item->created_at->format('m/d/Y') }})</span>
                                            <br>End Date: <span
                                                style="font-size:15px;color:#0e6e15;">({{ getNextDate($item->created_at, $item->duration) }})</span>
                                        </p>
                                    </div>
                                </div>
                                <a href="{{ route('User.Invest.Plan', $item->id) }}"
                                    class="btn btn-success">Reinvest</a>
                            </div>
                        @empty
                            <h3>Empty</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="last-div" class="text-center">
                        <i id="last-icon" class="fa-solid fa-caret-left"></i> &nbsp;&nbsp &nbsp;&nbsp
                        <i id="last-icon-r" class="fa-solid fa-caret-right"></i>
                    </div>
                </div>
            </div>
        </div>

        @include('user.layout.bottam')

        <script type="text/javascript" src="{{ asset('assets/javascript/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/javascript/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/javascript/swiper-bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/javascript/swiper.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/javascript/main.js') }}"></script>

</body>

</html>
