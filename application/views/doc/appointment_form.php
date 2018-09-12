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
        Appointment List
        <small>
            <i class="icon-double-angle-right"></i>
            Common form elements and layouts
        </small>
    </h1>
</div><!--/.page-header-->

<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <?php echo  form_open('Appointment/saveAppointment', 'class="form-horizontal" id=""');?>
        <div class="control-group">
            <label class="control-label" for="form-field-1">City: <i class="icon-asterisk" style="color: #d14747"></i></label>
            <div class="controls">
                <?php echo form_dropdown('chamber_id',$chamber_list,'0',array('class'=>'chzn-select','id'=>'form-field-select-3'));?>

            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date">Date: <i class="icon-asterisk" style="color: #d14747"></i></label>
            <div class="controls">
                <div class="row-fluid input-append">
                    <input class="date-picker" id="id-date-picker-1 date" type="text" name="date" data-date-format="yyyy-mm-dd" />
                    <span class="add-on">
									<i class="icon-calendar"></i>
								</span>
                </div>
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
                <?php echo form_dropdown('user_id',$doc_list,'0',array('class'=>'chzn-select','id'=>'form-field-select-3'));?>

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
