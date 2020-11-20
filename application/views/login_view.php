<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CMS-SLP | Log in</title>
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
            <div >
                <a href=""><center><h2><b>Sri Lanka Police  </b><br></h2> <h4><b>Complaint Management System</b></h4></center></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <h3 class="login-box-msg">Sign in </h3>
<?php //echo base_url('login/loginSubmit')?>
                    <form action="<?php echo base_url('index.php/login/loginSubmit') ?>" method="post" id = "login_form" name = "login_form">
                        <div class="input-group mb-3 form-group">
                            <input type="text" id='userName' class="form-control" placeholder="User Name" name="userName">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3 form-group">
                            <input type="password" id='password' class="form-control" placeholder="Password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--          <div class="col-8">
                                        <div class="icheck-primary">
                                          <input type="checkbox" id="remember">
                                          <label for="remember">
                                            Remember Me
                                          </label>
                                        </div>
                                      </div>-->
                            <!-- /.col -->
                            <div class="col-8">
                                <a href="<?php echo base_url('index.php/system_front_view2all_cntrlr') ?>">Back</a>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block" id="login">Sign In</button></center>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <!--      <div class="social-auth-links text-center mb-3">
                            <p>- OR -</p>
                            <a href="#" class="btn btn-block btn-primary">
                              <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                            </a>
                            <a href="#" class="btn btn-block btn-danger">
                              <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                            </a>
                          </div>-->
                    <!-- /.social-auth-links -->

                    <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p>
              <!--      <p class="mb-0">
                      <a href="register.html" class="text-center">Register a new user</a>
                    </p>-->
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="../assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../assets/dist/js/adminlte.min.js"></script>


<!-- jquery-validation -->
<script src="../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../assets/plugins/jquery-validation/additional-methods.min.js"></script>
        
 <script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#login_form').validate({
    rules: {
      userName: {
        required: true,
        userName: true,
      },
      password: {
        required: true,
        minlength: 5
      },
    },
    messages: {
      userName: {
        required: "Please enter user name",
        userName: "Please enter a vaild user name"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      }
      
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>       
        
        

    </body>
</html>
