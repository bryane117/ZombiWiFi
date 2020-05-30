<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>template/assets/images/logo-icon.png">
	<title>ZombiWiFi</title>
	<!-- Custom CSS -->


	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url();?>template/dist/css/estilos_login/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?=base_url();?>template/dist/css/estilos_login/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url();?>template/dist/css/estilos_login/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<!--Estilos de las graficas-->


</head>
<body class="hold-transition login-page">


<div class="login-box">
	<div class="login-logo">
		<img src="<?=base_url();?>template/assets/images/zombiewifi_text.png" alt="">
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Ingresa tus accesos para iniciar sesión</p>

			<form action="inicio" method="post">
				<div class="input-group mb-3">
					<input type="email" class="form-control" placeholder="Correo electronico">
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" placeholder="Contraseña">
				</div>
				<div class="row">
					<div class="col-7">

					</div>
					<!-- /.col -->
					<div class="col-5">
						<button type="submit" href="inicio" class="btn btn-primary btn-block">Iniciar sesión</button>
					</div>
					<!-- /.col -->
				</div>
			</form>


			<!-- /.social-auth-links -->

			<p class="mb-1">
				<a href="forgot-password.html">Olvide mi contraseña</a>
			</p>
			<p class="mb-0">
				<a href="register.html" class="text-center">Registrarme como un nuevo proveedor</a>
			</p>
		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->









<!-- footer -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->


<!--Iconos-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?=base_url();?>template/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?=base_url();?>template/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?=base_url();?>template/dist/css/estilos_login/adminlte.min.js">




</body>

</html>
