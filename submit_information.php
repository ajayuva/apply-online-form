<?php
include_once 'include/db_connection.php'; 


 if($user->is_confirm()!=''){
	 
	$user->redirect('index.php'); 
 }
 if($_POST){
	$data=$user->set_data_array();
   //print_r($data);	
   
   if($applictionno=$user->save_forminformation($data)){
	 
	echo 'Your information saved successfully.Your application no is '.$applictionno;die;
     }
}
 session_destroy();
?>