
		<div class="page-header position-relative">
			<h1>
				Add New Specilit
				<small>
					<i class="icon-double-angle-right"></i>
					Common form elements and layouts
				</small>
			</h1>
		</div><!--/.page-header-->

		<div class="row-fluid">
			<div class="span12">
				<!--PAGE CONTENT BEGINS-->
				<?php echo  form_open('Specility/saveSpecility', 'class="form-horizontal" id=""');?>
					<div class="control-group">
						<label class="control-label" for="form-field-1">Specility Name: </label>
						<div class="controls">
							<input type="text" id="form-field-1" placeholder="Specility Name" name="name" value="<?php echo set_value('name',$name); ?>" required/>
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
	