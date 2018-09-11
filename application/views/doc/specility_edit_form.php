
		<div class="page-header position-relative">
			<h1>
				Edit Specialist information
				<small>
					<i class="icon-double-angle-right"></i>
					Common form elements and layouts
				</small>
			</h1>
		</div><!--/.page-header-->

		<div class="row-fluid">
			<div class="span12">
				<!--PAGE CONTENT BEGINS-->
				<?php echo  form_open('Specility/SaveEditData', 'class="form-horizontal" id=""');?>
					<div class="control-group">
						<label class="control-label" for="form-field-1">User Name: </label>
						<div class="controls">
							<input type="text" id="form-field-1" placeholder="Specility name" name="name" value="<?php echo set_value('name',$specility->name); ?>" required/>
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
					<input type="hidden" name="id" id="id" value="<?php echo set_value('id', $specility->id); ?>"  />
			
				<?php echo form_close();?>
			</div><!--/.span-->
		</div><!--/.row-fluid-->
	