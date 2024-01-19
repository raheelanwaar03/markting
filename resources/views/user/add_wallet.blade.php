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
                            <option class="item" value="hbl"
                                data-thumbnail="https://asset.brandfetch.io/idOXcWvamc/idg0Lzqc2X.jpeg?updated=1668518750942">
                                HBL</option>
                            <option class="item" value="habibMetro"
                                data-thumbnail="https://i.brecorder.com/primary/2022/03/09081929c007833.jpg">
                                Habib Metro</option>
                            <option class="item" value="national"
                                data-thumbnail="https://seeklogo.com/images/N/national-bank-of-pakistan-logo-966A8DD8BA-seeklogo.com.png">
                                National Bank</option>
                            <option class="item" value="alfalah"
                                data-thumbnail="https://startuppakistan.com.pk/wp-content/uploads/2023/09/bank-alfalah-featured.webp">
                                Alfalh Bank</option>
                            <option class="item" value="soneri"
                                data-thumbnail="https://vectorseek.com/wp-content/uploads/2020/12/Soneri-Bank-Logo-Vector-scaled.jpg">
                                Soneri Bank</option>
                            <option class="item" value="soneri"
                                data-thumbnail="https://www.logotypes101.com/logos/103/503750A62D7AC76D5104E11C1EE6FD93/js-bank.png">
                                JS Bank</option>
                            <option class="item" value="punjabBank"
                                data-thumbnail="https://iconape.com/wp-content/files/td/208553/png/208553.png">
                                The Bank of Punjab</option>
                            <option class="item" value="sindh"
                                data-thumbnail="https://upload.wikimedia.org/wikipedia/commons/5/57/Sindh_Bank_Limited.png">
                                Sindh Bank</option>
                            <option class="item" value="silk"
                                data-thumbnail="https://seeklogo.com/images/S/silk-bank-logo-255CE2AA55-seeklogo.com.png">
                                Silk Bank</option>
                            <option class="item" value="faysal"
                                data-thumbnail="https://e7.pngegg.com/pngimages/279/979/png-clipart-logo-faysal-bank-islamic-faysal-bank-islamic-vip-membership-card-purple-blue.png">
                                Faysal Bank</option>
                            <option class="item" value="Mcb"
                                data-thumbnail="https://vectorseek.com/wp-content/uploads/2020/12/MCB-Logo-Vector-scaled.jpg">
                                Mcb Bank</option>
                            <option class="item" value="ubl"
                                data-thumbnail="https://s3-symbol-logo.tradingview.com/united-bank--big.svg">
                                UBL Bank</option>
                            <option class="item" value="askari"
                                data-thumbnail="https://miro.medium.com/v2/resize:fit:1100/format:webp/0*p_ArJ86Pd43I4KnL.png">
                                Askari Bank</option>
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
