<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li class="active">
						<a href='<?php echo base_url()."deshboard/index";?>'>
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>
					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span class="menu-text"> Doctor </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<?php echo base_url()."Doctor/";?>">
									<i class="icon-double-angle-right"></i>
									Doctor List
								</a>
							</li>

							<li>
								<a href="<?php echo base_url()."Doctor/regsiter_doc";?>">
									<i class="icon-double-angle-right"></i>
									Create New Doctor
								</a>
							</li>							
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span class="menu-text"> Specility </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<?php echo base_url()."Specility/";?>">
									<i class="icon-double-angle-right"></i>
									Specility List
								</a>
							</li>

							<li>
								<a href="<?php echo base_url()."Specility/specility_add";?>">
									<i class="icon-double-angle-right"></i>
									Create New Specility
								</a>
							</li>							
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span class="menu-text"> Chamber </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<?php echo base_url()."Chamber/";?>">
									<i class="icon-double-angle-right"></i>
									Chamber List
								</a>
							</li>

							<li>
								<a href="<?php echo base_url()."Chamber/chamber_add";?>">
									<i class="icon-double-angle-right"></i>
									Create New Chamber
								</a>
							</li>							
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span class="menu-text"> Schedule </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="<?php echo base_url()."Schedule/";?>">
									<i class="icon-double-angle-right"></i>
									Schedule List
								</a>
							</li>

							<li>
								<a href="<?php echo base_url()."Schedule/schedule_add";?>">
									<i class="icon-double-angle-right"></i>
									Create New Schedule
								</a>
							</li>							
						</ul>
					</li>
									

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span class="menu-text"> UI Elements </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li>
								<a href="elements.html">
									<i class="icon-double-angle-right"></i>
									Elements
								</a>
							</li>

							<li>
								<a href="buttons.html">
									<i class="icon-double-angle-right"></i>
									Buttons &amp; Icons
								</a>
							</li>

							<li>
								<a href="treeview.html">
									<i class="icon-double-angle-right"></i>
									Treeview
								</a>
							</li>

							<li>
								<a href="#" class="dropdown-toggle">
									<i class="icon-double-angle-right"></i>

									Three Level Menu
									<b class="arrow icon-angle-down"></b>
								</a>

								<ul class="submenu">
									<li>
										<a href="#">
											<i class="icon-leaf"></i>
											Item #1
										</a>
									</li>

									<li>
										<a href="#" class="dropdown-toggle">
											<i class="icon-pencil"></i>

											4th level
											<b class="arrow icon-angle-down"></b>
										</a>

										<ul class="submenu">
											<li>
												<a href="#">
													<i class="icon-plus"></i>
													Add Product
												</a>
											</li>

											<li>
												<a href="#">
													<i class="icon-eye-open"></i>
													View Products
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>
			<div class="main-content">
				<div class="page-content">
					<?php 
						$error = $this->session->flashdata('error');
						$success =  $this->session->flashdata('success');
						if(isset( $error)){
							echo '<div class="alert alert-error">
									<button type="button" class="close" data-dismiss="alert">
											<i class="icon-remove"></i>
									</button>'.$this->session->flashdata('error').'</div>';
						}
						if(isset($success)){
							echo '<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="icon-remove"></i>
									</button>'.$this->session->flashdata('success').'</div>';
						}
					?>
					
					