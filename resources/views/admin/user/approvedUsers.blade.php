@extends('admin.layout.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Approved Plans</h5>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Number</th>
                                            <th>Balance</th>
                                            <th>Referral</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->number }}</td>
                                                <td>{{ $user->balance }}</td>
                                                <td>{{ $user->referral }}</td>
                                                <td><span class="badge badge-primary"
                                                        style="background-color: green;">{{ $user->status }}</span></td>
                                                <td>
                                                    <a href="{{ route('Admin.Pending.Users', $user->id) }}"
                                                        class="btn btn-danger btn-sm">Pending</a>
                                                    <a href="{{ route('Admin.Pending.User', $user->id) }}"
                                                        class="btn btn-success btn-sm">Approved</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
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
