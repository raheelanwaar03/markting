@extends('admin.layout.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">User's Deposit Requests (Pending)</h5>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Account Title</th>
                                            <th>Bank</th>
                                            <th>Money</th>
                                            <th>Status</th>
                                            <th>Screen Shot</th>
                                            <th>Action</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deposits as $deposit)
                                            <tr>
                                                <td>{{ $deposit->account_name }}</td>
                                                <td>{{ $deposit->bank }}</td>
                                                <td>{{ $deposit->money }}</td>
                                                <td><span class="badge badge-primary"
                                                        style="background-color: blue;">{{ $deposit->status }}</span></td>
                                                <td>
                                                    <img src="{{ asset('images/' . $deposit->screen_shot) }}"
                                                        alt="Screen_shot" class="img-fluid" height="80px" width="80px">
                                                </td>
                                                <td>
                                                    <a href="{{ route('Admin.Approve.Deposit.Requests', $deposit->id) }}"
                                                        class="btn btn-success btn-sm">Approved</a>
                                                    <a href="{{ route('Admin.Reject.Deposit.Requests', $deposit->id) }}"
                                                        class="btn btn-danger btn-sm">Rejected</a>
                                                    <a href="{{ route('Admin.Add.Deposit.Requests', $deposit->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="{{ route('Admin.Give.Reward', $deposit->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        Give Reward
                                                    </a>
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
