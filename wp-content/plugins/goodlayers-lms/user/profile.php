<?php 
	$user_id = $current_user->data->ID;
	global $wpdb;
	$resumeid = esc_attr(gdlr_lms_get_user_info($user_id, 'resume'));
	$fileurl = '';
	if($resumeid)
	{
		
		$results = $wpdb->get_results( 'SELECT guid FROM wp_488a9xj6dq_posts WHERE ID="'.$resumeid.'"', OBJECT );
		//print_r($results);exit();
		if(!empty($results))
		{
			$fileurl = $results[0]->guid;
			$path_parts = pathinfo($fileurl);
			$fileextention =  $path_parts['extension'];
		}
	}
?>
<h3 class="gdlr-lms-admin-head" ><?php _e('Edit Profile', 'gdlr-lms'); ?></h3>
<form class="gdlr-lms-form" method="post" enctype="multipart/form-data" action="<?php echo esc_url(add_query_arg($_GET)); ?>" >
	<?php
		if( $current_user->roles[0] != 'student' ){
			echo '<input class="gdlr-admin-author-image" id="gdlr-admin-author-image" type="file" name="attachment" />';
		}
	?>

	<p class="gdlr-lms-half-left">
		<label for="first-name"><?php _e('First Name: *', 'gdlr-lms'); ?></label>
		<input type="text" name="first-name" id="first-name" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'first_name')); ?>" />
	</p>
	<p class="gdlr-lms-half-right">
		<label for="last-name"><?php _e('Last name: *', 'gdlr-lms'); ?></label>
		<input type="text" name="last-name" id="last-name" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'last_name')); ?>" />
	</p>
	<div class="clear"></div>
	<p class="gdlr-lms-half-left">
		<label for="gender"><?php _e('User Role: *', 'gdlr-lms'); ?></label>
		<span class="gdlr-lms-combobox">
			<?php $gender = gdlr_lms_get_user_info($user_id, 'gender'); ?>
			<select name="gender" id="gender" >
				<option value="student" <?php if(!empty($gender) && $gender == 'student') echo 'selected'; ?> ><?php _e('Aspirant', 'gdlr-lms'); ?></option>
				<!--<option value="entreprise-partner" <?php if(!empty($gender) && $gender == 'entreprise-partner') echo 'selected'; ?> ><?php _e('Entreprise Partner', 'gdlr-lms'); ?></option>
				<option value="independent-partner" <?php if(!empty($gender) && $gender == 'independent-partner') echo 'selected'; ?> ><?php _e('Independent Partner', 'gdlr-lms'); ?></option>
				<option value="knowledge-partner" <?php if(!empty($gender) && $gender == 'knowledge-partner') echo 'selected'; ?> ><?php _e('Knowledge Partner', 'gdlr-lms'); ?></option>-->
			</select>
		</span>
	</p>	
	<!--<p class="gdlr-lms-half-right">
		<label for="birth-date"><?php _e('Birth Date: *', 'gdlr-lms'); ?></label>
		<input type="text" name="birth-date" id="birth-date" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'birth-date')); ?>" />
	</p>--->
	<div class="clear"></div>
	<p class="gdlr-lms-half-left">
		<label for="email"><?php _e('Email: *', 'gdlr-lms'); ?></label>
		<input type="text" name="email" id="email" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'user_email')); ?>" />
	</p>	
	<!--<p class="gdlr-lms-half-right">
		<label for="phone"><?php _e('Phone', 'gdlr-lms'); ?></label>
		<input type="text" name="phone" id="phone" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'phone')); ?>" />
	</p>-->
	<div class="clear"></div>
	<!--<p class="gdlr-lms-half-left">
		<label for="name-on-certificate"><?php _e('Name to be displayed on Certificate: *', 'gdlr-lms'); ?></label>
		<input type="text" name="name-on-certificate" id="name-on-certificate" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, '')); ?>" />
	</p>	
	<p class="gdlr-lms-half-right">
		<label for="confirm-name-on-certificate"><?php _e('Confirm Name to be displayed on Certificate: *', 'gdlr-lms'); ?></label>
		<input type="text" name="confirm-name-on-certificate" id="confirm-name-on-certificate" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, '')); ?>" />
	</p>-->
	<div class="clear"></div>
	<p class="gdlr-lms-half-left">
		<label>Upload Your Resume(Optional):</label>
	<p class="gdlr-lms-half-right">
	<input type="file" name="resume"  style="display:none;" onchange="fileSelect()" id="resume" />
		<button class="btn btn-sm btn-primary m-t-n-xs"   type="button"><strong><label for="resume">Choose File</label></strong></button><div id="selectedfilenew"></div>
	</p>	
	<div class="clear"></div>
	<!--<p class="gdlr-lms-half-left">
		<label for="address"><?php _e('Address *', 'gdlr-lms'); ?></label>
		<textarea name="address" id="address" ><?php echo esc_textarea(gdlr_lms_get_user_info($user_id, 'address')); ?></textarea>
	</p>-->
	<?php if( $current_user->roles[0] == 'administrator' || $current_user->roles[0] == 'instructor' ){ ?>
		<p class="gdlr-lms-half-right">
			<label for="author-biography"><?php _e('Full Biography', 'gdlr-lms'); ?></label>
			<textarea name="author-biography" id="author-biography" ><?php echo esc_textarea(gdlr_lms_get_user_info($user_id, 'author-biography')); ?></textarea>
		</p>	
	<?php } ?>
	<div class="clear"></div>
	<!-- for teacher/admin user -->
	<?php if( $current_user->roles[0] == 'administrator' || $current_user->roles[0] == 'instructor' ){ ?>
		<p class="gdlr-lms-half-left">
			<label for="location"><?php _e('Location', 'gdlr-lms'); ?></label>
			<input type="text" name="location" id="location" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'location')); ?>" />
		</p>	
		<p class="gdlr-lms-half-right">
			<label for="position"><?php _e('Position', 'gdlr-lms'); ?></label>
			<input type="text" name="position" id="position" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'position')); ?>" />
		</p>	
		<div class="clear"></div>
		<p class="gdlr-lms-half-left">
			<label for="current-work"><?php _e('Current Work', 'gdlr-lms'); ?></label>
			<input type="text" name="current-work" id="current-work" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'current-work')); ?>" />
		</p>	
		<p class="gdlr-lms-half-right">
			<label for="past-work"><?php _e('Past Work', 'gdlr-lms'); ?></label>
			<input type="text" name="past-work" id="past-work" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'past-work')); ?>" />
		</p>	
		<div class="clear"></div>		
		<p class="gdlr-lms-half-left">
			<label for="specialist"><?php _e('Specialist In', 'gdlr-lms'); ?></label>
			<input type="text" name="specialist" id="specialist" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'specialist')); ?>" />
		</p>	
		<p class="gdlr-lms-half-right">
			<label for="experience"><?php _e('Experience', 'gdlr-lms'); ?></label>
			<input type="text" name="experience" id="experience" value="<?php echo esc_attr(gdlr_lms_get_user_info($user_id, 'experience')); ?>" />
		</p>	
		<div class="clear"></div>		
		<p class="gdlr-lms-half-left">
			<label for="social-network"><?php _e('Social Network', 'gdlr-lms'); ?></label>
			<textarea name="social-network" id="social-network" ><?php echo esc_textarea(gdlr_lms_get_user_info($user_id, 'social-network')); ?></textarea>
		</p>		
		<div class="clear"></div>		
	<?php } ?>
	<p>
		<input type="hidden" name="action" value="edit-profile" />
		<?php if($fileurl != ''){?>
		<?php if($fileextention == 'pdf'){?>
		<a href="<?php echo $fileurl;?>" target="_blank">
		<img src="<?php echo content_url();?>/plugins/goodlayers-lms/images/resume-pdf.png" />
		</a>
		<?php }?>
		<?php if($fileextention == 'doc'){?>
		<a href="<?php echo $fileurl;?>" target="_blank">
		<img src="<?php echo content_url();?>/plugins/goodlayers-lms/images/resume-doc.png" />
		</a>
		<?php }?>
		<?php if($fileextention == 'docx'){?>
		<a href="<?php echo $fileurl;?>" target="_blank">
		<img src="<?php echo content_url();?>/plugins/goodlayers-lms/images/resume-doc.png" />
		</a>
		<?php }?>
		<?php } ?>
		<input type="submit" class="gdlr-lms-button cyan" value="<?php _e('Update', 'gdlr-lms'); ?>" />
	</p>		
</form>	
<script>
function fileSelect(){
	document.getElementById("selectedfilenew").innerHTML = "";
	var fu1 = document.getElementById("resume");
	var path = fu1.value;
	var lastpath = path.lastIndexOf("\\")+1;
	path = path.substring(lastpath);
	document.getElementById("selectedfilenew").innerHTML = path;
}
</script>