<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>

<div class="customizer-setting d-none d-md-block">
    <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
        data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
        <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('admin/asset/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/asset/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/asset/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('admin/asset/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('admin/asset/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('admin/asset/js/plugins.js') }}"></script>
{{-- datatable --}}
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script>
    new DataTable('#example');
</script>

<!-- apexcharts -->
<script src="{{ asset('admin/asset/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- projects js -->
<script src="{{ asset('admin/asset/js/pages/dashboard-projects.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('admin/asset/js/app.js') }}"></script>
</body>

</html>
