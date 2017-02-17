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
						<h5>Date Span Revenue</h5>
					</div>
					<div class="ibox-content">
						<div id="toggle-report-range">
							<div id="reportrange" class="form-control" style="margin-top: 20px; width: 320px;">
								<i class="fa fa-calendar"></i>
								<span></span> <b class="caret"></b>
							</div>
							<button onclick="document.getElementById('det-tot-enr').style.display='block'" class="btn btn-sm btn-primary m-t-n-xs" style="margin-top: 20px;" type="button"><strong>Submit</strong></button>
							<button onclick="document.getElementById('det-tot-enr').style.display='none'" class="btn btn-sm btn-primary m-t-n-xs" style="margin-top: 20px; margin-left: 10px;" type="button"><strong>Cancel</strong></button>
						</div>
					</div>
				</div>
			</div>
			<div id="det-tot-enr" class="col-lg-12" style="display: none;">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Detailed Date Span Revenue</h5>
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
									<td>Total Payment</td>
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