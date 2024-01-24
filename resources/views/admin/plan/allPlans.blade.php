@extends('admin.layout.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0">All Plans</h5>
                                    <a href="{{ route('Admin.Add.Plan') }}" class="btn btn-primary">Add New</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Min Investment</th>
                                            <th>Max Investment</th>
                                            <th>Persentage</th>
                                            <th>Limite</th>
                                            <th>Duration</th>
                                            <th>Status</th>
                                            <th>Badge</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($plans as $plan)
                                            <tr>
                                                <td>{{ $plan->plan_name }}</td>
                                                <td>{{ $plan->min_invest }}</td>
                                                <td>{{ $plan->max_invest }}</td>
                                                <td>{{ $plan->persentage }}%</td>
                                                <td>{{ $plan->limite }}</td>
                                                <td>{{ $plan->duration }}</td>
                                                <td>
                                                    @if ($plan->status == 'lock')
                                                        <span class="badge badge-danger"
                                                            style="background-color:red">{{ $plan->status }}</span>
                                                    @else
                                                        <span class="badge badge-primary"
                                                            style="background-color:blue">{{ $plan->status }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="badge badge-success" style="background-color:green">
                                                        {{ $plan->badge }}
                                                    </span>
                                                </td>
                                                <td><img src="{{ asset('image/' . $plan->image) }}" alt="image"
                                                        width="50px" height="50px"></td>
                                                <td>
                                                    <a href="{{ route('Admin.Lock.Plan', $plan->id) }}"
                                                        class="btn btn-sm btn-primary">Lock</a>
                                                    <a href="{{ route('Admin.Unlock.Plan', $plan->id) }}"
                                                        class="btn btn-sm btn-warning">Unlock</a>
                                                    <a href="{{ route('Admin.Delete.Plan', $plan->id) }}"
                                                        class="btn btn-sm btn-danger">
                                                        Delete</a>
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
