<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link href="<?php echo base_url('templates/login/images/icons/favicon.ico');?>" rel="icon"/>
<!--===============================================================================================-->
	<link href="<?php echo base_url('templates/login/assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url('templates/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url('templates/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url('templates/login/assets/animate/animate.css')?>" rel="stylesheet">
<!--===============================================================================================-->	
	<link href="<?php echo base_url('templates/login/assets/css-hamburgers/hamburgers.min.css')?>" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url('templates/login/assets/animsition/css/animsition.min.css')?>" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url('templates/login/assets/select2/select2.min.css')?>" rel="stylesheet">
<!--===============================================================================================-->	
	<link href="<?php echo base_url('templates/login/assets/daterangepicker/daterangepicker.css')?>" rel="stylesheet">
<!--===============================================================================================-->
	<link href="<?php echo base_url('templates/login/css/util.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('templates/login/css/main.css')?>" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	
<div class="limiter">
		<div class="container-login100" style="background-image: url('templates/login/images/bg-02.jpg')">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>

				<?= $this->session->flashdata('message'); ?>

				<form action="<?php echo base_url('auth/autentikasi'); ?>" method="POST" class="login100-form validate-form p-b-33 p-t-5">
 
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input type="email" name="email" class="input100" placeholder="Email" required />
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        <div class="invalid-feedback">
						</div>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input type="password" name="pass" class="input100"  placeholder="Password" required />
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('templates/login/assets/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('templates/login/assets/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('templates/login/assets/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('templates/login/assets/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('templates/login/assets/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('templates/login/assets/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('templates/login/assets/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('templates/login/assets/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('templates/login/js/main.js')?>"></script>

</body>
</html>