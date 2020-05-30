<?php
include 'application/views/masterpage/v_navbar.php';
include 'application/views/masterpage/v_aside.php'
?>

<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-12">
				<h3 class="page-title">Administradores</h3>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="catalogosmenu">Menu administrativo</a></li>
							<li class="breadcrumb-item"><a href="administradores">Administradores</a></li>
							<li class="breadcrumb-item active" aria-current="page">Agregar administrador</li>
						</ol>
					</nav>
				</div>
			</div>

		</div>
	</div>



	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Agregar administrador</h4>
						<div class="row">
							<div class="col-md-4">
								<label >Nombre(s)</label>
								<input type="text" class="form-control"><br>
							</div>
							<div class="col-md-4">
								<label >Apellido materno</label>
								<input type="text" class="form-control"><br>
							</div>
							<div class="col-md-4">
								<label >Apellido paterno</label>
								<input type="text" class="form-control"><br>
							</div>

							<div class="col-md-4">
								<label >País</label>
								<select name="pais" class="form-control form-control-line" >
									<option value="">Seleccionar</option>

								</select>    <br>
							</div>
							<div class="col-md-4">
								<label >Estado</label>
								<select name="pais" class="form-control form-control-line" >
									<option value="">Seleccionar</option>

								</select>    <br>
							</div>
							<div class="col-md-4">
								<label >Ciudad</label>
								<select name="pais" class="form-control form-control-line" >
									<option value="">Seleccionar</option>

								</select>    <br>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<label>RFC</label>
									<input type="text" placeholder="000000000" class="form-control form-control-line">
								</div>

								<div class="col-md-6 col-sm-12">
									<label>Numero de telefono</label>
									<input type="text" placeholder="123 456 7890" class="form-control form-control-line">

								</div>

							</div>
						</div>

						<h5 class="card-subtitle">Accesos del proveedor</h5>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<label>Correo</label>
									<input type="text" placeholder="admin@hotmail.com" class="form-control form-control-line"><br>
								</div>

								<div class="col-md-6 col-sm-12">
									<label>Cotraseña</label>
									<input type="password" value="contrasñadprueba" class="form-control form-control-line"><br>
								</div>
								<div class="col-md-6 col-sm-12">
									<label>Repeti contraseña</label>
									<input type="text" placeholder="" class="form-control form-control-line"><br>

								</div>



							</div>
							<center class="m-t-30">
								<img src="<?=base_url();?>/template/assets/images/users/1.jpg" class="rounded-circle" width="150"><br><br>
								<button class="btn btn-primary">Examninar</button>
							</center>
						</div>


						<br>
						<a href="#" class="btn btn-success text-white">Guardar</a>
					</div>
				</div>
			</div>
		</div>
	</div>

