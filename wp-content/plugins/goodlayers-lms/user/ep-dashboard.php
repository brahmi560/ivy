<?php 
	$user_id = $current_user->data->ID;
?>
<style>
h3{
	margin-bottom: 10px !important;
}
h3 span{
	font-size: 40px !important;
	font-weight: bold;
}
</style>
<h3 class="gdlr-lms-admin-head" ><?php _e('Dashboard', 'gdlr-lms'); ?></h3>
<h3 class="gdlr-lms-admin-head" style="padding-top: 25px;"><?php _e('Profile', 'gdlr-lms'); ?></h3>
<div class="gdlr-lms-profile-info-wrapper">
	<div class="gdlr-lms-profile-info">
		<span class="gdlr-lms-head" style="text-align: right; padding-right: 15px;"><?php echo __('Entreprise Partner ID:', 'gdlr-lms'); ?></span>
	</div>	
	<div class="gdlr-lms-profile-info">
		<span class="gdlr-lms-head" style="text-align: right; padding-right: 15px;"><?php echo __('Registration Date:', 'gdlr-lms'); ?></span>
	</div>
	<div class="gdlr-lms-profile-info">
		<span class="gdlr-lms-head" style="text-align: right; padding-right: 15px;"><?php echo __('First Name:', 'gdlr-lms'); ?></span>
		<span class="gdlr-lms-tail"><?php echo gdlr_lms_get_user_info($user_id, 'first_name'); ?></span>
	</div>
	<div class="gdlr-lms-profile-info">
		<span class="gdlr-lms-head" style="text-align: right; padding-right: 15px;"><?php echo __('Last Name:', 'gdlr-lms'); ?></span>
		<span class="gdlr-lms-tail"><?php echo gdlr_lms_get_user_info($user_id, 'last_name'); ?></span>
	</div>
	<div class="gdlr-lms-profile-info">
		<span class="gdlr-lms-head" style="text-align: right; padding-right: 15px;"><?php echo __('Email:', 'gdlr-lms'); ?></span>
		<span class="gdlr-lms-tail"><?php echo gdlr_lms_get_user_info($user_id, 'user_email'); ?></span>
	</div>	
</div>
<h3 class="gdlr-lms-admin-head" style="padding-top: 25px;"><?php _e('Certifications you promote', 'gdlr-lms'); ?></h3>
<div class="gdlr-lms-profile-info-wrapper">
	<div class="gdlr-lms-profile-info">
		<span class="gdlr-lms-tail"><?php echo __('IT Business Analyst - Practitioner', 'gdlr-lms'); ?></span>
	</div>	
</div>
<h3 class="gdlr-lms-admin-head" style="padding-top: 25px;"><?php _e('Your total Referrals ', 'gdlr-lms'); ?> <span>1</span></h3>