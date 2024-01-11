@extends('layouts.app')
@section('content')
    <div class="card-secton">
        <div class="tf-container">
            <div class="tf-balance-box bg-warning" style="background-color: rgb(231, 198, 12);">
                <div class="balance">
                    <div class="row">
                        <div class="col-6">
                            <div class="inner-left">
                                <p>Your Balance:</p>
                                <h3>RS {{ auth()->user()->balance }}</h3>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="inner-right">
                                <p>1st Deposit Reward</p>
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
                            <a href="javascript:void(0);" class="fw_6 text-center" id="btn-popup-down">
                                <ul class="icon icon-group-transfers">
                                    <li class="path1"></li>
                                    <li class="path2"></li>
                                    <li class="path3"></li>
                                </ul>
                                Deposit
                            </a>
                        </li>
                        <li class="wallet-card-item">
                            <a class="fw_6" href="{{ route('User.Widthraw.View') }}">
                                <ul class="icon icon-topup">
                                    <li class="path1"></li>
                                    <li class="path2"></li>
                                    <li class="path3"></li>
                                    <li class="path4"></li>
                                </ul>
                                Withdraw
                            </a>
                        </li>
                        <li class="wallet-card-item">
                            <a class="fw_6 btn-card-popup" href="#">
                                <ul class="icon icon-my-qr">
                                    <li class="path1"></li>
                                    <li class="path2"></li>
                                    <li class="path3"></li>
                                    <li class="path4"></li>
                                    <li class="path5"></li>
                                    <li class="path6"></li>
                                    <li class="path7"></li>
                                </ul>
                                Support
                            </a>
                        </li>
                        <li class="wallet-card-item">
                            <a class="fw_6" href="{{ route('User.Daily.Reward') }}">
                                <ul class="icon icon-group-credit-card">
                                    <li class="path1"></li>
                                    <li class="path2"></li>
                                    <li class="path3"></li>
                                </ul>
                                Daily Reward
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
                <h3 class="fw_6">AI Technology Investment Products</h3>
                <a href="#" class="primary_color fw_6">View All</a>
            </div>
            <div class="card custom-card">
                @foreach ($plans as $plan)
                    <div class="card-body d-flex align-items-center">
                        <!-- Image on the left -->
                        <div class="pr-3" style="margin-right:15px;">
                            <img src="{{ asset('image/' . $plan->image) }}" height="150px" width="150px" class="card-img">
                        </div>
                        <!-- Text beside the image -->
                        <div class="pl-3">
                            <h5 class="card-title">{{ $plan->plan_name }} - {{ $plan->duration }} Days</h5>
                            <p class="card-text">({{ $plan->min_invest }}-{{ $plan->max_invest }})
                                {{-- <span style="background-color:cyan;color:white;padding: 5px;border-radius: 20px;">Experimental</span> --}}
                                <br>
                                <b>({{ $plan->persentage }}%)</b>
                            </p>
                        </div>

                        <!-- "Visit" button on the right -->
                        <div class="ml-auto">
                            <a href="{{ route('User.Invest.Plan', $plan->id) }}" class="btn btn-primary">Start</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-5 mb-9">
    </div>
@endsection
