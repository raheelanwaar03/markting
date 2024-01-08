@extends('user.layout.app')

@section('content')
    <div class="header mb-1 is-fixed">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
                <h3>Add Wallet</h3>
            </div>
        </div>
    </div>
    <div class="content-by-bank mt-3">
        <div class="tf-container">
            <div class="heading">
                <h3 class="d-flex justify-content-between fw_6">Add </h3>
                <div class="tf-spacing-12"></div>
            </div>
            <form class="tf-form mt-3" action="{{ route('User.Store.Wallet') }}" method="POST">
                @csrf
                <div class="group-input">
                    <label for="">Wallet Name</label>
                    <div class="box-custom-select">
                        <select class="default-select" name="wallet_name">
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
                    <label for="">Wallet Number</label>
                    <input type="text" name="wallet_number" placeholder="1234 0000 2134 3243">
                </div>
                <div class="group-input">
                    <label for="">Holder Name</label>
                    <input type="text" name="holder_name" placeholder="Holder Name">
                </div>
                <div class="group-input">
                    <label for="">Message</label>
                    <input type="text" placeholder="Add Your wallet carefully you cannot edit it later!" readonly>
                    <div class="tf-spacing-12"></div>
                </div>
                <div class="bottom-navigation-bar bottom-btn-fixed st2">
                    <button type="submit" class="tf-btn accent large">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
