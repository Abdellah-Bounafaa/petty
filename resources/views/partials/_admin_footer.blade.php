<!-- plugins:js -->
<script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
{{-- <script src="admin/vendors/datatables.net/jquery.dataTables.js"></script> --}}
{{-- <script src="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> --}}
<script src="{{ asset('admin/js/dataTables.select.min.js') }}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('admin/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/js/template.js') }}"></script>
<script src="{{ asset('admin/js/settings.js') }}"></script>
<script src="{{ asset('admin/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('admin/js/dashboard.js') }}"></script>
<script src="{{ asset('admin/js/Chart.roundedBarCharts.js') }}"></script>
<!-- End custom js for this page-->
<script>
    $(document).ready(function() {
        // Check for the presence of flash message
        @if (session('success'))
            // Display success flash message using Noty
            new Noty({
                type: 'success',
                text: '{{ session('success') }}',
                timeout: 3000, // Adjust the timeout value as needed
                progressBar: true,
                theme: 'nest',
            }).show();
        @endif
    });
    $(document).ready(function() {
        // Check for the presence of flash message
        @if (session('error'))
            // Display success flash message using Noty
            new Noty({
                type: 'error',
                text: '{{ session('error') }}',
                timeout: 3000, // Adjust the timeout value as needed
                progressBar: true,
                theme: 'nest',
            }).show();
        @endif
    });
</script>
</body>

</html>
