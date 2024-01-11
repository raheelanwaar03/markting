@extends('user.layout.app')

@section('content')
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
                <h3>Profit Details</h3>
            </div>
        </div>
    </div>
    <div class="content-by-bank mt-3">
        <div class="tf-container">
            <div class="heading">
                <h3 class="d-flex justify-content-between fw_6">Profit Details<i class="icon-right"></i></h3>
                <div class="tf-spacing-12"></div>
            </div>
            <form class="tf-form mt-3" action="{{ route('User.Store.Plan', $plan->id) }}" method="POST">
                @csrf
                <div class="d-flex justify-content-between align-items-center m-4">
                    <img src="{{ asset('image/' . $plan->image) }}" alt="img" class="img-fluid"
                        style="height: 80px;width:80px;">
                    <p style="font-size:15px;color:rgb(19, 95, 208)">{{ $plan->plan_name }}
                    </p>
                    <p style="font-size:15px;color:rgb(19, 95, 208)">{{ $plan->persentage }}%</p>
                    <p style="font-size:15px;color:rgb(19, 95, 208)">{{ $plan->duration }}Days</p>
                </div>
                <div style="background-color: rgb(79, 47, 176);padding:16px">
                    <div class="d-flex justify-content-between align-items-center">
                        <p style="color:rgb(254, 254, 254)">Invest Amount</p>
                        <p style="color:white" class="displayAmount">Rs.{{ $amount }}</p>
                        <input type="number" name="amount" value="{{ $amount }}" hidden>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <p style="color:white">Single Limit</p>
                        <p style="color:white">{{ $plan->min_invest }}-{{ $plan->max_invest }} Rs.</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <p style="color:white">Estimated Earning</p>
                        <p style="color:white" id="result">{{ $profit }}</p>
                        <input type="number" name="profit" value="{{ $total }}" hidden>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <p style="color:white">Expire In</p>
                        <p style="color:white">{{ $plan->duration }}Days</p>
                        <input type="number" name="duration" value="{{ $plan->duration }}" hidden>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <p style="color:white">Income Rule</p>
                        <p style="color:white" id="result">
                            <span class="displayAmount"></span>
                            {{ $amount }} + (<span
                                class="displayAmount"></span>{{ $amount }}*{{ $plan->persentage }}*{{ $plan->duration }}) = Total
                            {{ $total }} Rs.
                        </p>
                    </div>
                </div>

                <div class="bottom-navigation-bar bottom-btn-fixed st2">
                    <button type="submit" class="tf-btn accent large">Continue</button>
                </div>
            </form>
        </div>
    </div>
@endsection
