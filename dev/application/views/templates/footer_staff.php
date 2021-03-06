<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> DEV_0.1
    </div>
    <strong>Copyrights - 2018 - <i class="fa fa-love"></i><a href="http://www.tingelinge.be">Tingelinge</a>
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ;?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() ;?>public/bootstrap/js/bootstrap.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url() ;?>public/plugins/select2/select2.full.min.js"></script>

<!-- InputMask -->
<script src="<?php echo base_url() ;?>public/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url() ;?>public/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url() ;?>public/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<script src="<?php echo base_url() ;?>public/plugins/daterangepicker/daterangepicker.js"></script>

<!-- bootstrap datepicker -->
<script src="<?php echo base_url() ;?>public/plugins/datepicker/bootstrap-datepicker.js"></script>

<!-- bootstrap color picker -->
<script src="<?php echo base_url() ;?>public/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

<!-- bootstrap time picker -->
<script src="<?php echo base_url() ;?>public/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url() ;?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url() ;?>public/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ;?>public/plugins/fastclick/fastclick.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url() ;?>public/dist/js/app.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ;?>public/dist/js/demo.js"></script>

<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 yyyy-mm-dd
    $("#datemask2").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY-MM-DD h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
        }
    );

    //Date picker - Birthday
    $.fn.datepicker.defaults.format = 'yyyy-mm-dd';
    $('#datepicker_birthday').datepicker({
      autoclose: true
    });

    //Date picker - Date in service
    $.fn.datepicker.defaults.format = 'yyyy-mm-dd';
    $('#datepicker_dateinservice').datepicker({
      autoclose: true
    });

    //Date picker - Date out service
    $.fn.datepicker.defaults.format = 'yyyy-mm-dd';
    $('#datepicker_dateoutservice').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
