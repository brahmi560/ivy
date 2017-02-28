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
	$data['user_id'] = $_POST['selecteduser'];
	$data['restrict_certification'] = 0;
	$data['restrict_payment'] = 0;
	$data['restrict_course_meterial'] = 0;
	$data['restrict_online_exam_enrol'] = 0;
	$user = wp_get_current_user();
	$data['updatedBy'] = $user->ID;
	
	$table = 'wp_488a9xj6dq_control_panel';
	
	if($_POST['restrictcertification'] != '')
	{
		$data['restrict_certification'] = 1;
	}
	if($_POST['restrictpayment'] != '')
	{
		$data['restrict_payment'] = 1;
	}
	if($_POST['restrictcoursemeterial'] != '')
	{
		$data['restrict_course_meterial'] = 1;
	}
	if($_POST['restrictonlineexamenrol'] != '')
	{
		$data['restrict_online_exam_enrol'] = 1;
	}
	global $wpdb;
	$alreadyexistuser = $wpdb->get_results( 'SELECT * FROM  wp_488a9xj6dq_control_panel WHERE user_id="'.$data['user_id'].'"', OBJECT );
	if(empty($alreadyexistuser))
	{
		$data['created_date'] = date("Y-m-d H:i:s");
		$data['updated_date'] = date("Y-m-d H:i:s");
        $results = $wpdb->insert($table,$data);
	}
	else {
		$data['updated_date'] = date("Y-m-d H:i:s");
		$where = array();
		$where['user_id'] = $data['user_id'];
        $results = $wpdb->update($table,$data,$where);
	}
	print_r($results);exit();

			
			?>
			
			
			
			
						

					
		
