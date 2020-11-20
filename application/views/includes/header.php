<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');



if (!isset($_SESSION['u_id'])) {
    redirect('login');
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>CMS | Dashboard </title>
        
        <!-- jQuery -->
<!--        <script src="<?php echo base_url() . "assets/"; ?>plugins/jquery/jquery.min.js"></script>-->
        
        <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/fontawesome-free/css/all.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
        
 <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/daterangepicker/daterangepicker.css">
        
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="<?php echo base_url() . "assets/"; ?>plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url() . "assets/"; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?php echo base_url() . "assets/"; ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() . "assets/"; ?>dist/js/adminlte.js"></script>
        
        <!-- bs-custom-file-input -->
        <script src="<?php echo base_url() . "assets/"; ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="<?php echo base_url() . "assets/"; ?>dist/js/demo.js"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="<?php echo base_url() . "assets/"; ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="<?php echo base_url() . "assets/"; ?>plugins/raphael/raphael.min.js"></script>
        <script src="<?php echo base_url() . "assets/"; ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="<?php echo base_url() . "assets/"; ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <!-- ChartJS -->
        <script src="<?php echo base_url() . "assets/"; ?>plugins/chart.js/Chart.min.js"></script>

        <!-- PAGE SCRIPTS -->
        <!--<script src="<?php echo base_url() . "assets/"; ?>dist/js/pages/dashboard2.js"></script>-->

        <!-- jquery-validation -->
        <script src="<?php echo base_url() . "assets/"; ?>plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() . "assets/"; ?>plugins/jquery-validation/additional-methods.min.js"></script>
        
        
        <script src="<?php echo base_url('assets/') ?>plugins/daterangepicker/daterangepicker.js"></script>
  
  <!-- InputMask -->
<script src="<?php echo base_url('assets/') ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>





    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed ">

        <div class="wrapper">