@extends('user.layout.app')

@section('content')
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
                <form action="{{ route('User.Store.Widthraw') }}" method="POST">
                    @csrf
                    <div class="tf-form">
                        <div class="group-input input-field input-money">
                            <label for="">Amout Of Money</label>
                            <input type="text" value="0" required name="amount"
                                class="search-field value_input st1" id="amountInput">
                            <span class="icon-clear"></span>
                        </div>
                    </div>
            </div>
        </div>
        <div class="bottom-navigation-bar">
            <div class="tf-container">
                <a href="#" id="btn-popup-up" onclick="calculateDiscount()" class="tf-btn accent large">Continue</a>
            </div>
        </div>
    </div>

    <div class="amount-money mt-5">
        <div class="tf-container">
            <h3>Amount To Widthraw</h3>
            <ul class="money list-money">
                <li><a class="tag-money" href="#">200</a> </li>
                <li><a class="tag-money" href="#">500</a> </li>
                <li><a class="tag-money" href="#">1000</a> </li>
            </ul>
        </div>
    </div>

    <div class="amount-money mt-5">
        <div class="tf-container">
            <h3>Rules</h3>
            <ul style="padding-bottom: 50px;">
                <li>Minimum Withdraw Limit is 200Rs.</li>
                <li>Withdraw once a day</li>
                <li style="color:red">Note: Max withdraw limit of Easypaisa/Jazzcash is Rs.50,000. If exceeds Rs.50,000
                    please use Bank
                    Account to withdraw.</li>
                <li>The withdrawal funds will arrive within 48 hours.</li>
            </ul>
        </div>
    </div>

    <div class="amount-money" style="padding-bottom: 50px">
        <div class="tf-container mb-4">
            <h3>3% tax and 2% service fee <br>
                Total: 5%
            </h3>
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
                            <h4 class="secondary_color fw_4 d-flex justify-content-between align-items-center">Fee <a
                                    class="success_color fw_7">5%</a></h4>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="total">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="secondary_color fw_4">Total</h4>
                                <h2><input type="text" id="discountedAmountInput" style="border: none;width:100px;"
                                        required class="search-field value_input st1" readonly></h2>
                            </div>
                        </div>
                        <a id="withdrawBtn" onclick="showHelloModal()">
                            <span><button type="submit" class="btn btn-primary"><i
                                        class="icon-secure1"></i>Withdraw</button></span>
                        </a>

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
                        </form>


                        <script>
                            function showHelloModal() {
                                var modal = document.getElementById('helloModal');
                                modal.classList.add('show');
                                modal.style.display = 'block';
                            }

                            function calculateDiscount() {
                                // Get the input values
                                var amountInput = document.getElementById('amountInput');
                                var discountedAmountInput = document.getElementById('discountedAmountInput');

                                var amount = parseFloat(amountInput.value);

                                // Check if the input is a valid number
                                if (isNaN(amount)) {
                                    alert('Please enter a valid number.');
                                    return;
                                }

                                // Calculate the discounted amount (95% of the original amount)
                                var discountedAmount = amount * 0.95;

                                // Display the original and discounted amounts in their respective input fields
                                amountInput.value = amount.toFixed(2);
                                discountedAmountInput.value = discountedAmount.toFixed(2);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
