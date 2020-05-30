<?php
include 'application/views/masterpage/v_navbar.php';
include 'application/views/masterpage/v_aside.php'
?>
<div class="page-wrapper ">
	<div class="page-breadcrumb">
		<div class="row align-items-center">
			<div class="col-5">
				<h3 class="page-title">Proveedores</h3>
				<div class="d-flex align-items-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active" aria-current="page">Proveedores </li>

						</ol>
					</nav>
				</div>
			</div>
			<div class="col-7">
				<div class="text-right upgrade-btn">
					<a href="registroproveedor" class="btn btn-success text-white">Agregar proveedor</a>
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

	
	

		<!-- Tarjetas iniciales -->
		<!-- ============================================================== -->
		<div class="col-md-12">
		<div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Administracion de proveedores</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="dl">
                                            <select class="custom-select">
                                                <option value="0" selected="">Filtrar por</option>
                                                <option value="1">Ganancias</option>
                                                <option value="2">Tipo proveedor</option>
                                                <option value="3">Ubicacion</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Nombre</th>
                                            <th class="border-top-0">Apellido materno</th>
                                            <th class="border-top-0">Apellido paterno</th>
                                            <th class="border-top-0">Telefono</th>
                                            <th class="border-top-0">Ubicacion</th>
                                            <th class="border-top-0">Perfil</th>
                                            <th class="border-top-0">Ganancias</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div  class="m-r-10"><a href="perfilproveedor" class="btn btn-circle btn-info text-white">EA</a></div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Bryan Edilberto</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Pool</td>
                                            <td>Mercado</td>
                                            <td>
											<h4 class="m-b-0 font-16">9992495964</h4>
                                            </td>
                                            <td>Sinanche</td>
                                            <td>Proveedor</td>
                                            <td>
                                                <h5 class="m-b-0">35,035</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a class="btn btn-circle btn-info text-white">EA</a></div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Bryan Edilberto</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Pool</td>
                                            <td>Mercado</td>
                                            <td>
											<h4 class="m-b-0 font-16">9992495964</h4>
                                            </td>
                                            <td>Sinanche</td>
                                            <td>Proveedor</td>
                                            <td>
                                                <h5 class="m-b-0">35,035</h5>
                                            </td>
										</tr>
										<tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a class="btn btn-circle btn-info text-white">EA</a></div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Bryan Edilberto</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Pool</td>
                                            <td>Mercado</td>
                                            <td>
											<h4 class="m-b-0 font-16">9992495964</h4>
                                            </td>
                                            <td>Sinanche</td>
                                            <td>Proveedor</td>
                                            <td>
                                                <h5 class="m-b-0">35,035</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
		</div>
	</div>
</div>
