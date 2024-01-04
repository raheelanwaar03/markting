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
                                <form action="{{ route('Admin.Update.Referral.Setting', $referral_bouns->id) }}"
                                    method="POST">
                                    @csrf
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">First Person</label>
                                                    <input type="text" value="{{ $referral_bouns->first_person }}"
                                                        class="form-control" name="first_person" id="cleave-ccard">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-prefix" class="form-label">Second Person</label>
                                                    <input type="number" class="form-control"
                                                        value="{{ $referral_bouns->second_person }}" id="cleave-prefix"
                                                        name="second_person">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">Third Person</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $referral_bouns->third_person }}" name="third_person"
                                                        id="cleave-ccard">
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
