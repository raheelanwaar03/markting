@extends('admin.layout.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Edit Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Admin.Update.Bank.Detials', $bank->id) }}" method="POST">
                                    @csrf
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">Title</label>
                                                    <input type="text" value="{{ $bank->title }}" class="form-control"
                                                        name="title" id="cleave-ccard">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-prefix" class="form-label">Account</label>
                                                    <input type="number" class="form-control" value="{{ $bank->account }}"
                                                        id="cleave-prefix" name="account">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">Bank Name</label>
                                                    <input type="text" class="form-control" value="{{ $bank->bank }}"
                                                        name="bank" id="cleave-ccard">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Change</button>
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
