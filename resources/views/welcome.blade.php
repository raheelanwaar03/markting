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
                                <h3>RS 3.466,9</h3>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="inner-right">
                                <p>1st Payment</p>
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
                            <a class="fw_6" href="29_topup.html">
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
                                <ul class="icon icon-group-credit-card">
                                    <li class="path1"></li>
                                    <li class="path2"></li>
                                    <li class="path3"></li>
                                </ul>
                                Whatsapp
                            </a>
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
@endsection
