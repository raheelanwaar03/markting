@extends('admin.layout.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">User Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Admin.Update.User', $user->id) }}" method="POST">
                                    @csrf
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">User Name</label>
                                                    <input type="text" class="form-control" id="cleave-ccard"
                                                        value="{{ $user->name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-prefix" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="cleave-prefix"
                                                        value="{{ $user->email }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">Referral</label>
                                                    <input type="text" class="form-control" id="cleave-ccard"
                                                        value="{{ $user->referral }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-prefix" class="form-label">Balance</label>
                                                    <input type="number" name="balance" class="form-control" id="cleave-prefix"
                                                        value="{{ $user->balance }}">
                                                </div>
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
