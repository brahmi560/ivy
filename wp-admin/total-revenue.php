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
								<tr>
									<td>1</td>
									<td>IT Business Analyst - Practitioner</td>
									<td>1000</td>
									<td>1</td>
									<td>1000</td>
								</tr>
								<tr>
									<td>2</td>
									<td>IT Business Analyst</td>
									<td>800</td>
									<td>1</td>
									<td>800</td>
								</tr>
								<tr>
									<td>3</td>
									<td>IT Scrum Master</td>
									<td>1200</td>
									<td>1</td>
									<td>1200</td>
								</tr>
								<tr>
									<td>4</td>
									<td>IT Product Owner</td>
									<td>900</td>
									<td>1</td>
									<td>900</td>
								</tr>
								<tr>
									<td>5</td>
									<td>IT Scrum Developer</td>
									<td>1100</td>
									<td>1</td>
									<td>1100</td>
								</tr>
								<tr>
									<td></td>
									<td>Gross Revenue</td>
									<td></td>
									<td></td>
									<td>5000</td>
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
