<?php
include 'application/views/masterpage/v_navbar.php';
include 'application/views/masterpage/v_aside.php'
?>
<div class="page-wrapper">

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
			<!-- Tarjetas iniciales -->
			<!-- ============================================================== -->
			<div class="col-md-12">
				<div class="row">
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="d-md-flex align-items-center">
									<div class="row">
										<div class="col-lg-8">
											<h4 class="card-title">Cantidad de fichas vendidas</h4>
											<h1 class="">45</h1>

										</div>
										<div class="col-lg-4 d-md-flex align-items-center">
											<ion-icon  name="pricetags"></ion-icon>
										</div>




									</div>

									<div>

									</div>
								</div>
								<div>
								</div>


							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="d-md-flex align-items-center">
									<div class="row">
										<div class="col-lg-8">
											<h4 class="card-title">Cantidad de ganacias obtenidas</h4>
											<h1 class="">$23,445</h1>

										</div>
										<div class="col-lg-4 d-md-flex align-items-center">
											<ion-icon  name="cash"></ion-icon>
										</div>




									</div>

									<div>

									</div>
								</div>
								<div>
								</div>


							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="d-md-flex align-items-center">
									<div class="row">
										<div class="col-lg-8">
											<h4 class="card-title">Numero de distribuidores</h4>
											<h1 class="">532</h1>

										</div>
										<div class="col-lg-4 d-md-flex align-items-center">
											<ion-icon  name="people"></ion-icon>
										</div>




									</div>

									<div>

									</div>
								</div>
								<div>
								</div>


							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="d-md-flex align-items-center">
									<div>
										<h4 class="card-title">Marcas de dispositivos recurrentes</h4>
										<h5 class="card-subtitle">Datos obetnidos de los ultimos 3 meses</h5>
									</div>

								</div>
								<div style="grafico_uno" id="grafico_uno"></div>
								<div>

								</div>


							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="d-md-flex align-items-center">
									<div>
										<h4 class="card-title">Estatus de conexion de dispositivos</h4>
										<h5 class="card-subtitle">Datos obetnidos de los ultimos meses</h5>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 ">
										<div class="d-md-flex align-items-center">
											<div class="row">
												<div class="col-lg-12">
													<h3>Dispositivos conectados</h3>
												</div>
												<div class="col-lg-12">
													<h4>9783</h4>
												</div>
												<div class="col-lg-12">
													<div class="donut"  id="donut"></div>
												</div>
											</div>

										</div>

									</div>
									<div class="col-lg-6 ">
										<div class="d-md-flex align-items-center">
											<div class="row">
												<div class="col-lg-12">
													<h3>Status de puntos de acceso</h3>
												</div>
												<div class="col-lg-12">
													<h4>0 fallas reportadas</h4>
												</div>
												<div class="col-lg-12">
													<div class="donut_antenas" id="donut_antenas"></div>
												</div>
											</div>

										</div>

									</div>
									



								</div>
								<div>

								</div>


							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="d-md-flex align-items-center">
									<div>
										<h4 class="card-title">Numero de conexiones</h4>
										<h5 class="card-subtitle">Actualizacion cad 5 segundos</h5>
									</div>

								</div>
								<div class="conexiones" id="conexiones"></div>

								<div>

								</div>


							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="d-md-flex align-items-center">
							<div>
								<h4 class="card-title">Estadisticas de ventas por estado</h4>
								<h5 class="card-subtitle">Ultimos 3 meses</h5>
							</div>

						</div>
						<div style="stock_ventas" id="stock_ventas"></div>
						<div>

						</div>


					</div>
				</div>
			</div>

		</div>
		<!-- ============================================================== -->
		<!-- End PAge Content -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right sidebar -->
		<!-- ============================================================== -->
		<!-- .right-sidebar -->
		<!-- ============================================================== -->
		<!-- End Right sidebar -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->

