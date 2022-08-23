<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('admin/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<!-- <script src="{{asset('admin/dist/js/pages/dashboards/dashboard1.js')}}"></script> -->
<!-- Charts js Files -->
<script src="{{asset('admin/assets/libs/flot/excanvas.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('admin/dist/js/pages/chart/chart-page-init.js')}}"></script>
<script src={{ url('ckeditor/ckeditor.js') }}></script>
<script>

    CKEDITOR.replace( 'description', {
        extraPlugins: 'easyimage',
        cloudServices_tokenUrl: 'https://example.com/cs-token-endpoint',
        cloudServices_uploadUrl: 'https://your-organization-id.cke-cs.com/easyimage/upload/',
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.php') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.php?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.php?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'

    } );
</script>
@include('ckfinder::setup')
@yield('js')
