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
			<?php if($_SESSION['type']==3){ ?>
			
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
					<span class="menu-text"> City </span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li>
						<a href="<?php echo base_url()."City/";?>">
							<i class="icon-double-angle-right"></i>
							City List
						</a>
					</li>

					<li>
						<a href="<?php echo base_url()."City/create";?>">
							<i class="icon-double-angle-right"></i>
							Create New City
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
					<span class="menu-text"> Appointment </span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li>
						<a href="<?php echo base_url()."Appointment/";?>">
							<i class="icon-double-angle-right"></i>
                            Appointment List
						</a>
					</li>

					<li>
						<a href="<?php echo base_url()."Appointment/create";?>">
							<i class="icon-double-angle-right"></i>
							Create New Appointment
						</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="#" class="dropdown-toggle">
					<i class="icon-desktop"></i>
					<span class="menu-text"> Appointment </span>

					<b class="arrow icon-angle-down"></b>
				</a>

				<ul class="submenu">
					<li>
						<a href="<?php echo base_url()."Appointment/";?>">
							<i class="icon-double-angle-right"></i>
                            Appointment List
						</a>
					</li>

					<li>
						<a href="<?php echo base_url()."Appointment/create";?>">
							<i class="icon-double-angle-right"></i>
							Create New Appointment
						</a>
					</li>
				</ul>
			</li>
			<?php }elseif ($_SESSION['type']==2) { ?>
				<li>
					<a href="<?php echo base_url()."Doctor/view";?>">
						<i class="icon-dashboard"></i>
						<span class="menu-text"> Deshboard </span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url()."Doctor/AddInformation";?>">
						<i class="icon-dashboard"></i>
						<span class="menu-text"> Update Information </span>
					</a>
				</li>
			<?php }?>
			
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
					
					