<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/12/2018
 * Time: 11:04 PM
 */
?>
        <div class="page-header position-relative">
			<h1>
				City information
				<small>
					<i class="icon-double-angle-right"></i>
					Common form elements and layouts
				</small>
			</h1>
		</div><!--/.page-header-->

		<div class="row-fluid">
			<div class="span12">
				<!--PAGE CONTENT BEGINS-->
				<?php echo  form_open('City/saveCity', 'class="form-horizontal" id=""');?>
					<div class="control-group">
						<label class="control-label" for="phone">City Name: <i class="icon-asterisk" style="color: #d14747"></i></label>
						<div class="controls">
							<input type="text" id="name" placeholder="City Name" name="name" value=" <?php echo set_value('name',$city->name); ?>" required/>
						</div>
					</div>

					<div class="form-actions">
						<button class="btn btn-info" type="submit">
							<i class="icon-ok bigger-110"></i>
							Submit
						</button>						&nbsp; &nbsp; &nbsp;
						<button class="btn" type="reset">
							<i class="icon-undo bigger-110"></i>
							Reset
						</button>
					</div>

					<div class="hr"></div>

				<?php echo form_close();?>
			</div><!--/.span-->
		</div><!--/.row-fluid-->