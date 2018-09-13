
		<div class="page-header position-relative">
			<h1>
				Create New Chamber
				<small>
					<i class="icon-double-angle-right"></i>
					Common form elements and layouts
				</small>
			</h1>
		</div><!--/.page-header-->

		<div class="row-fluid">
			<div class="span12">
				<!--PAGE CONTENT BEGINS-->
				<?php echo  form_open('Chamber/saveChamber', 'class="form-horizontal" id=""');?>
                    <div class="control-group">
                        <label class="control-label" for="form-field-1">City: <i class="icon-asterisk" style="color: #d14747"></i></label>
                        <div class="controls">
                            <?php echo form_dropdown('city_id',$city_list,$allData['city_id'],array('class'=>'chzn-select','id'=>'form-field-select-3'));?>

                        </div>
                    </div>
					<div class="control-group">
						<label class="control-label " for="place">Place Name: <i class="icon-asterisk" style="color: #d14747"></i></label>
						<div class="controls">
							<textarea  placeholder="Chamber Place" name="place"  id="place" required><?php echo set_value('place',$allData['place']); ?></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="in_time">In Time: <i class="icon-asterisk" style="color: #d14747"></i></label>
						<div class="controls">
							<div class="input-append bootstrap-timepicker">
								
								<input id="in_time" type="text" class="input-small timepicker1" name="in_time" value="<?php echo set_value('in_time',$allData['in_time']);?>" required />
								<span class="add-on">
									<i class="icon-time"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="out_time">Out Time: <i class="icon-asterisk" style="color: #d14747"></i></label>
						<div class="controls">
							<div class="input-append bootstrap-timepicker">

								<input id="out_time" type="text" class="input-small timepicker1" value="<?php echo set_value('out_time',$allData['out_time']);?>" name="out_time" required />
								<span class="add-on">
									<i class="icon-time"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="form-field-1">Select Doctor: <i class="icon-asterisk" style="color: #d14747"></i></label>
						<div class="controls">
							<?php echo form_dropdown('user_id',$doc_list,$allData['user_id'],array('class'=>'chzn-select','id'=>'form-field-select-3'));?>

						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="phone">Phone: </label>
						<div class="controls">
							<input type="text" id="phone" placeholder="Contact No" name="phone" value=" <?php echo set_value('phone',$allData['phone']); ?>" required/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">Email:</label>
						<div class="controls">
							<input type="email" id="email" placeholder="E-mail" name="email" value=" <?php echo set_value('email',$allData['email']); ?>" />
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
	