<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CMS-SL | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <img src="<?php echo base_url() . "assets/"; ?>dist/img/Sri_Lanka_Police_logo.svg.png" alt="logo" class="img-size-100 mr-3" width="100px">
            </div>



            <div >

                <center><h2><b>Sri Lanka Police  </b><br></h2> <h4><b>Complaint Management System</b></h4></center>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <!--                    <h5 class="login-box-msg"> select</h5>-->


                    <div class="col-sm-12">

                        <div class="form-group">
                            <a href="<?php echo base_url('index.php/public_preferences') ?>"><button type="button" class="btn btn-block btn-primary btn-lg"><p></p>Make a complaint as a Citizen <br> <p></p> </button></a>
                        </div>


                        <div class="form-group">
                            <!--<a href="<?php echo base_url('index.php/make_a_complaints_as_you') ?>#custom-tabs-one-profile"><button type="button" class="btn btn-block btn-primary btn-lg"><p></p> See the status of complaint <br><p></p> </button></a>-->
                            <a href="<?php echo base_url('index.php/make_a_complaints_as_you/page/complaint') ?>"><button type="button" class="btn btn-block btn-primary btn-lg"><p></p> See the status of complaint <br><p></p> </button></a>

                        </div>



                        <div class="form-group">
                            <a href="<?php echo base_url('index.php/login') ?>"><button type="button" class="btn btn-block btn-primary btn-lg"><p></p> Sign in as a Police Officer<br> <p></p> </button></a>
                        </div>
                    </div>


<!--      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new user</a>
      </p>-->
                </div>
                <!-- /.login-card-body -->
            </div>






        </div>

        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="<?php echo base_url() . "assets/"; ?>plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url() . "assets/"; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() . "assets/"; ?>dist/js/adminlte.min.js"></script>

    </body>
</html>
