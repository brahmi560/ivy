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
    <link href="css\plugins\iCheck\custom.css" rel="stylesheet">
    <link href="css\animate.css" rel="stylesheet">
    <link href="css\style.css" rel="stylesheet">

    <link href="css\plugins\awesome-bootstrap-checkbox\awesome-bootstrap-checkbox.css" rel="stylesheet">
</head>
<body style="background-color: #f3f3f4 !important;">
<div class="wrap">

	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox">
					<div class="ibox-title">
						<h5>Aspirant</h5>
					</div>
					<div class="ibox-content">
						<form method="get" class="form-horizontal">
							<div class="form-group"><label class="col-sm-2 control-label">Select User ID</label>

								<div class="col-lg-6 col-md-6">
								<?php 
                        global $wpdb;
                        $allasperents = $wpdb->get_results( 'SELECT ID,user_login FROM  wp_488a9xj6dq_users WHERE user_roles="student"  ORDER BY user_login ASC', OBJECT );
                        ?>
                         <?php if(!empty($allasperents)){?>
									<select id="course-name-opt-asperent" class="form-control m-b" name="account">
										<option value="0">Select</option>
											<?php foreach ($allasperents as $aperent){?>
											<option value="<?php echo $aperent->ID; ?>"><?php echo $aperent->user_login; ?></option>
											<?php }?>
									</select>
									<?php } ?>
								</div>
							</div>
							<div class="form-group">	
								<div class="col-md-6">
								<label class="control-label">Select actions to perform</label>
									<fieldset>
										<div class="checkbox checkbox-primary">
											<input id="checkbox2" type="checkbox">
											<label for="checkbox2">
												Disable Aspirant
											</label>
										</div>
										<div class="checkbox checkbox-primary">
											<input id="checkbox3" type="checkbox">
											<label for="checkbox3">
												Restrict Certification Selection
											</label>
										</div>
										<div class="checkbox checkbox-primary">
											<input id="checkbox4" type="checkbox">
											<label for="checkbox4">
												Restrict making payment
											</label>
										</div>
										<div class="checkbox checkbox-primary">
											<input id="checkbox5" type="checkbox">
											<label for="checkbox5">
												Restrict course material access
											</label>
										</div>
									</fieldset>
								</div>
								<div class="col-md-6">
								<label class="control-label">Edit Member Details</label>
									<fieldset>
									<!--<label class="control-label">Change Referral</label>
										<div class="">
											<select id="course-name-opt" class="form-control m-b" name="account" disabled>
												<option>Select</option>
												<option>Aspirant</option>
											</select>
										</div>-->
										<div class="checkbox checkbox-primary">
											<input id="checkbox6" type="checkbox">
											<label for="checkbox6">
												Delete Aspirant
											</label>
										</div>
										<div class="checkbox checkbox-primary">
											<input id="checkbox7" type="checkbox">
											<label for="checkbox7">
												Restrict Online Exam enroll
											</label>
										</div>
									</fieldset>
								</div>
							</div>
							<div>
								<a href="#"><button class="btn btn-sm btn-primary m-t-n-xs" type="button" id="finalfilter"><strong>Update</strong></button></a>
							</div>
						</form>
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
	
	<!-- iCheck -->
    <script src="js\plugins\iCheck\icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });


                $('#finalfilter').on('click',function(){
    			var selecteduser =  $("#course-name-opt-asperent").val();
    			var disableuser = '';
    			var restrictcertification = '';
    			var restrictpayment = '';
        		if($('#checkbox2').is(':checked'))
    			{
        			disableuser = "disabled_user";
    			}
        		if($('#checkbox2').is(':checked'))
    			{
        			restrictcertification = "restrict_certification";
    			}
        		if($('#checkbox2').is(':checked'))
    			{
        			restrictpayment = "restrict_payment";
    			}
        		if($('#checkbox2').is(':checked'))
    			{
        			disableuser = "disabled_user";
    			}
        		if($('#checkbox2').is(':checked'))
    			{
        			disableuser = "disabled_user";
    			}
        		if($('#checkbox2').is(':checked'))
    			{
        			disableuser = "disabled_user";
    			}
    			
    			return false;

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
