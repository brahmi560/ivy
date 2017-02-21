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
            $results = $wpdb->get_results( 'SELECT COUNT(a.course_id) as coursecount,SUM(a.price) as coursewiseprice,c.post_title FROM wp_488a9xj6dq_gdlrpayment a  INNER JOIN wp_488a9xj6dq_posts c ON(a.course_id = c.ID) WHERE DATE(a.payment_date) BETWEEN "'.$mindate.'" AND "'.$maxdate.'" AND a.payment_status="paid" GROUP BY a.course_id  ORDER BY a.payment_date DESC', OBJECT );
			//print_r($results);
			?>
			
			
			
			
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>#</th>
									<th>Certification </th>
									<th>Amount for each </th>
									<th>Count </th>
									<th>Total Amount </th>
								</tr>
								</thead>
								<tbody>
								<?php 
								$sno = 1;
								$grossamount = 0;
								foreach($results as $totalincome){
									$grossamount = $grossamount+round($totalincome->coursewiseprice);
									?>
								<tr>
									<td><?php echo $sno;?></td>
									<td><?php echo $totalincome->post_title;?></td>
									<td><?php echo round($totalincome->coursewiseprice/$totalincome->coursecount);?></td>
									<td><?php echo $totalincome->coursecount;?></td>
									<td><?php echo round($totalincome->coursewiseprice);?></td>
								</tr>
								<?php 
								$sno++;
								}?>
								<tr>
									<td></td>
									<td>Gross Revenue</td>
									<td></td>
									<td></td>
									<td><?php echo $grossamount;?></td>
								</tr>
								</tbody>
							</table>
						</div>

					
		
