<?php 
	$user_id = $current_user->data->ID;
?>
<div class="gdlr-lms-profile-certificate gdlr-lms-col2" >
<h3 class="gdlr-lms-admin-head" ><?php _e('Certificates', 'gdlr-lms'); ?></h3>
<?php 
	$certificates = gdlr_lms_get_user_info($user_id, 'gdlr-lms-certificate');
	if( !empty($certificates) ){
		foreach($certificates as $course_id => $certificate){
			if( empty($course_id) ) continue;
			echo '<div class="certificate-list-wrapper">';
			echo '<i class="fa fa-file-text icon-file-text"></i>';
			echo '<a data-rel="gdlr-lms-lightbox" data-lb-open="certificate-form" class="gdlr-lms-certificate-link" >';
			echo get_the_title($course_id);
			echo '</a>';
			gdlr_lms_certificate_form($course_id, $certificate);
			echo '</div>';
		}
	}
?>
</div>
<div class="gdlr-lms-profile-badge gdlr-lms-col2">
<!--<h3 class="gdlr-lms-admin-head" ><?php _e('Badges', 'gdlr-lms'); ?></h3>-->
<?php 
	$badges = gdlr_lms_get_user_info($user_id, 'gdlr-lms-badge');
	if( !empty($badges) ){
		foreach($badges as $course_id => $badge){
			echo '<div class="gdlr-badge-image">';
			echo '<img src="' . $badge['image'] . '" alt="" />';
			echo '<div class="badge-title">' . $badge['title'] . '</div>';
			echo '</div>';
		}
	}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
<h3 class="gdlr-lms-admin-head" ><?php _e('Profile', 'gdlr-lms'); ?></h3>
<div class="gdlr-lms-profile-info-wrapper">
	<div class="gdlr-lms-profile-info">
		<span class="gdlr-lms-head" style="text-align: right; padding-right: 15px;"><?php echo __('First Name:', 'gdlr-lms'); ?></span>
		<span class="gdlr-lms-tail"><?php echo gdlr_lms_get_user_info($user_id, 'first_name'); ?></span>
	</div>
	<div class="gdlr-lms-profile-info">
		<span class="gdlr-lms-head" style="text-align: right; padding-right: 15px;"><?php echo __('Last Name:', 'gdlr-lms'); ?></span>
		<span class="gdlr-lms-tail"><?php echo gdlr_lms_get_user_info($user_id, 'last_name'); ?></span>
	</div>
	<!--<div class="gdlr-lms-profile-info">
		<span class="gdlr-lms-head" style="text-align: right; padding-right: 15px;"><?php echo __('Gender:', 'gdlr-lms'); ?></span>
		<span class="gdlr-lms-tail"><?php 
			$gender = gdlr_lms_get_user_info($user_id, 'gender');
			if( !empty($gender) ){
				echo ($gender == 'm')? __('Male', 'gdlr-lms'): __('Female', 'gdlr-lms'); 
			} 
		?></span>
	</div>-->
	<div class="gdlr-lms-profile-info">
		<span class="gdlr-lms-head" style="text-align: right; padding-right: 15px;"><?php echo __('Email:', 'gdlr-lms'); ?></span>
		<span class="gdlr-lms-tail"><?php echo gdlr_lms_get_user_info($user_id, 'user_email'); ?></span>
	</div>	
</div>
