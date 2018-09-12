
		<div class="page-header position-relative">
			<h1>
				Schedule List
				<small>
					<i class="icon-double-angle-right"></i>
					Common form elements and layouts
				</small>
			</h1>
		</div><!--/.page-header-->

		<div class="row-fluid">
			<div class="span12">
				<!--PAGE CONTENT BEGINS-->
				<?php echo  form_open('Schedule/saveSchedule', 'class="form-horizontal" id=""');?>
					
					
					
					<div class="control-group">
						<label class="control-label" for="out_time">Date: <i class="icon-asterisk" style="color: #d14747"></i></label>
						<div class="controls">
							<div class="row-fluid input-append">
								<input class="span10 date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
								<span class="add-on">
									<i class="icon-calendar"></i>
								</span>
							</div>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="phone">Phone: </label>
						<div class="controls">
							<input type="text" id="phone" placeholder="Contact No" name="phone" value=" " required/>
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
	