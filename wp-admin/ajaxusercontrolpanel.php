<?php
/**
 * Dashboard Administration Screen
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Load WordPress Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );


?>

			
			<?php
			
			$data = array();
	$userid = $_GET['selecteduser'];
	
	global $wpdb;
	$alreadyexistuser = $wpdb->get_results( 'SELECT * FROM  wp_488a9xj6dq_control_panel WHERE user_id="'.$userid.'"', OBJECT );
	if(empty($alreadyexistuser))
	{
		$userid['restrict_certification'] = 0;
		$data['restrict_payment'] = 0;
		$data['restrict_course_meterial'] = 0;
		$data['restrict_online_exam_enrol'] = 0;
	}
	else {
		$data['restrict_certification'] = $alreadyexistuser[0]->restrict_certification;
		$data['restrict_payment'] = $alreadyexistuser[0]->restrict_payment;
		$data['restrict_course_meterial'] = $alreadyexistuser[0]->restrict_course_meterial;
		$data['restrict_online_exam_enrol'] = $alreadyexistuser[0]->restrict_online_exam_enrol;
	}
	return print_r(json_encode($data));exit();

			
			?>
			
			
			
			
						

					
		
