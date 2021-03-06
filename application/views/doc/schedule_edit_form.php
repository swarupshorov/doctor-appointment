
		<div class="page-header position-relative">
			<h1>
				Edit Schedule information
				<small>
					<i class="icon-double-angle-right"></i>
					Common form elements and layouts
				</small>
			</h1>
		</div><!--/.page-header-->

		<div class="row-fluid">
			<div class="span12">
				<!--PAGE CONTENT BEGINS-->
				<?php echo  form_open('Schedule/SaveEditData', 'class="form-horizontal" id=""');?>
                <div class="control-group">
                    <label class="control-label" for="date">Date: <i class="icon-asterisk" style="color: #d14747"></i></label>
                    <div class="controls">
                        <div class="row-fluid input-append">
                            <input class="date-picker" id="id-date-picker-1 date" type="text" value="<?php echo set_value('date',$schedule->date);?>" name="date" data-date-format="yyyy-mm-dd" />
                            <span class="add-on">
									<i class="icon-calendar"></i>
								</span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="form-field-1">Select Chamber: <i class="icon-asterisk" style="color: #d14747"></i></label>
                    <div class="controls">
                        <?php echo form_dropdown('chamber_name',$chamber_list,$schedule->chamber_name,array('class'=>'chzn-select','id'=>'form-field-select-3'));?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="patient_view">Patient view: <i class="icon-asterisk" style="color: #d14747"></i></label>
                    <div class="controls">
                        <input type="text" id="patient_view" placeholder="Give Patient view number" name="patient_view" value="<?php echo set_value('patient_view',$schedule->patient_view);?>" required/>
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
					<input type="hidden" name="id" id="id" value="<?php echo set_value('id', $schedule->id); ?>"  />
				<?php echo form_close();?>
			</div><!--/.span-->
		</div><!--/.row-fluid-->
	