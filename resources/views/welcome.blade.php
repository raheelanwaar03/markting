@extends('layouts.app')
@section('content')
    <div class="card-secton">
        <div class="tf-container">
            <div class="tf-balance-box">
                <div class="balance">
                    <div class="row">
                        <div class="col-6 br-right">
                            <div class="inner-left">
                                <p>Your Balance:</p>
                                @if (auth()->user())
                                    <h3>Rs {{ auth()->user()->balance }}</h3>
                                @else
                                    <h3>RS 3.466,9</h3>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="inner-right">
                                @if (auth()->user())
                                    <p>1st payment</p>
                                @else
                                    <p>Not Login yet</p>
                                @endif
                                <h3>
                                    <ul class="icon-gift-box">
                                        <li class="path1"></li>
                                        <li class="path2"></li>
                                        <li class="path3"></li>
                                        <li class="path4"></li>
                                        <li class="path5"></li>
                                        <li class="path6"></li>
                                        <li class="path7"></li>
                                        <li class="path8"></li>
                                        <li class="path9"></li>
                                        <li class="path10"></li>
                                    </ul>

                                    <span>Reward</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wallet-footer">
                    <ul class="d-flex justify-content-between align-items-center">
                        <li class="wallet-card-item">
                            @if (auth()->user())
                                <a href="javascript:void(0);" class="fw_6 text-center" id="btn-popup-down">
                                    <ul class="icon icon-group-transfers">
                                        <li class="path1"></li>
                                        <li class="path2"></li>
                                        <li class="path3"></li>
                                    </ul>
                                    Deposit
                                </a>
                            @else
                                @if (auth()->user())
                                    <a href="{{ route('User.Transfer') }}" class="fw_6 text-center" id="btn-popup-down">
                                        <ul class="icon icon-group-transfers">
                                            <li class="path1"></li>
                                            <li class="path2"></li>
                                            <li class="path3"></li>
                                        </ul>
                                        Deposit
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="fw_6 text-center" id="btn-popup-down">
                                        <ul class="icon icon-group-transfers">
                                            <li class="path1"></li>
                                            <li class="path2"></li>
                                            <li class="path3"></li>
                                        </ul>
                                        Deposit
                                    </a>
                                @endif
                            @endif
                        </li>
                        <li class="wallet-card-item">
                            @if (auth()->user())
                                <a class="fw_6" href="{{ route('User.Widthraw.View') }}">
                                    <ul class="icon icon-topup">
                                        <li class="path1"></li>
                                        <li class="path2"></li>
                                        <li class="path3"></li>
                                        <li class="path4"></li>
                                    </ul>
                                    Withdraw
                                </a>
                            @else
                                <a class="fw_6" href="{{ route('login') }}">
                                    <ul class="icon icon-topup">
                                        <li class="path1"></li>
                                        <li class="path2"></li>
                                        <li class="path3"></li>
                                        <li class="path4"></li>
                                    </ul>
                                    Withdraw
                                </a>
                            @endif
                        </li>
                        <li class="wallet-card-item">
                            @if (auth()->user())
                                <a class="fw_6 btn-card-popup"
                                    href="whatsapp://send?Team=03149720318&text=Hello%2C%20{{ env('APP_NAME') }}!">
                                    <ul class="icon icon-group-credit-card">
                                        <li class="path1"></li>
                                        <li class="path2"></li>
                                        <li class="path3"></li>
                                    </ul>
                                    Whatsapp
                                </a>
                            @else
                                <a class="fw_6 btn-card-popup" href="{{ route('login') }}">
                                    <ul class="icon icon-group-credit-card">
                                        <li class="path1"></li>
                                        <li class="path2"></li>
                                        <li class="path3"></li>
                                    </ul>
                                    Whatsapp
                                </a>
                            @endif
                        </li>
                        <li class="wallet-card-item">
                            <a class="fw_6" href="40_qr-code.html">
                                <ul class="icon icon-my-qr">
                                    <li class="path1"></li>
                                    <li class="path2"></li>
                                    <li class="path3"></li>
                                    <li class="path4"></li>
                                    <li class="path5"></li>
                                    <li class="path6"></li>
                                    <li class="path7"></li>
                                </ul>
                                App
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <style>
        /* Add custom styles if needed */
        .custom-card {
            max-width: 100%;
        }

        .card-img {
            width: 100px;
            /* Set the desired width for your image */
            height: auto;

        }

        .ml-auto {
            margin-left: 37px;
        }

        .card-body {
            border: 1px solid 1px solid #110d0d1a;
            margin-bottom: 5px;
            border-radius: 15px;

        }
    </style>
    <div class="mt-5">
        <div class="tf-container">
            <div class="tf-title d-flex justify-content-between">
                <h3 class="fw_6">AD Machine Investment Products </h3>
                <a href="#" class="primary_color fw_6">View All</a>
            </div>
            <div class="card custom-card">
                @forelse($plans as $plan)
                    <div class="card-body d-flex align-items-center">
                        <!-- Image on the left -->
                        <img src="{{ asset('image/' . $plan->image) }}" alt="Card Image" class="card-img">

                        <!-- Text beside the image -->
                        <div class="ml-3">
                            <h5 class="card-title">{{ $plan->plan_name }} - {{ $plan->duration }} Days</h5>
                            <p class="card-text">{{ $plan->min_invest }}-{{ $plan->max_invest }} <span
                                    style="background-color:cyan;color:white;padding: 5px;border-radius: 20px;">Experimental</span><br>
                                <b>({{ $plan->persantage }}% Day)</b>
                            </p>
                        </div>

                        <!-- "Visit" button on the right -->
                        <div class="ml-auto">
                            @if (auth()->user())
                                <a href="{{ route('User.Invest.Plan',$plan->id) }}" class="btn btn-primary">Start</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary">Start</a>
                            @endif
                        </div>
                    </div>
                @empty
                    <h3 class="text-center">Admin have not any plan yet</h3>
                @endforelse
            </div>
        </div>
    </div>

    <div class="mt-5 mb-9">

    </div>
@endsection


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background:pink">
    <h1 style="font-size:100px;color:red">Hameera Imtaiz</h1> <br>
    <h1 style="font-size:100px;color:red">Shrajreel Imtaiz</h1> <br>
    <h1 style="font-size:100px;color:red">Samina Imtaiz</h1> <br>
    <h1 style="font-size:100px;color:red">Raheel Anwaar</h1> <br>
</body>
</html> --}}
