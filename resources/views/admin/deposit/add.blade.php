@extends('admin.layout.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">User Details who request for Deposit</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Admin.Update.User.Account', $deposits->id) }}" method="POST">
                                    @csrf
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">User Name</label>
                                                    <input type="text" class="form-control" id="cleave-ccard"
                                                        value="{{ $deposits->user->name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-prefix" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="cleave-prefix"
                                                        value="{{ $deposits->user->email }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">Referral</label>
                                                    <input type="text" class="form-control" id="cleave-ccard"
                                                        value="{{ $deposits->user->referral }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-prefix" class="form-label">Balance</label>
                                                    <input type="number" class="form-control" id="cleave-prefix"
                                                        value="{{ $deposits->user->balance }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">Request for Deposit</label>
                                                    <input type="text" class="form-control" id="cleave-ccard"
                                                        value="{{ $deposits->money }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-prefix" class="form-label">Status</label>
                                                    <input type="text" class="form-control" id="cleave-prefix"
                                                        value="{{ $deposits->status }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3">
                                                <label for="" class="form-label">User Transcation Screen
                                                    Shot</label>
                                                <img class="form-control text-center"
                                                    src="{{ asset('images/' . $deposits->screen_shot) }}"
                                                    alt="{{ $deposits->screen_shot }}" class="img-fluid" width="200px"
                                                    height="200px">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3">
                                                <label for="">Add Amount Here</label>
                                                <input type="number" name="balance" class="form-control"
                                                    placeholder="Enter Amount here you want to add in user account">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-0 mt-2">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © {{ env('APP_NAME') }}.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by {{ env('APP_NAME') }}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>
@endsection
