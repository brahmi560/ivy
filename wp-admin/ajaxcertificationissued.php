<?php
/**
 * Dashboard Administration Screen
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Load WordPress Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );


?>

			
			<?php
			$mindate = date('Y-m-d',strtotime($_GET['mindatenew']));
			$maxdate = date('Y-m-d',strtotime($_GET['maxdatenew']));
			global $wpdb;
$results = $wpdb->get_results( 'SELECT * FROM wp_488a9xj6dq_usermeta WHERE meta_key="gdlr-lms-certificate"', OBJECT );

			?>
			
			
			
			
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>#</th>
									<th>User Name </th>
									<th>Certification Name </th>
									<th>Phone </th>
									<th>Email ID </th>
									<th>Date</th>
								</tr>
								</thead>
								<tbody>
								<?php 
								$sno = 1;
								foreach ($results as $certificateInfo)
										{
										
										 $user_last = get_user_meta($certificateInfo->user_id);
										 $serializeddata = unserialize($certificateInfo->meta_value);
										  
										 foreach ($serializeddata as $key => $innerData)
										 {
										 	$courseid = $key;
										 	$certificationDate = $innerData['date'];
										 	$comparedate = date('Y-m-d',strtotime($innerData['date']));
										 } 
										 $user_info = get_userdata($certificateInfo->user_id);
										 if($comparedate >= $mindate && $comparedate <= $maxdate)
										 {
										 	$courseInfo = $wpdb->get_results( 'SELECT post_title FROM wp_488a9xj6dq_posts WHERE ID = "'.$courseid.'"', OBJECT );
										 	//print_r($courseInfo);exit();
										?>
								<tr>
									<td><?php echo $sno;?></td>
									<td><?php echo $user_last['first_name'][0].' '.$user_last['last_name'][0];?></td>
									<td><?php echo $courseInfo[0]->post_title;?></td>
									<td><?php echo $user_last['phone'][0]; ?></td>
									<td><?php echo  $user_info->user_email; ?></td>
									<td><?php echo date('M d, Y ',strtotime($certificationDate));?></td>
								</tr>
								<?php $sno++;
										 }} ?>
								</tbody>
							</table>
						</div>
						</div>

					
		
