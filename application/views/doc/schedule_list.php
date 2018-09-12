
		<div class="page-header position-relative">
			<h1>
				Schedule information
				<small>
					<i class="icon-double-angle-right"></i>
					Common form elements and layouts
				</small>
			</h1>
		</div><!--/.page-header-->
		<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid">
			<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
				<thead>					
					<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending" style="width: 161px;">SL</th>					
					<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 125px;">Date</th>
					<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 125px;">Place</th>
					<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 125px;">Patient View</th>
					<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 125px;">Status</th>
					<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 160px;">Action</th>
				</tr>
			</thead>
			<tbody role="alert" aria-live="polite" aria-relevant="all">
			<?php
		        $counter = 1;
		        //var_dump($data);exit();
		        if (!empty($schedule)) {
		            foreach ($schedule as $schedule_list) {
			?>
				<tr class="odd">
					<td class="hidden-480 "><?php echo $counter; ?></td>
					<td class="hidden-phone "><?php echo $schedule_list['date']; ?></td>				
					<td class="hidden-phone "><?php echo $schedule_list['place']; ?></td>					
					<td class="hidden-phone "><?php echo $schedule_list['patient_view']; ?></td>
					<td class="hidden-phone ">
						<?php 
							if($schedule_list['status']==0){
								echo '<span class="btn btn-danger btn-small tooltip-error" data-rel="popover" data-placement="top" data-original-title="<i class="icon-bolt red"></i>Deactive</span>';
							}else{
								echo '<span class="btn btn-success btn-small tooltip-success" data-rel="popover" data-placement="right" title=""  data-original-title="<i class="icon-ok green"></i>Active</span>';
							} 
						?>							
						</td>
					<td class="td-actions ">
						<div class="hidden-phone visible-desktop action-buttons">							
							<a class="green" href="<?php echo base_url() . "Schedule/edit/" .$schedule_list['id']; ?>">
								<i class="icon-pencil bigger-130"></i>
							</a>
							<a class="red" href="<?php echo base_url() . "Schedule/delete/" .$schedule_list['id']; ?>">
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
	