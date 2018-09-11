
		<div class="page-header position-relative">
			<h1>
				Doctor information
				<small>
					<i class="icon-double-angle-right"></i>
					Common form elements and layouts
				</small>
			</h1>
		</div><!--/.page-header-->

		<div class="row-fluid">
			<div class="span12">
				<!--PAGE CONTENT BEGINS-->
				<?php echo  form_open('Doctor/saveDoctor', 'class="form-horizontal" id=""');?>
					<div class="control-group">
						<label class="control-label" for="form-field-1">User Name: </label>
						<div class="controls">
							<input type="text" id="form-field-1" placeholder="Username" name="user_name" value="<?php echo set_value('user_name',$user_name); ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="form-field-1">User Email: </label>
						<div class="controls">
							<input type="email" id="form-field-1" placeholder="E-mail" name="email" value=" <?php echo set_value('user_name',$email); ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="form-field-1">Password</label>
						<div class="controls">
							<input type="text" id="form-field-1" placeholder="Password" name="password" value="" required/>
						</div>
					</div>

					<div class="form-actions">
						<button class="btn btn-info" type="submit">
							<i class="icon-ok bigger-110"></i>
							Submit
						</button>

						&nbsp; &nbsp; &nbsp;
						<button class="btn" type="reset">
							<i class="icon-undo bigger-110"></i>
							Reset
						</button>
					</div>

					<div class="hr"></div>
			
				<?php echo form_close();?>
			</div><!--/.span-->
		</div><!--/.row-fluid-->
	