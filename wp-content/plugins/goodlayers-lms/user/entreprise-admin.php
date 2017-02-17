<div class="gdlr-lms-admin-head">
	<div class="gdlr-lms-admin-head-thumbnail">
		<?php 
			$author_image_id = get_user_meta($current_user->data->ID, 'author-image', true);
			if( empty($author_image_id) ){
				echo get_avatar($current_user->data->ID, 70); 
			}else{
				$image_url = wp_get_attachment_image_src($author_image_id, 'thumbnail');
				if( !empty($image_url) ){
					echo '<img alt="" src="' . $image_url[0] . '" width="' . $image_url[1] . '" height="' . $image_url[2] . '" />';
				}
			}
		
		?>
	</div>
	<div class="gdlr-lms-admin-head-content">
		<span class="gdlr-lms-welcome"><?php _e('Welcome', 'gdlr-lms'); ?></span>
		<span class="gdlr-lms-name"><?php echo $current_user->data->display_name; ?></span>
		<!--<span class="gdlr-lms-role"><?php _e('Entreprise Partner', 'gdlr-lms'); ?></span>-->
	</div>
	<div class="clear"></div>
</div>
<ul class="gdlr-lms-admin-list">
	<li><a href="<?php echo esc_url(add_query_arg('type', 'ep-dashboard')); ?>" ><?php _e('Dashboard', 'gdlr-lms'); ?></a></li>
	<li><a href="<?php echo esc_url(add_query_arg('type', 'ep-choose-certifications')); ?>" ><?php _e('Choose Certifications you can promote', 'gdlr-lms'); ?></a></li>
	<li><a href="<?php echo esc_url(add_query_arg('type', 'ep-change-your-spoc')); ?>" ><?php _e('Change your SPOC', 'gdlr-lms'); ?></a></li>
	<li><a href="<?php echo esc_url(add_query_arg('type', 'ep-change-your-bank-details')); ?>" ><?php _e('Change your Bank Details', 'gdlr-lms'); ?></a></li>
	<li><a href="<?php echo esc_url(add_query_arg('type', 'ep-buy-vouchers')); ?>" ><?php _e('Buy Vouchers', 'gdlr-lms'); ?></a></li>
	<li><a href="<?php echo esc_url(add_query_arg('type', 'ep-month-wise-referral-details')); ?>" ><?php _e('Month Wise Referral Details', 'gdlr-lms'); ?></a></li>
	<li><a href="<?php echo esc_url(add_query_arg('type', 'ep-track-your-referral')); ?>" ><?php _e('Track your Referral', 'gdlr-lms'); ?></a></li>
	<li><a href="<?php echo esc_url(add_query_arg('type', 'ep-contact-us')); ?>" ><?php _e('Contact Us', 'gdlr-lms'); ?></a></li>
</ul>
<div class="gdlr-lms-logout">
	<a href="<?php echo wp_logout_url(get_home_url()); ?>"><?php _e('Logout', 'gdlr-lms'); ?></a>
</div>