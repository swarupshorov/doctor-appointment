
		<div class="page-header position-relative">
			<h1>
				Add New Doctor
				<small>
					<i class="icon-double-angle-right"></i>
					Common form elements and layouts					
				</small>
			</h1>
			
		</div><!--/.page-header-->

		<div class="row-fluid">
			<div class="span12">
				<!--PAGE CONTENT BEGINS-->
				<?php echo  form_open_multipart('Doctor/saveInformation', 'class="form-horizontal" id=""');?>
					<div class="control-group">
						<label class="control-label" for="form-field-1">User Name: </label>
						<div class="controls">
							<input type="text" readonly id="form-field-1" placeholder="Username"  value="<?php echo $_SESSION['user_name']; ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="form-field-1">User Email: </label>
						<div class="controls">
							<input type="email" readonly id="form-field-1" placeholder="E-mail" name="email" value=" <?php echo $_SESSION['email']; ?>" required/>
						</div>
					</div>
					<div class="control-group">
                        <label class="control-label" for="form-field-1">Specility: <i class="icon-asterisk" style="color: #d14747"></i></label>
                        <div class="controls">
                            <?php echo form_dropdown('special_id',$specility_list,$allData->special_id,array('class'=>'chzn-select','id'=>'form-field-select-orm-field-select-3'));?>

                        </div>
                    </div>
					<div class="control-group">
						<label class="control-label" for="form-field-1">Full Name: <i class="icon-asterisk" style="color: #d14747"></i></label>
						<div class="controls">
							<input type="text" id="form-field-1" placeholder="Full Name" name="name" value='<?php echo set_value("name",$allData->name);?>' required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="form-field-1">Cell Number: <i class="icon-asterisk" style="color: #d14747"></i></label>
						<div class="controls">
							<input type="text" id="form-field-1" placeholder="Cell No" name="cell_no" value="<?php echo set_value("cell_no",$allData->cell_no);?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label " for="place">Address: <i class="icon-asterisk" style="color: #d14747"></i></label>
						<div class="controls ">
							<textarea  placeholder="Address" name="address"  id="place" required><?php echo set_value("address",$allData->address);?></textarea>
						</div>
					</div>
					
					<div class="control-group ">
			            <label class="control-label" for="date">Date Of Birth: <i class="icon-asterisk" style="color: #d14747"></i></label>
			            <div class="controls ">
			                <div class="row-fluid input-append">
			                    <input class="date-picker" id="id-date-picker-1 date" value="<?php echo set_value("date_of_birth",$allData->date_of_birth);?>" type="text" name="date_of_birth" data-date-format="yyyy-mm-dd" />
			                    <span class="add-on">
			    					<i class="icon-calendar"></i>
			    				</span>
			                </div>
			            </div>
			        </div>
                    <div class="control-group ">
			            <label class="control-label" for="date">Image </label>
			            <div class="controls ">
			                <div class="row-fluid input-append">
			                    <input class="" id="" type="file" name="photo"  />

			                </div>
			            </div>
			        </div>
			        <div class="control-group">
						<label class="control-label" for="form-field-1">Education: </label>
						<div class="controls education-f-add">
							<input type="text" placeholder="Education" name="education[]" value="" />
						</div>
						<div class="add-new-btn">
							<input type="button " name="" value="add" class="btn btn-mini add_field " name="">
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
	