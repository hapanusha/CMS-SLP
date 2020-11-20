<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
<!--    <strong>Copyright &copy; 2014-2019 <a href="<?php echo base_url() . "assets/"; ?>http://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.-->
    <div class="float-right d-none d-sm-inline-block">
        <!--      <b>Version</b> 3.0.2-->
    </div>
</footer>
</div>
<!-- ./wrapper -->



<script src="<?php echo base_url('assets/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- SweetAlert2 -->
<script src="<?php echo base_url('assets/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url('assets/') ?>plugins/toastr/toastr.min.js"></script>

<!-- ChartJS -->
<script src="<?php echo base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>

  
  
  
  


<!-- jquery-validation -->
<script src="<?php echo base_url() . "assets/"; ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url() . "assets/"; ?>plugins/jquery-validation/additional-methods.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url() . "assets/"; ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() . "assets/"; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>







</body>
</html>