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
		<style>
	#ajaxloaderid
	{
	  display:none;
	  width:10%;
	  margin-left: 40%;
	}
	#ajxprogress
	{
	float: left;
    width: 100%;
    background: #fff;
	}
	</style>
	
</head>
<body style="background-color: #f3f3f4 !important;">
<div class="wrap">

	<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
				<div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Certification Wise Enrollments</h5>
                        </div>
                        <div class="ibox-content">
                        <?php 
                        global $wpdb;
                        $allcertificates = $wpdb->get_results( 'SELECT ID,post_title FROM  wp_488a9xj6dq_posts WHERE post_type="course" AND post_status="publish"  ORDER BY post_title ASC', OBJECT );
                        ?>
							<form method="get" class="form-horizontal">
                                <div class="form-group"><label class="col-sm-2 control-label">Select Certification</label>
									<!--Add categories in future-->
                                    <div class="col-sm-10 col-lg-6 col-md-6">
                                    <?php if(!empty($allcertificates)){?>
										<select id="course-name-opt" class="form-control m-b" name="account">
											<option value="0">Select</option>
											<?php foreach ($allcertificates as $certificate){?>
											<option value="<?php echo $certificate->ID; ?>"><?php echo $certificate->post_title; ?></option>
											<?php }?>
											
										</select>
										<?php } ?>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                            </form>
							<div id="toggle-report-range">
								<div id="reportrange" class="form-control" style="margin-top: 20px; width: 320px;">
									<i class="fa fa-calendar"></i>
									<span></span> <b class="caret"></b>
								</div>
								<button onclick="document.getElementById('det-tot-enr').style.display='block'" class="btn btn-sm btn-primary m-t-n-xs" style="margin-top: 20px;" type="button"   id="finalfilter"><strong>Submit</strong></button>
								<button onclick="document.getElementById('det-tot-enr').style.display='none'" class="btn btn-sm btn-primary m-t-n-xs" style="margin-top: 20px; margin-left: 10px;" type="button"><strong>Cancel</strong></button>
							</div>
                        </div>
                    </div>
                </div>
				<div id="det-tot-enr" class="col-lg-12" style="display: none;">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5><span></span> Enrollments</h5>
						</div>
						<div class="ibox-content"  id="dynamiccontentenrol">
							

						</div>
						
											
					<div id="ajxprogress"><img src="images/ajaxprogress.gif" id="ajaxloaderid" /></div>
						
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

			/* $(function(){
				$("#det-tot-enr h5 span").html($("#course-name-opt").val());
				$("#course-name-opt").change(function() {
					$("#det-tot-enr h5 span").html($(this).val());
				});
			}); */



			
			$('#finalfilter').on('click',function(){
				$('#dynamiccontentenrol').html('');
			var mindatenew = $( ".input-mini" ).first().val();
			var maxdatenew = $( ".input-mini" ).last().val();
			var selectedcertificate =  $("#course-name-opt").val();
			//console.log(selectedcertificate);

              if(selectedcertificate != 0){
			  $.ajax({
				  method: "GET",
				  url: "ajaxcertificationwiseenrolment.php",
				  beforeSend: function()
				  {$("#ajaxloaderid").css("display", "block");
				  },
				  data: { mindatenew: mindatenew, maxdatenew: maxdatenew,selectedcertificate: selectedcertificate },
				  dataType: "html",
			    success: function(data) {
				    $('#dynamiccontentenrol').html(data)
				    $("#ajaxloaderid").css("display", "none");
			      console.log(data);
			    }
			  });
              }
              else
              {
                  alert('Please select certificate.');
              }
			  
			});
            

			

		});

    </script>
</body>
<?php
require( ABSPATH . 'wp-admin/admin-footer.php' );
