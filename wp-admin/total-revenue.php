<?php
/**
 * Dashboard Administration Screen
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Load WordPress Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

include( ABSPATH . 'wp-admin/admin-header.php' );
?>
<html>
<head>
    <link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome\css\font-awesome.css" rel="stylesheet">
    <link href="css\animate.css" rel="stylesheet">
    <link href="css\style.css" rel="stylesheet">
</head>
<body style="background-color: #f3f3f4 !important;">
<div class="wrap">

	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Total Revenue (Gross)</h5>
					</div>
					<?php 
			global $wpdb;
            $results = $wpdb->get_results( 'SELECT COUNT(a.course_id) as coursecount,SUM(a.price) as coursewiseprice,c.post_title FROM wp_488a9xj6dq_gdlrpayment a  INNER JOIN wp_488a9xj6dq_posts c ON(a.course_id = c.ID) GROUP BY a.course_id  ORDER BY a.attendance DESC', OBJECT );
            //print_r($results);
            ?>
					<div class="ibox-content">
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

					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- wrap -->
    <!-- Mainly scripts -->
    <script src="js\jquery-2.1.1.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\plugins\metisMenu\jquery.metisMenu.js"></script>
    <script src="js\plugins\slimscroll\jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js\ivy.js"></script>
    <script src="js\plugins\pace\pace.min.js"></script>
</body>
<?php
require( ABSPATH . 'wp-admin/admin-footer.php' );
