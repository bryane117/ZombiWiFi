<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
			<li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="<?=base_url();?>template/assets/images/users/bryanprofile.jpg" alt="users" class="rounded-circle" width="40"></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium">Bryan E Pool Mercado <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email">bryanedilberto@hotmail.com</span><br>
										<span class="op-5 user-email">Administrador</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(176px, 54px, 0px);">
                                        <a class="dropdown-item" href="perfilproveedor"><i class="ti-user m-r-5 m-l-5"></i> Mi perfil</a>

                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Bandeja de entrada</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="catalogosmenu"><i class="ti-settings m-r-5 m-l-5"></i> Ajustes de generales</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="iniciarsesion"><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar sesión</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>


				<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="inicio" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
				<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="m-r-10 mdi mdi-cart"></i><span class="hide-menu">Compra/Ventas de fichas</span></a></li>
				<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="proveedores" aria-expanded="false"><i class="m-r-10 mdi mdi-account-box"></i><span class="hide-menu">Proveedores</span></a></li>
				

				<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link collapsed" data-toggle="collapse" href="#togglePages" aria-expanded="false"><i class="m-r-10 mdi mdi-library-books"></i><span class="hide-menu">Reportes</span></a>
				<ul id="togglePages" class="collapse unstyled">
									
										<a aria-expanded="false"  class="sidebar-link waves-effect waves-dark sidebar-link" href="other-login.html">
											<i class="m-r-10 mdi mdi-note"></i>
											Reporte de facturación
										</a>
									
									<li>
										<a aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link" href="other-user-profile.html">
											<i class="m-r-10 mdi mdi-note-multiple"></i>
											Reporte de uso
										</a>
									</li>
									<li>
										<a aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link" href="other-user-listing.html">
											<i class="m-r-10 mdi mdi-note-text"></i>
											Puntos de acceso
										</a>
									</li>
									<li>
										<a aria-expanded="false" class="sidebar-link waves-effect waves-dark sidebar-link" href="other-user-listing.html">
											<i class="m-r-10 mdi mdi-note-plus"></i>
											Puntos de distribuidores
										</a>
									</li>
								</ul>
				</li>
				
			</ul>

		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->

