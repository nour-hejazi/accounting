<!-- jQuery 3 -->
<script src="{{ url('/design/adminLTE/bower_components/jquery/dist/jquery-3.4.1.min.js') }}"></script>

{{--iCheck--}}
<script src="{{ url('/design/adminLTE/plugins/iCheck/icheck.min.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ url('/design/adminLTE/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.7 -->
<script src="{{ url('/design/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>


<!-- Morris.js charts -->
<script src="{{ url('/design/adminLTE/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ url('/design/adminLTE/bower_components/morris.js/morris.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ url('/design/adminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>

<!-- jvectormap -->
<script src="{{ url('/design/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('/design/adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- jQuery Knob Chart -->
<script src="{{ url('/design/adminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ url('/design/adminLTE/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ url('/design/adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>



<!-- Bootstrap WYSIHTML5 -->
<script src="{{ url('/design/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

<!-- Slimscroll -->
<script src="{{ url('/design/adminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- FastClick -->
<script src="{{ url('/design/adminLTE/bower_components/fastclick/lib/fastclick.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ url('/design/adminLTE/dist/js/adminlte.min.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('/design/adminLTE/dist/js/pages/dashboard.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ url('/design/adminLTE/dist/js/demo.js') }}"></script>
<script src="{{ url('/design/adminLTE/dist/js/myFunctions.js') }}"></script>

{{--SELECT2--}}
<script src="{{url('/design/adminLTE/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

{{--FANCY--}}
<script src="{{url('/design/fancy/jquery.fancybox.min.js')}}"></script>

{{--DATATABLES--}}
{{--<script src="{{ url('/design/adminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>--}}
{{--<script src="{{ url('/design/adminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>--}}

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- datepicker -->
{{--<script src="{{ url('/design/adminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>--}}
<script src="{{ url('datepicker.min.js') }}"></script>
<script src="{{ url('js/js.js') }}"></script>

<script>




</script>

@stack('js')
@stack('css')