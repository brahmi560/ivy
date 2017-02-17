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

	<link href="css\plugins\daterangepicker\daterangepicker-bs3.css" rel="stylesheet">
</head>
<body style="background-color: #f3f3f4 !important;">
<div class="wrap">

	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox">
					<div class="ibox-title">
						<h5>Total Enrollments</h5>
					</div>
					<div class="ibox-content">
						<!--<input class="form-control" type="text" name="daterange" value="01/01/2015 - 01/31/2015">-->
						Total Enrollments as of <span></span> are 4.
						<br>
						<button onclick="document.getElementById('toggle-report-range').style.display='block'" class="btn btn-sm btn-primary m-t-n-xs" style="margin-top: 20px;" type="button"><strong>Show Details</strong></button>
						<div id="toggle-report-range"  style="display: none;">
							<div id="reportrange" class="form-control" style="margin-top: 20px; width: 320px;">
								<i class="fa fa-calendar"></i>
								<span></span> <b class="caret"></b>
							</div>
							<button onclick="document.getElementById('det-tot-enr').style.display='block'" class="btn btn-sm btn-primary m-t-n-xs" style="margin-top: 20px;" type="button"><strong>Submit</strong></button>
							<button onclick="document.getElementById('toggle-report-range').style.display = 'none'; document.getElementById('det-tot-enr').style.display = 'none';" class="btn btn-sm btn-primary m-t-n-xs" style="margin-top: 20px; margin-left: 10px;" type="button"><strong>Cancel</strong></button>
						</div>
					</div>
				</div>
			</div>
			<div id="det-tot-enr" class="col-lg-12" style="display: none;">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Detailed Total Enrollments</h5>
						<div class="ibox-tools">
							<a class="collapse-link">
								<i class="fa fa-chevron-up"></i>
							</a>
							<a class="close-link">
								<i class="fa fa-times"></i>
							</a>
						</div>
					</div>
					<div class="ibox-content">
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
								<tr>
									<td>1</td>
									<td>Patrick Smith</td>
									<td>A00001</td>
									<td>IT Business Analyst - Practitioner</td>
									<td>0800 051213</td>
									<td>patrick@gmail.com</td>
									<td>Jan 14, 2016</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Alice Jackson</td>
									<td>A00002</td>
									<td>IT Business Analyst</td>
									<td>0500 780909</td>
									<td>alice@gmail.com</td>
									<td>Jan 16, 2016</td>
								</tr>
								<tr>
									<td>3</td>
									<td>John Smith</td>
									<td>A00003</td>
									<td>IT Scrum Developer</td>
									<td>0800 1111</td>
									<td>smith@gmail.com</td>
									<td>Jan 18, 2016</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Anna Jordan</td>
									<td>A00004</td>
									<td>IT Business Analyst</td>
									<td>(016977) 0648</td>
									<td>anna@gmail.com</td>
									<td>Jan 22, 2016</td>
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
	<script src="js\plugins\fullcalendar\moment.min.js"></script>
    <script src="js\plugins\daterangepicker\daterangepicker.js"></script>

	<script>
        $(document).ready(function(){

            //$('input[name="daterange"]').daterangepicker();

            $('.ibox-content span').html(moment().format('MMMM D, YYYY'));
			
			$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2020',
                dateLimit: { days: 600 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

        });

    </script>
</body>
<?php
require( ABSPATH . 'wp-admin/admin-footer.php' );
