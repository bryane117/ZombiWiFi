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
							<li class="breadcrumb-item"><a href="proveedores">Proveedores</a></li>
							<li class="breadcrumb-item active" aria-current="page">Agregar proveedor</li>
						</ol>
					</nav>
				</div>
			</div>

		</div>
	</div>



	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
							<h3 class="card-title">Registro de proveedor</h3>
							<h5 class="card-subtitle">Informacion del proveedor</h5>

                                <form class="form-horizontal form-material">
                                    <div class="form-group">
									<div class="row">
									<div class="col-md-4 col-sm-12">
									<label >Nombre(s)</label>
									<input type="text" placeholder="Jorge Adrian" class="form-control form-control-line">
									</div>

									<div class="col-md-4 col-sm-12">
									<label >Apellido materno</label>
									<input type="text" placeholder="Perez" class="form-control form-control-line">
									</div>

									<div class="col-md-4 col-sm-12">
									<label >Apellido paterno</label>
									<input type="text" placeholder="Lara" class="form-control form-control-line">
									</div>
                                       																				                                       
										</div>
                                    </div>

									

									<div class="form-group">
									<div class="row">
									<div class="col-md-6 col-sm-12">
									<label >RFC</label>
									<input type="text" placeholder="000000000" class="form-control form-control-line">
									</div>

									<div class="col-md-6 col-sm-12">
									<label >Numero de telefono</label>
									<input type="text" placeholder="123 456 7890" class="form-control form-control-line">

									</div>
									                                        
										</div>
                                    </div>

									<div class="form-group">
									<div class="row">
									<div class="col-md-4 col-sm-12">
									<label >País</label>
									<select name="pais" class="form-control form-control-line" >
                                                        <option value="">Seleccionar</option>
                                                        
                                    </select>    
									</div>

									<div class="col-md-4 col-sm-12">
									<label >Estado</label>
									<select name="pais" class="form-control form-control-line" >
                                                        <option value="">Seleccionar</option>
                                                        
                                    </select>      
									</div>

									<div class="col-md-4 col-sm-12">
									<label >Ciudad</label>
									<select name="pais" class="form-control form-control-line" >
                                                        <option value="">Seleccionar</option>
                                                        
                                    </select>      
									</div>									
                                    </div>
									<br><h5 class="card-subtitle">Accesos del proveedor</h5>
                                    <div class="form-group">
                                        <label  class="col-md-12">Correo electronico</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="user@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>


                                    <div class="form-group">
									<div class="row">			
									<div class="col-md-6 col-sm-12">
									<label >Contraseña</label>
									<input type="password" value="contraseña" class="form-control form-control-line">

									</div>					
									<div class="col-md-6 col-sm-12">
									<label >Repetir contraseña</label>
									<input type="password" value="" class="form-control form-control-line">

									</div>	

                                       
									</div>
                                    </div>

									<div class="form-group">
										<div class="row">
										<label class="col-md-12">Tipo de proveedor</label>
										<div class="col-md-6 custom-control custom-checkbox">
														 <input type="radio" class="custom-control-input" id="check_otro" name="check_otro" onclick="otro();"  value="nacional" >
														 <label class="custom-control-label" for="check_otro">Nacional</label>
										</div>
										<div class="col-md-6 custom-control custom-checkbox">
														 <input type="radio" class="custom-control-input" id="empresarial" name="check_otro" onclick="otro();" value="empresarial">
														 <label class="custom-control-label" for="empresarial">Centro Empresarial</label>
                                        </div>
										</div>
									</div>

									<div class="form-group">
									<div class="row">
									
									<label class="col-md-12">Empresa</label>
									<div class="col-md-12">
									<input type="text" placeholder="Especifique empresa" class="form-control form-control-line">
									</div>
									</div>
									</div>

									<div class="form-group">
									<div class="row">
									<div class="col-md-6" id="div_zona" style="display:none">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Federación</label>
                                                    <select id="sel_zona" name="sel_zona" class="form-control custom-select" style="background-color: #dddddd;pointer-events: none;" readonly="readonly">
                                                        <option value="">Seleccionar</option>
                                                        
                                                    </select>   
                                                </div>    
                                    </div>

									<div class="col-md-6" id="div_sel" style="display:none">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Centro Empresarial</label>
                                                    <select id="sel_centro" name="sel_centro" class="form-control custom-select" onchange="setZona()">
                                                        <option value="">Seleccionar</option>
                                                        
                                                    </select>   
                                                </div>    
                                                </div>

									</div>
									</div>

									

                                                                      
                                    <div class="form-group">
									<div class="row">
									<div class="col-md-12">
									
									<center class="m-t-30">
									<label >Sube una foto del proveedor</label>
									</center>
									</div>
									<div class="col-md-12">
									<center class="m-t-30"> <img src="<?=base_url();?>template/assets/images/users/1.jpg" class="rounded-circle" width="150">
									</center>
									</div>
									<div class="col-md-12">
									<center class="m-t-30"> 
									<button class="btn btn-primary">Examninar</button>
									</center>
									</div>
									</div>
									</div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Registrar</button>
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


