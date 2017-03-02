<?php 
	$error = array();
	if( !empty($_POST['action']) && $_POST['action'] == 'create-new-user' ){
		if( empty($_POST['username']) || empty($_POST['password']) || empty($_POST['re-password']) ||
			empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['gender'])  || empty($_POST['email'])  ){
			
			$error[] = __('Please enter all required fields.', 'gdlr-lms');
		}
		
		if( $_POST['password'] != $_POST['re-password'] ){
			$error[] = __('Password and password confirmation do not match.', 'gdlr-lms');
		}
		
		if( username_exists($_POST['username']) ){
			$_POST['username'] = '';
			$error[] = __('Username already exists, please try again with another name.', 'gdlr-lms');
		}
		
		if( email_exists($_POST['email']) ){
			$_POST['email'] = '';
			$error[] = __('Email already exists, Please try again with new email address.', 'gdlr-lms');
		}
		
		if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
			$_POST['email'] = '';
			$error[] = __('Email is not valid.', 'gdlr-lms');
		}
		
		if( empty($error) ){
			$user_id = wp_insert_user(array(
				'user_login' => $_POST['username'], 
				'user_pass' => $_POST['password'], 
				'user_email' => $_POST['email'],
				'role' => 'student'
			));
			
			if( is_wp_error($user_id) ){
				$error[] = __('Please only fill latin characters in username and password fields.', 'gdlr-lms');
			}else{
				if( !empty($_POST['first_name']) ){
					update_user_meta($user_id, 'first_name', esc_attr($_POST['first_name']));
				}
				if( !empty($_POST['last_name']) ){
					update_user_meta($user_id, 'last_name', esc_attr($_POST['last_name']));
				}
				if( !empty($_POST['gender']) ){
					update_user_meta($user_id, 'gender', esc_attr($_POST['gender']));
					add_role( esc_attr($_POST['gender']), esc_attr($_POST['gender']));
				}
				if( !empty($_POST['birth_date']) ){
					update_user_meta($user_id, 'birth-date', esc_attr($_POST['birth_date']));
				}
				if( !empty($_POST['phone']) ){
					update_user_meta($user_id, 'phone', esc_attr($_POST['phone']));
				}
				if( !empty($_POST['address']) ){
					update_user_meta($user_id, 'address', $_POST['address']);
				}	
				
				wp_new_user_notification($user_id, $_POST['password']);
				$userdata = array();
				$userwhere = array();
				$userwhere['ID'] = $user_id;
				$userdata['user_status'] = 1;
				global $wpdb;
				$wpdb->update('wp_488a9xj6dq_users',$userdata,$userwhere);
				
				$redirect_url = empty($_GET['register'])? home_url(): $_GET['register'];
				// $redirect = esc_url(add_query_arg('login', $redirect_url, home_url())); 
				// wp_redirect($redirect);
				// exit;
				
?>
<form method="post" action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" id="login-redirect">
    <input type="hidden" name="log" value="<?php echo $_POST['username']; ?>" />
    <input type="hidden" name="pwd" value="<?php echo $_POST['password']; ?>" />
	<input type="hidden" name="rememberme"  value="forever" />
	<input type="hidden" name="redirect_to" value="<?php echo $redirect_url; ?>" />
</form>

<script type="text/javascript">
   document.getElementById("login-redirect").submit();
</script>
<?php				
				
			}
		}
	}
	get_header(); 
?>
<div id="primary" class="content-area gdlr-lms-primary-wrapper">
<div id="content" class="site-content" role="main">
<?php
	if( function_exists('gdlr_lms_get_header') && !empty($gdlr_lms_option['show-header']) && $gdlr_lms_option['show-header'] == 'enable' ){
		gdlr_lms_get_header();
	}
