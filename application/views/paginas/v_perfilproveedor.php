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
	
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?=base_url();?>template/assets/images/users/5.jpg" class="rounded-circle" width="150">
                                    <h4 class="card-title m-t-10">Bryan Edilberto Pool Mercado</h4>
                                    <h6 class="card-subtitle">Proveedor</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">No. Fichas</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">No. Vendidas</font></a></div>
									</div>
									<div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Correo electronico: </small>
                                <h6>bryanedilberto@hotmail.com</h6> <small class="text-muted p-t-30 db">Telefono:</small>
                                <h6>+52 9992495964</h6> <small class="text-muted p-t-30 db">Direccion:</small>
                                <h6>Sinanché, Yucatán; Calle 20 x 13 s/n col Centro 97420</h6>
                                <div class="map-box">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" style="border:0" allowfullscreen="" width="100%" height="150" frameborder="0"></iframe>
										
                                </div> <small class="text-muted p-t-30 db"><br>Administrar</small>
                                <br>
                                <button class="btn btn-danger">Eliminar</button>
                                <button class="btn btn-success">Modificar informacion</i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
								<h4 class="card-title">
									Promedio mensual de ventas en $
									</h4>
                                <form class="form-horizontal form-material">
                                    <div class="chartdiv" id="chartdiv"></div>
								</form>
								<form >
									<div class="row">
										<div class="col-lg-6">
										<div class="donut"  id="donut"></div>

										</div>
										<div class="col-lg-6">
										<div class="donut_antenas" id="donut_antenas"></div>

										</div>
									</div>
								</form>
                            </div>
						</div>
						

						<div class="card">
                            <div class="card-body">
								<h4 class="card-title">
									Horas trafico
									</h4>                                
								<form >
								<div id="traficochart"></div>
								</form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
</div>

</div>
