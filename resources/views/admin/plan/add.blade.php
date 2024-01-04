@extends('admin.layout.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Add Plan</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Admin.Store.Plan') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">Plan Name</label>
                                                    <input type="text" class="form-control" name="plan_name"
                                                        id="cleave-ccard" placeholder="Enter Plan Name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-prefix" class="form-label">Duration</label>
                                                    <input type="number" class="form-control" id="cleave-prefix"
                                                        name="duration" placeholder="Enter Plan active duration">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-delimiter" class="form-label">Minimum
                                                        Investment</label>
                                                    <input type="number" class="form-control" name="min_invest"
                                                        id="cleave-delimiter" placeholder="Enter Plan Investment">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-prefix" class="form-label">Maximum Investment</label>
                                                    <input type="number" class="form-control" id="cleave-prefix"
                                                        name="max_invest" placeholder="Enter Plan Total Profit">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="cleave-delimiters" class="form-label">Persentage</label>
                                                    <input type="number" class="form-control" name="persentage"
                                                        id="cleave-delimiters" placeholder="Enter Profit">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-0">
                                                    <label for="cleave-numeral" class="form-label">Add Image</label>
                                                    <input type="file" class="form-control" name="image"
                                                        id="cleave-numeral">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-xl-6">
                                                <div class="mb-0">
                                                    <label for="cleave-numeral" class="form-label">Limite</label>
                                                    <input type="number" class="form-control" name="limite">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="mb-0 mt-2">
                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                </div>
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
