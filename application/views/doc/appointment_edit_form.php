<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/13/2018
 * Time: 12:52 AM
 */
?>
<div class="page-header position-relative">
    <h1>
        Add New Appointment 
        <small>
            <i class="icon-double-angle-right"></i>
            Common form elements and layouts
        </small>
    </h1>
</div><!--/.page-header-->

<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <?php echo  form_open('Appointment/SaveEditData', 'class="form-horizontal" id=""');?>
        <div class="control-group">
            <label class="control-label" for="form-field-1">City: <i class="icon-asterisk" style="color: #d14747"></i></label>
            <div class="controls">
                <?php echo form_dropdown('city_id',$city_list,$appointment->city_id,array('class'=>'chzn-select','id'=>'city-id'));?>
            </div>
        </div>
        <div class="control-group response-chamber">
           <!-- response chamber list from script file -->
        </div>
        <div class="control-group response-doctor">
           <!-- response doctor list from script file -->
        </div>

        <div class="control-group">
            <label class="control-label" for="form-field-1">Patient : <i class="icon-asterisk" style="color: #d14747"></i></label>
            <div class="controls">
                <?php echo form_dropdown('patient_id',$user_list,$appointment->patient_id,array('class'=>'chzn-select','id'=>'form-field-select-3'));?>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date">Date: <i class="icon-asterisk" style="color: #d14747"></i></label>
            <div class="controls">
                <div class="row-fluid input-append">
                    <input class="date-picker" id="id-date-picker-1 date" type="text" name="date" value='<?php echo set_value("date",$appointment->date);?>' data-date-format="yyyy-mm-dd" />
                    <span class="add-on">
    					<i class="icon-calendar"></i>
    				</span>
                </div>
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
        <input type="hidden" name="id" id="id" value="<?php echo set_value('id', $appointment->id); ?>"  />
            

        <?php echo form_close();?>
    </div><!--/.span-->
</div><!--/.row-fluid-->

