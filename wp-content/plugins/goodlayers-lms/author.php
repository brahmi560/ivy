<?php include('user/author-update.php');
get_header(); 
if( $current_user->roles[0] == 'student' ){
	$type = empty($_GET['type'])? 'as-badge-certificate': $_GET['type'];
}else{
	if( $current_user->roles[0] == 'entreprise-partner' ){
		$type = empty($_GET['type'])? 'ep-dashboard': $_GET['type'];
	}else{
		if( $current_user->roles[0] == 'independent-partner' ){
			$type = empty($_GET['type'])? 'ip-dashboard': $_GET['type'];
		}else{
			if( $current_user->roles[0] == 'knowledge-partner' ){
				$type = empty($_GET['type'])? 'kp-dashboard': $_GET['type'];
			}else{
				$type = empty($_GET['type'])? 'no-dashboard': $_GET['type'];
			}
		}
	}
}
?>
<div id="primary" class="content-area gdlr-lms-primary-wrapper">
<div id="content" class="site-content" role="main">
	<div class="gdlr-lms-content gdlr-page-<?php echo $type; ?>">
		<div class="gdlr-lms-container gdlr-lms-container">
			<div class="gdlr-lms-item">
				<div class="gdlr-lms-admin-bar"><?php 
					if( $current_user->roles[0] == 'student' ){
						include('user/aspirant-admin.php'); 
					}else{
						if( $current_user->roles[0] == 'entreprise-partner' ){
						include('user/entreprise-admin.php'); 
						}else{
							if( $current_user->roles[0] == 'independent-partner' ){
								include('user/independent-admin.php'); 
							}else{
								if( $current_user->roles[0] == 'knowledge-partner' ){
									include('user/knowledge-admin.php'); 
								}else{
									include('user/no-admin.php'); 
								}
							}
						}
					}
				?></div>
					
				<div class="gdlr-lms-admin-content">	
				<?php	
					if( !empty($success) ){
						echo '<div class="gdlr-lms-success">' . implode("<br />", $success) . '</div>'; 
					}else if( !empty($error) ){
						echo '<div class="gdlr-lms-error">' . implode("<br />", $error) . '</div>'; 
					}		
					include('user/' . $type . '.php');
				?>
				</div>
				<div class="clear"></div>
			</div><!-- gdlr-lms-item -->
		</div><!-- gdlr-lms-container -->
	</div><!-- gdlr-lms-content -->
</div>
</div>
<?php 
if( !empty($gdlr_lms_option['show-sidebar']) && $gdlr_lms_option['show-sidebar'] == 'enable' ){ 
	get_sidebar( 'content' );
	get_sidebar();
}

get_footer(); ?>