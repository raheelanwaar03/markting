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
                <h3>Deposit</h3>
            </div>
        </div>
    </div>
    <div class="content-by-bank mt-5" style="padding-top: 50px">
        <div class="tf-container">
            <div class="heading">
                <h3 class="d-flex justify-content-between fw_6">Admin Bank Details</h3>
                <div class="tf-spacing-12"></div>
            </div>
            <div class="group-input">
                <label for="">Bank</label>
                <input type="text" value="United Bank Limited (UBL)" readonly>
            </div>
            <div class="group-input">
                <label for="">Account Title</label>
                <input type="text" value="Muhammad Wali">
            </div>
            <div class="group-input">
                <label for="">Account Number</label>
                <div class="d-flex">
                    <input type="text" id="myInput" value="0561302715107" id="acc_num">
                    <span style="margin-left: -30px;font-size:20px;margin-top:10px"><i class="icon-copy1"
                            onclick="copy()"></i></span>
                </div>
            </div>
            <div class="bottom-navigation-bar bottom-btn-fixed st2">
                <button type="submit" class="tf-btn accent large">Continue</button>
            </div>
            </form>
        </div>
    </div>
    <div class="content-by-bank mt-3 mb-5" style="padding-bottom: 100px;">
        <div class="tf-container">
            <div class="heading">
                <h3 class="d-flex justify-content-between fw_6">Deposit To <a href="#">Help <i
                            class="icon-right"></i></a></h3>
                <div class="tf-spacing-12"></div>
            </div>
            <form class="tf-form mt-3" action="{{ route('User.Store.Transfer') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="group-input">
                    <label for="">Bank</label>
                    <div class="box-custom-select">
                        <select class="default-select" name="bank">
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
                            <option class="item" value="allied"
                                data-thumbnail="https://image.slidesharecdn.com/communicationprocessprojectonabl-150502045558-conversion-gate02/75/communication-process-project-on-allied-bank-limited-1-2048.jpg?cb=1668510035">
                                Allied bank</option>
                                <option class="item" value="allied"
                                data-thumbnail="https://image.slidesharecdn.com/communicationprocessprojectonabl-150502045558-conversion-gate02/75/communication-process-project-on-allied-bank-limited-1-2048.jpg?cb=1668510035">
                                Allied bank</option>
                                <option class="item" value="habibMetro"
                                data-thumbnail="https://i.brecorder.com/primary/2022/03/09081929c007833.jpg">
                                Habib Metro</option>
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
                    <label for="">From Account Number</label>
                    <input type="text" name="account_number" placeholder="1234 0000 2134 3243">
                    <div class="credit-card">
                        <span>Saved Number</span>
                        <i class="icon-bankgroup"></i>
                    </div>

                </div>
                <div class="group-input">
                    <label for="">Account Name</label>
                    <input type="text" name="account_name" placeholder="Your Bank Name">
                </div>
                <div class="group-input input-field input-money">
                    <label for="">Amout Of Money</label>
                    <input type="text" name="money" value="5000" required class="search-field value_input st1"
                        type="text">
                    <span class="icon-clear"></span>
                    <div class="money">
                        <a class="tag-money" href="#">500</a>
                        <a class="tag-money" href="#">1000</a>
                        <a class="tag-money" href="#">5000</a>
                    </div>
                </div>
                <div class="group-input">
                    <label for="">Payment Screen Shot</label>
                    <input type="file" name="screen_shot" class="form-control">
                    <div class="tf-spacing-12"></div>
                    <div class="group-checkbox">
                        <input type="checkbox" class="tf-checkbox st1" checked>
                        <span class="fw_3">After Tranfer Add ScreenShot and also send it to +92373084032 On What's app -
                            money will
                            be added under
                            12 working hours in your account.</span>
                    </div>
                </div>
                <div class="bottom-navigation-bar bottom-btn-fixed st2">
                    <button type="submit" class="tf-btn accent large">Continue</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection
