@extends('admin.layout.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">New Notification</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('Admin.Store.Notification') }}" method="POST">
                                    @csrf
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-3">
                                                    <label for="cleave-ccard" class="form-label">Title</label>
                                                    <input type="text" class="form-control" name="title"
                                                        id="cleave-ccard" placeholder="Enter Notification Title">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="mb-3">
                                                    <label for="cleave-prefix" class="form-label">Description</label>
                                                    <textarea name="description" id="cleave-prefix" class="form-control" cols="30" rows="10">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-xl-12">
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
