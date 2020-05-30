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
							<li class="breadcrumb-item active" aria-current="page">Administracion de zonas</li>
						</ol>
					</nav>
				</div>
			</div>

		</div>
	</div>

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
	<div class="container-fluid">

	
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<h4 class="card-title">Paises</h4>
								<label class="card-subtitle">Nombre del pais</label>
								<input type="text" class="form-control"><br>
								<button class="btn btn-success">Guardar</button>
								<button class="btn btn-info">Consultar paises</button>
							</div>

							<div class="col-md-12 col-sm-12">
								<br>
								<h4 class="card-title">Estados</h4>
								<label class="card-subtitle" >País asociado</label>
								<select name="pais" class="form-control" >
									<option value="">Seleccionar</option>
								</select>
								<br>
								<label class="card-subtitle">Nombre del estado</label>
								<input type="text" class="form-control"><br>
								<button class="btn btn-success">Guardar</button>
								<button class="btn btn-info">Consultar estados</button>

							</div>


							<div class="col-md-12 col-sm-12">
								<br>
								<h4 class="card-title">Ciudades</h4>
								<label class="card-subtitle" >País asociado</label>
								<select name="pais" class="form-control" >
									<option value="">Seleccionar</option>
								</select><br>

								<label class="card-subtitle" >Ciudad asociada</label>
								<select name="pais" class="form-control" >
									<option value="">Seleccionar</option>
								</select><br>
								<label class="card-subtitle">Nombre de la ciudad</label>
								<input type="text" class="form-control"><br>
								<button class="btn btn-success">Guardar</button>
								<button class="btn btn-info">Consultar ciudades</button>

							</div>

						</div>


					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
									<th scope="col">Heading</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
									<td>Cell</td>
								</tr>
								</tbody>
							</table>
						</div>

					</div>

				</div>

			</div>
		</div>

								
		</div>

		
			</div>
		</div>
	</div>
</div>
