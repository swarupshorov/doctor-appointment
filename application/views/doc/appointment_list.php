<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/13/2018
 * Time: 12:48 AM
 */
?>
<div class="page-header position-relative">
    <h1>
        Appointment information
        <small>
            <i class="icon-double-angle-right"></i>
            Common form elements and layouts
        </small>
    </h1>
</div><!--/.page-header-->
<div class="table-header page-table-header" >
    <a href="<?php echo base_url()."Appointment/create";?>">
        <div class="clearfix">
            <h5 class="bigger lighter">
                <i class="icon-plus"></i>
                Add New
            </h5>
        </div>
    </a>

</div>
<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
    <table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
        <thead>

        <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending" style="width: 161px;">SL</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 125px;">City Name</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 125px;">Chamber Name</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 125px;">Doctor Name</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 125px;">Patient Name</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 125px;">Date</th>

        <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 160px;">Action</th>
        </tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        <?php
        $counter = 1;

        if (!empty($appointmet)) {
            foreach ($appointmet as $appointmet_list) {
                ?>
                <tr class="odd">
                <td class="hidden-480 "><?php echo $counter; ?></td>
                <td class="hidden-480 "><?php echo $appointmet_list->city_name; ?></td>
                <td class="hidden-480 "><?php echo $appointmet_list->chamber_id; ?></td>
                <td class="hidden-480 "><?php echo $appointmet_list->doctor; ?></td>
                <td class="hidden-480 "><?php echo $appointmet_list->patient; ?></td>
                <td class="hidden-480 "><?php echo $appointmet_list->date; ?></td>
                <td class="td-actions ">
                    <div class="hidden-phone visible-desktop action-buttons">
                        <a class="green" href="<?php echo base_url() . "Appointment/edit/" .$appointmet_list->id; ?>">
                            <i class="icon-pencil bigger-130"></i>
                        </a>
                        <a class="red" href="<?php echo base_url() . "Appointment/delete/" .$appointmet_list->id; ?>">
                            <i class="icon-trash bigger-130"></i>
                        </a>
                    </div>
                </td>
                <?php
                $counter++;
            } ?>
            </tr>
        <?php  	}  ?>
        </tbody>
    </table>

