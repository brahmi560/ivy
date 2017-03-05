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
    <style>
    .succesmessage
    {
      display:none;
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
						<h5>Aspirant</h5>
					</div>
					<div class="ibox-content">
						<form method="get" class="form-horizontal">
						<div class="alert alert-success alert-dismissable succesmessage">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
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
											<input id="checkbox2" type="checkbox" >
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
                	$('.succesmessage').css('display','none');
    			var selecteduser =  $("#course-name-opt-asperent").val();
    			var disableuser = '';
    			var restrictcertification = '';
    			var restrictpayment = '';
    			var restrictcoursemeterial = '';
    			var deleteuser = '';
    			var restrictonlineexamenrol = '';
        		if($('#checkbox2').is(':checked'))
    			{
        			disableuser = "disabled_user";
    			}
        		if($('#checkbox3').is(':checked'))
    			{
        			restrictcertification = "restrict_certification";
    			}
        		if($('#checkbox4').is(':checked'))
    			{
        			restrictpayment = "restrict_payment";
    			}
        		if($('#checkbox5').is(':checked'))
    			{
        			restrictcoursemeterial = "restrict_course_meterial";
    			}
        		if($('#checkbox6').is(':checked'))
    			{
        			deleteuser = "delete_user";
    			}
        		if($('#checkbox7').is(':checked'))
    			{
        			restrictonlineexamenrol = "restrict_online_exam_enrol";
    			}
    			
    			

                  if(selecteduser != 0){
    			  $.ajax({
    				  method: "POST",
    				  url: "ajaxcontrolpanel.php",
    				 
    				  data: { selecteduser: selecteduser, disableuser: disableuser,restrictcertification: restrictcertification,restrictpayment: restrictpayment,restrictcoursemeterial: restrictcoursemeterial,deleteuser: deleteuser,restrictonlineexamenrol: restrictonlineexamenrol },
    				  dataType: "json",
    			    success: function(data) {
    				 console.log('hello');  
    			      $('.succesmessage').show('display','block');
    			    }
    			  });
                  }
                  else
                  {
                      alert('Please select user.');
                  }
    			  
    			});

                $('#course-name-opt-asperent').on('change',function(){
        			var selecteduser =  $(this).val();
        			$('#checkbox2').prop('checked', false);
        			$('#checkbox3').prop('checked', false);
        			$('#checkbox4').prop('checked', false);
        			$('#checkbox5').prop('checked', false);
        			$('#checkbox6').prop('checked', false);
        			$('#checkbox7').prop('checked', false);
                      if(selecteduser != 0){
        			  $.ajax({
        				  method: "GET",
        				  url: "ajaxusercontrolpanel.php",
        				 
        				  data: { selecteduser: selecteduser },
        				  dataType: "json",
        			    success: function(data) {
        			    if(data.restrict_usercheck == 1)
           				 {
           					 $('#checkbox2').prop('checked', true);
           				 }  
        				 if(data.restrict_certification == 1)
        				 {
        					 $('#checkbox3').prop('checked', true);
        				 }  
        				 if(data.restrict_payment == 1)
        				 {
        					 $('#checkbox4').prop('checked', true);
        				 }  
        				 if(data.restrict_course_meterial == 1)
        				 {
        					 $('#checkbox5').prop('checked', true);
        				 }  
        				 if(data.restrict_online_exam_enrol == 1)
        				 {
        					 $('#checkbox7').prop('checked', true);
        				 }  
        				  
        			      
        			    }
        			  });
                      }
                      else
                      {
                          alert('Please select user.');
                      }
        			  
        			});

    			
            });
	</script>
</body>
<?php
require( ABSPATH . 'wp-admin/admin-footer.php' );
