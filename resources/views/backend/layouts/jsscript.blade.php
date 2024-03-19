<!-- Javascript -->
<script src="{{ asset('backend') }}/assets/vendors/js/vendors.min.js"></script>

<!-- BEGIN: Page Vendor JS-->
<script src="https://cdn.datatables.net/v/dt/dt-2.0.2/datatables.min.js"></script>
{{-- <script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/jszip.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script> --}}

<script src="{{ asset('backend') }}/assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="{{ asset('backend') }}/assets/vendors/js/extensions/toastr.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('backend') }}/assets/js/core/app-menu.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/core/app.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/scripts/customizer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
{{-- <script src="{{ asset('backend') }}/assets/js/scripts/pages/app-invoice-list.min.js"></script> --}}
{{-- <script src="{{ asset('backend') }}/assets/js/scripts/tables/table-datatables-basic.min.js"></script> --}}
<script src="{{ asset('backend') }}/assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

<script>
    new DataTable('#JqueryDataTable');
</script>

@yield('scripts')
