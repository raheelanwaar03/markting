@extends('user.layout.app')

@section('content')
    <div class="header mb-1 is-fixed">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
                <h3>Withdraw History</h3>
            </div>
        </div>
    </div>
    <div id="app-wrap">
        <div class="app-section st1 mt-1 mb-5 bg_white_color">
            <div class="tf-container">
                <div class="trading-month">
                    <h4 class="fw_5 mb-3">{{ month() }}</h4>
                    <div class="group-trading-history mb-5">
                        @forelse ($history as $item)
                            <a class="tf-trading-history" href="#">
                                <div class="inner-left">
                                    <div class="icon-box rgba_primary">
                                        <i class="icon icon-electricity-1"></i>
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-around align-items-center">
                                            <h4>AI Technology</h4>
                                            @if ($item->status == 'pending')
                                                <p style="color:red">({{ $item->status }})</p>
                                            @else
                                                <p style="color:green">({{ $item->status }})</p>
                                            @endif
                                        </div>
                                        <p>Today {{ $item->created_at->format('H:i:s') }}</p>
                                    </div>
                                </div>
                                <span class="num-val success_color">RS {{ $item->amount }}</span>
                            </a>
                        @empty
                            <h3>Empty</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.layout.bottam')
@endsection
