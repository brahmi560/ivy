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
			/* $user_last_test = get_user_meta(8);
			print_r($user_last_test); */
			global $wpdb;
            $results = $wpdb->get_results( 'SELECT a.*,b.*,c.post_title FROM wp_488a9xj6dq_gdlrpayment a INNER JOIN wp_488a9xj6dq_users b ON(a.student_Id = b.ID) INNER JOIN wp_488a9xj6dq_posts c ON(a.course_id = c.ID) WHERE DATE(a.attendance) BETWEEN "'.$mindate.'" AND "'.$maxdate.'"  ORDER BY a.attendance DESC', OBJECT );
			//print_r($results);
			?>
			
			
			
			
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>#</th>
									<th>Name </th>
									<th>User ID </th>
									<th>Course Name </th>
									<th>Phone </th>
									<th>Email ID </th>
									<th>Enroll Date</th>
								</tr>
								</thead>
								<tbody>
								<?php 
								$sno = 1;
								foreach($results as $totalenrol){
									$user_last = get_user_meta($totalenrol->ID);
									?>
								<tr>
									<td><?php echo $sno.date('Y-m-d',strtotime($mindate));?></td>
									<td><?php echo $user_last['first_name'][0].' '.$user_last['last_name'][0];?> Smith</td>
									<td>A<?php echo str_pad($totalenrol->ID, 5, '0', STR_PAD_LEFT); ?> </td>
									<td><?php echo $totalenrol->post_title;?></td>
									<td><?php echo $user_last['phone'][0]; ?></td>
									<td><?php echo $totalenrol->user_email;?></td>
									<td><?php echo date('M d, Y ',strtotime($totalenrol->attendance));?></td>
								</tr>
								<?php 
								$sno++;
								} ?>
								
								</tbody>
							</table>
						</div>

					
		
