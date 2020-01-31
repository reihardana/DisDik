<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Arsip Surat</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!--===============================================================================================-->
        <link rel="icon" type="image" href="<?php echo base_url('assets/img/logobatu.png');?>">	
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/bootstrap.min.css');?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/animate/animate.css');?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css-hamburgers/hamburgers.min.css');?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/select2/select2.min.css');?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/util.css');?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/main.css');?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text?css" href="<?php echo base_url('assets/adminlte/dist/css/AdminLTE.css');?>">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="limiter">
            <div class="container-login100">
			    <div class="wrap-login100">
				    <div class="login100-pic js-tilt tulisan" data-tilt>
					    <img style="margin-top: -30px;" src="<?= base_url('assets/img/logobatu.svg')?>" alt="">
                    </div>
            <!-- /.login-logo -->
        <div class="login100-form validate-form">
            
            <span class="login100-form-title" style="margin-top: -25px">
                    DINAS PENDIDIKAN <br>
                    <h4>PROGRAM PENGARSIPAN SURAT</h4>
                    <h5 style="margin-top: 50px; margin-bottom: -40px">SILAHKAN LOGIN</h5>
				</span>
                    <?php
                    $status_login = $this->session->userdata('status_login');
                    if (empty($status_login)) {
                        $message = "";
                    } else {
                        $message = $status_login;
                    }
                    ?>
                    <p class="login-box-msg"><?php echo $message; ?></p>
                <!--<form action="<?php echo base_url(); ?>/adminlte/index2.html" method="post">-->
                <?php echo form_open('auth/cheklogin'); ?>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="email" name="email" placeholder="Email">
					    <span class="focus-input100"></span>
					        <span class="symbol-input100">
					        <i class="fa fa-envelope" aria-hidden="true"></i>
				        </span>
                    <!-- <input type="email" class="form-control" name="email" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
                    </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" name="password" placeholder="Password" id="password">
						<span class="focus-input100"></span>
						    <span class="symbol-input100">
						    <i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                <div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="Submit" name="Submit" value="Login">
                    </div>
                <!-- <div class="container-login100-form-btn">
                        <?php echo anchor('#', '<i class="fa fa-eye-slash" aria-hidden="true"></i> Lupa Password', array('class' => 'btn btn-primary btn-block btn-flat')); ?>
                    </div> -->
                <div class="text-center p-t-125">
                <!-- <div class="row" style="margin-top: 20px;">
                    <div class="col-xs-12">
                        <div class="callout callout-info">
                            <h4>Level Super Admin</h4>

                            <p><b>Email</b> : nuris.akbar@gmail.com</p>
                            <p><b>Password</b> : password</p>
                            <hr>
                            <h4>Level Admin</h4>

                            <p><b>Email</b> : hafid@gmail.com</p>
                            <p><b>Password</b> : password</p>
                        </div>
                    </div> -->
                </div>
                </form>
            </div>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    <!--===============================================================================================-->	
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/js/popper.js');?>"></script>
	<script src="<?php echo base_url('assets/login/js/bootstrap.min.js');?>"></script>
    <!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/select2/select2.min.js');?>"></script>
    <!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/tilt/tilt.jquery.min.js');?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/js/main.js');?>"></script>
    </body>
</html>