?>
	<div class="gdlr-lms-content">
		<div class="gdlr-lms-container gdlr-lms-container">
			<div class="gdlr-lms-item">
				<?php
					if( !empty($error) ){
						echo '<div class="gdlr-lms-error">' . implode("<br />", $error) . '</div>'; 
					}		
				?>
				<form class="gdlr-lms-form" method="post" action="">
					<p class="gdlr-lms-half-left">
						<label><?php _e('Username *', 'gdlr-lms'); ?></label>
						<input type="text" name="username" value="<?php echo isset($_POST['username'])? $_POST['username']: ''; ?>" />
					</p>
					<div class="clear"></div>
					<p class="gdlr-lms-half-left">
						<label><?php _e('Password *', 'gdlr-lms'); ?></label>
						<input type="password" name="password" />
					</p>
					<p class="gdlr-lms-half-right">
						 <label><?php _e('Re Password *', 'gdlr-lms'); ?></label>
						 <input type="password" name="re-password" />
					</p>
					<div class="clear"></div>
					<p class="gdlr-lms-half-left">
						<label><?php _e('First Name to be displayed on Certificate *', 'gdlr-lms'); ?></label>
						<input type="text" name="first_name" value="<?php echo isset($_POST['first_name'])? $_POST['first_name']: ''; ?>" />
					</p>
					<p class="gdlr-lms-half-right">
						 <label><?php _e('Last Name to be displayed on Certificate *', 'gdlr-lms'); ?></label>
						 <input type="text" name="last_name" value="<?php echo isset($_POST['last_name'])? $_POST['last_name']: ''; ?>" />
					</p>
					<div class="clear"></div>		
					<p class="gdlr-lms-half-left">
						<label><?php _e('User Role *', 'gdlr-lms'); ?></label>
						<span class="gdlr-lms-combobox">
							<select name="gender" id="gender">
								<option selected disabled>Select your role</option>
								<option value="student" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'student') echo 'selected'; ?> ><?php _e('Aspirant', 'gdlr-lms'); ?></option>
								<option value="entreprise-partner" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'entreprise-partner') echo 'selected'; ?> ><?php _e('Entreprise Partner', 'gdlr-lms'); ?></option>
								<option value="independent-partner" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'independent-partner') echo 'selected'; ?> ><?php _e('Independent Partner', 'gdlr-lms'); ?></option>
								<option value="knowledge-partner" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'knowledge-partner') echo 'selected'; ?> ><?php _e('Knowledge Partner', 'gdlr-lms'); ?></option>
							</select>
						</span>					
					</p>
						
					<p class="gdlr-lms-half-left">
						<label><?php _e('Email *', 'gdlr-lms'); ?></label>
						<input type="text" name="email" id="email" value="<?php echo isset($_POST['email'])? $_POST['email']: ''; ?>" />
					</p>	
					
<script>
var dropdown = document.getElementById("gender");
var roleselectvalue;
dropdown.onchange = function(event){
   if(dropdown.value=="student"){
	 alert("selected aspirant");
	 roleselectvalue = "a:1:{s:7:\"student\";b:1;}";
	 alert(roleselectvalue);
   }else{
	   if(dropdown.value=="entreprise-partner"){
		 alert("selected Entreprise Partner")
		 roleselectvalue = "a:1:{s:18:\"entreprise-partner\";b:1;}";
		 alert(roleselectvalue);
	   }else{
		   if(dropdown.value=="independent-partner"){
			 alert("selected Independent Partner")
			 roleselectvalue = "a:1:{s:19:\"independent-partner\";b:1;}";
			 alert(roleselectvalue);
		   }else{
			   if(dropdown.value=="knowledge-partner"){
				 alert("selected Knowledge Partner")
				 roleselectvalue = "a:1:{s:17:\"knowledge-partner\";b:1;}";
				 alert(roleselectvalue);
			   }else{
				   alert("No role selected");
			   }
			}
		}
	}
}
</script>	
<?php
	//$userrolegot = "SELECT id FROM wp_488a9xj6dq_users WHERE user_login='newivyga'";
	//echo '<script language="javascript">alert("'.$userrolegot.'"); </script>';
?>	
		
					<p>
						<input type="hidden" name="action" value="create-new-user" />
						<input type="submit" class="gdlr-lms-button" value="<?php _e('Create an account', 'gdlr-lms'); ?>" />
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<?php 
if( !empty($gdlr_lms_option['show-sidebar']) && $gdlr_lms_option['show-sidebar'] == 'enable' ){ 
	get_sidebar( 'content' );
	get_sidebar();
}

get_footer(); ?>