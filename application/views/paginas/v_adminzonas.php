<?php
include 'application/views/masterpage/v_navbar.php';
include 'application/views/masterpage/v_aside.php'
?>
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">
							Administracion de Paises
						</h3>

						<form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Nombre de zona</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Merida" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Latitud</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Longitud</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" style="border:0" allowfullscreen="" width="100%" height="150" frameborder="0"></iframe>
                                </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
											<br>
											<button class="btn btn-success">Guardar</button>
											<button class="btn btn-danger">Cancelar</button>
                                        </div>
                                    </div>
                                </form>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>


