<?php
mysql_connect("localhost","root","");
DEFINE("REG_DB_NAME","ivyga");
//print_r($_POST);
$FBuserDataNotExistsArr=array();
$GmailuserDataNotExistsArr=array();
$cookieDataArr=array();
if(!empty($_POST['regType'])) {
	$regType=$_POST['regType'];
	$roleval=$_POST['req_roleVal'];
	//For FB Click
	if($regType=='FB') {
	  $fbEmail=$_POST['fbemail'];
	  $fbId=$_POST['fbid'];
	  $fbName=$_POST['fb_memname'];
	  $chhEmailExistsSql="SELECT * FROM ".REG_DB_NAME.".tbl_fb_members WHERE fb_user_id='$fbId' or fb_email_id='$fbEmail'";			
	  $chkRs=mysql_query($chhEmailExistsSql) or die(mysql_error());
	  if(@mysql_num_rows($chkRs)!=0) {
		  $chkMainTbl="select * from ".REG_DB_NAME.".tbl_ivyga_members WHERE member_email_id	='$fbEmail'";
		   $chkMainTblRs=mysql_query($chkMainTbl) or die(mysql_error());
		  if(@mysql_num_rows($chkMainTblRs)!=0) {
			    echo "Login Success";
				$chkMainTblRes=mysql_fetch_object($chkMainTblRs);
				$cookieDataArr['email']=$chkMainTblRes->member_email_id;
				$cookieDataArr['uid']=$chkMainTblRes->member_user_id;
				$cookieDataArr['memName']=$chkMainTblRes->member_name;
				$cookieDataArr['uRole']=$chkMainTblRes->member_role;												
		  }else {
			   $FBuserDataNotExistsArr['id']=$fbId;
			   $FBuserDataNotExistsArr['fbEmail']=$fbEmail;
			   $FBuserDataNotExistsArr['fbName']=$fbName;			   			   
		  }
	  }
	  else {
		    $FBuserDataNotExistsArr['id']=$fbId;
			$FBuserDataNotExistsArr['fbEmail']=$fbEmail;
			$FBuserDataNotExistsArr['fbName']=$fbName;		
	  }
	  
	  if(!empty($FBuserDataNotExistsArr)) {
		  $fbEmail=$FBuserDataNotExistsArr['fbEmail'];
		  //Check in FB Table
	   $chhEmailExistsSql="SELECT * FROM ".REG_DB_NAME.".tbl_fb_members WHERE fb_user_id='".$FBuserDataNotExistsArr['id']."' or 
	   fb_email_id='".$fbEmail."'";			
	  $chkRs=mysql_query($chhEmailExistsSql) or die(mysql_error());
	  if(@mysql_num_rows($chkRs)==0) {
		  		  //Check in Main Memberes Table
		 $chkMainSql="SELECT * FROM  ".REG_DB_NAME.".tbl_ivyga_members WHERE member_email_id='".$fbEmail."'";
		    $chkMainRs=mysql_query($chkMainSql) or die(mysql_error());
		  if(@mysql_num_rows($chkMainRs)==0) {
		 $insertSql="INSERT INTO ".REG_DB_NAME.".tbl_fb_members SET fb_user_id='".$FBuserDataNotExistsArr['id']."',fb_email_id='".$FBuserDataNotExistsArr['fbEmail']."',fb_member_name='".mysql_real_escape_string($FBuserDataNotExistsArr['fbName'])."',
		 registered_on=NOW() ";
		 mysql_query($insertSql) or die(mysql_error()."....".$insertSql);
		 
		 
		 $insertSql="INSERT INTO ".REG_DB_NAME.".tbl_ivyga_members SET member_email_id='".$FBuserDataNotExistsArr['fbEmail']."',member_name='".mysql_real_escape_string($FBuserDataNotExistsArr['fbName'])."',
		 registered_on=NOW(),member_role='".$roleval."' ";
		 mysql_query($insertSql) or die(mysql_error()."....".$insertSql);
		 	echo "Register Success";
		  }else {
			echo $fbEmail." Already exists!";  
			exit;
		  }
	  }else {
		  echo "FB ID  Already exists with differenct Email!";
		  exit;
	  }
	  }
	}
	
	
	
   //For Gmail Click
	if($regType=='GMAIL') {
	  $gEmail=$_POST['gemail'];
	  $gId=$_POST['gid'];
	  $gName=$_POST['g_memname'];
	  $chhEmailExistsSql="SELECT * FROM ".REG_DB_NAME.".tbl_gmail_members WHERE gmail_email_id='$gEmail'";			
	  $chkRs=mysql_query($chhEmailExistsSql) or die(mysql_error());
	  if(@mysql_num_rows($chkRs)!=0) {
		  $chkMainTbl="select * from ".REG_DB_NAME.".tbl_ivyga_members WHERE member_email_id	='$gEmail'";
		   $chkMainTblRs=mysql_query($chkMainTbl) or die(mysql_error());
		  if(@mysql_num_rows($chkMainTblRs)!=0) {
			    echo "Login Success";
				
		  }else {
			   $GmailuserDataNotExistsArr['gid']=$gId;
			   $GmailuserDataNotExistsArr['gEmail']=$gEmail;
			   $GmailuserDataNotExistsArr['gName']=$gName;			   			   
		  }
	  }
	  else {
		    $GmailuserDataNotExistsArr['gid']=$gId;
			$GmailuserDataNotExistsArr['gEmail']=$gEmail;
			$GmailuserDataNotExistsArr['gName']=$gName;		
	  }
	  
	  if(!empty($GmailuserDataNotExistsArr)) {
		  $gEmail=$GmailuserDataNotExistsArr['gEmail'];
		  //Check in FB Table
	   $chhEmailExistsSql="SELECT * FROM ".REG_DB_NAME.".tbl_gmail_members WHERE gmail_email_id='".$gEmail."'";			
	  $chkRs=mysql_query($chhEmailExistsSql) or die(mysql_error());
	  if(@mysql_num_rows($chkRs)==0) {
		  		  //Check in Main Memberes Table
		 $chkMainSql="SELECT * FROM  ".REG_DB_NAME.".tbl_ivyga_members WHERE member_email_id='".$gEmail."'";
		    $chkMainRs=mysql_query($chkMainSql) or die(mysql_error());
		  if(@mysql_num_rows($chkMainRs)==0) {
		 $insertSql="INSERT INTO ".REG_DB_NAME.".tbl_gmail_members SET gmail_user_id='".$GmailuserDataNotExistsArr['gid']."',gmail_email_id='".$GmailuserDataNotExistsArr['gEmail']."',gmail_member_name='".mysql_real_escape_string($GmailuserDataNotExistsArr['gName'])."',
		 registered_on=NOW() ";
		 mysql_query($insertSql) or die(mysql_error()."....".$insertSql);
		 
		 
		 $insertSql="INSERT INTO ".REG_DB_NAME.".tbl_ivyga_members SET member_email_id='".$GmailuserDataNotExistsArr['gEmail']."',member_name='".mysql_real_escape_string($GmailuserDataNotExistsArr['gName'])."',
		 registered_on=NOW(),member_role='".$roleval."' ";
		 mysql_query($insertSql) or die(mysql_error()."....".$insertSql);
		  echo "Register Success";
		  }else {
			echo $gEmail." Already exists!";  
		  }
	  }
	  }
	}
}
?>