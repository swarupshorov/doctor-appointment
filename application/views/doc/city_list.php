<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/12/2018
 * Time: 11:20 PM
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
		<div class="table-header page-table-header" >
			<a href="<?php echo base_url()."City/create";?>">
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

					<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 160px;">Action</th>
				</tr>
			</thead>
			<tbody role="alert" aria-live="polite" aria-relevant="all">
			<?php
		        $counter = 1;
		        //var_dump($data);exit();
		        if (!empty($city)) {
		            foreach ($city as $city_list) {
			?>
				<tr class="odd">
					<td class="hidden-480 "><?php echo $counter; ?></td>
					<td class="hidden-phone "><?php echo $city_list->name; ?></td>

					<td class="td-actions ">
						<div class="hidden-phone visible-desktop action-buttons">
							<a class="green" href="<?php echo base_url() . "City/edit/" .$city_list->id; ?>">
								<i class="icon-pencil bigger-130"></i>
							</a>
							<a class="red" href="<?php echo base_url() . "City/delete/" .$city_list->id; ?>">
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
