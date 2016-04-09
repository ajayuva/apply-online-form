<?php
class USER
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
 
    public function register($fname,$lname,$uname,$umail,$upass)
    {
       try
       {
           $new_password = password_hash($upass, PASSWORD_DEFAULT);
   
           $stmt = $this->db->prepare("INSERT INTO users(user_name,user_email,user_pass) 
                                                       VALUES(:uname, :umail, :upass)");
              
           $stmt->bindparam(":uname", $uname);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":upass", $new_password);            
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
   public function save_forminformation($data)
    {
		 //print_r($data);die;
       try
       {
          
   
           $stmt = $this->db->prepare("INSERT INTO personal_information_info_tbl(course_type,preference_1,preference_2,preference_3,name,gender,fathers_name,dob,category,permanent_address_line1,permanent_address_line2,permanent_city,permanent_state,permanent_pin,correspondence_address_line1,correspondence_address_line2,correspondence_city,correspondence_state,correspondence_pin,landline_number,mobile_number,guardian_contact_number,email,updated_on,how_did_you_get,application_number,correspondence_country,permanent_country,guardian_name,place,url) 
VALUES(:course_type,:preference_1,:preference_2,:preference_3,:name,:gender,:fathers_name,:dob,:category,:permanent_address_line1,:permanent_address_line2,:permanent_city,:permanent_state,:permanent_pin,:correspondence_address_line1,:correspondence_address_line2,:correspondence_city,:correspondence_state,:correspondence_pin,:landline_number,:mobile_number,:guardian_contact_number,:email,:updated_on,:how_did_you_get,:application_number,:correspondence_country,:permanent_country,:guardian_name,:place,:url)");
              
           $stmt->bindparam(":course_type", $data['course_type']);
           $stmt->bindparam(":preference_1", $data['preference_1']);
		   $stmt->bindparam(":preference_2", $data['preference_2']);
           $stmt->bindparam(":preference_3", $data['preference_3']);
           $stmt->bindparam(":name", $data['name']);
           $stmt->bindparam(":gender", $data['gender']);
           $stmt->bindparam(":fathers_name", $data['fathers_name']);
           $stmt->bindparam(":dob", $data['dob']);
           $stmt->bindparam(":category", $data['category']);
           $stmt->bindparam(":permanent_address_line1", $data['permanent_address_line1']);
           $stmt->bindparam(":permanent_address_line2", $data['permanent_address_line2']);
		    $stmt->bindparam(":permanent_city", $data['permanent_city']);
           $stmt->bindparam(":permanent_state", $data['permanent_state']);	 
			$stmt->bindparam(":permanent_pin", $data['permanent_pin']);
			$stmt->bindparam(":correspondence_address_line1", $data['correspondence_address_line1']);	
			$stmt->bindparam(":correspondence_address_line2", $data['correspondence_address_line2']); 
			$stmt->bindparam(":correspondence_city", $data['correspondence_city']);
			$stmt->bindparam(":correspondence_state", $data['correspondence_state']);
			$stmt->bindparam(":correspondence_pin", $data['correspondence_pin']);
			$stmt->bindparam(":landline_number", $data['landline_number']);
			$stmt->bindparam(":mobile_number", $data['mobile_number']);
			$stmt->bindparam(":guardian_contact_number", $data['guardian_contact_number']);
			$stmt->bindparam(":email", $data['email']);
			$stmt->bindparam(":updated_on", $data['updated_on']);
			$stmt->bindparam(":how_did_you_get", $data['how_did_you_get']);
			$stmt->bindparam(":application_number", $data['application_number']);
			$stmt->bindparam(":correspondence_country", $data['correspondence_country']);
			$stmt->bindparam(":permanent_country", $data['permanent_country']);
			$stmt->bindparam(":guardian_name", $data['guardian_name']);
			$stmt->bindparam(":place", $data['place']);
			$stmt->bindparam(":url", $data['url']);
           $stmt->execute(); 
   
            $id = $this->db->lastInsertId();
			
			$ostmt = $this->db->prepare("INSERT INTO qualification_info_tbl(user_pri_setid,examination_type,degree,board,name_of_college,persent,year_of_passing,subject,updated_on) 
                     VALUES(:user_pri_setid,:examination_type,:degree,:board,:name_of_college,:persent,:year_of_passing,:subject,:updated_on)");
					 $i=0;
					 foreach($data['examination_type'] as $exam){
						 
						 if($data['degree'][$i] !='' || $data['board'][$i] !=''){
							$ostmt->bindparam(":user_pri_setid",  $id);
							$ostmt->bindparam(":examination_type", $exam);
							$ostmt->bindparam(":degree", $data['degree'][$i]);
							$ostmt->bindparam(":board", $data['board'][$i]);
							$ostmt->bindparam(":name_of_college", $data['name_of_college'][$i]);
							$ostmt->bindparam(":persent", $data['persent'][$i]);
							$ostmt->bindparam(":year_of_passing", $data['year_of_passing'][$i]);
                            $ostmt->bindparam(":subject", $data['subject'][$i]); 							
                            $ostmt->bindparam(":updated_on", $data['updated_on']); 
							 
						 }
						 $ostmt->execute();
						$i++;	 							
					 }
					 
					 if($data['appear']==1){
						
						   $name_of_exam=serialize($data['name_of_exam']);
						   $year_of_pass=serialize($data['year_of_apper']);
						   $roll_no=serialize($data['roll_no']);
						   $percent=serialize($data['percent']);
                           $exstmt = $this->db->prepare("INSERT INTO appear_exam_tbl(user_pri_setid,name_of_exam,year_of_pass,roll_no,percent,date) 
                     VALUES(:user_pri_setid,:name_of_exam,:year_of_pass,:roll_no,:percent,:date)");	
                           $exstmt->bindparam(":user_pri_setid",  $id);
							$exstmt->bindparam(":name_of_exam", $name_of_exam);
							$exstmt->bindparam(":year_of_pass", $year_of_pass);
							$exstmt->bindparam(":roll_no", $roll_no);
							$exstmt->bindparam(":percent", $percent);
							$exstmt->bindparam(":date", date('Y-m-d'));	
                            $exstmt->execute();							
					 }
					 
			
			return $data['application_number'];
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    /***** Login function ***/
    public function login($uname,$umail,$upass)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM admin_user WHERE username=:uname OR email_id=:umail LIMIT 1");
          $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($upass, $userRow['password']))
             {
                $_SESSION['user_session'] = $userRow['id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function is_loggedin()
   {
	   
      if(!isset($_SESSION['user_session']))
      {
         return 1;
      }
	  
   }
   
   /** Set program data in session ***/
   public function set_basic_session($data)
   {
	   
      if($data)
      {
         $_SESSION['course_type']=$data['course_type'];
		 $_SESSION['preference_1']=$data['preference_1'];
		 $_SESSION['preference_2']=$data['preference_2'];
		 $_SESSION['preference_3']=$data['preference_3'];
		 $_SESSION['personal_detail']=1;
      }
	  
   }
   
   /** Set personal data in session ***/
   public function set_personal_session($data)
   {
	   
      if($data)
      {
			$_SESSION['gender']=$data['gender'];
			$_SESSION['name']=$data['name'];
			$_SESSION['dob']=$data['dob'];
			$_SESSION['fathers_name']=$data['fathers_name'];
			$_SESSION['category']=$data['category'];
			$_SESSION['permanent_address_line1']=$data['permanent_address_line1'];
			$_SESSION['permanent_address_line2']=$data['permanent_address_line2'];
			$_SESSION['permanent_city']=$data['permanent_city'];
			$_SESSION['permanent_state']=$data['permanent_state'];
			$_SESSION['permanent_country']=$data['permanent_country'];
			$_SESSION['permanent_pin']=$data['permanent_pin'];
			$_SESSION['if_same']=@$data['if_same'];
			$_SESSION['correspondence_address_line1']=$data['correspondence_address_line1'];
			$_SESSION['correspondence_address_line2']=$data['correspondence_address_line2'];
			$_SESSION['correspondence_city']=$data['correspondence_city'];
			$_SESSION['correspondence_state']=$data['correspondence_state'];
			$_SESSION['correspondence_country']=$data['correspondence_country'];
			$_SESSION['correspondence_pin']=$data['correspondence_pin'];
			$_SESSION['guardian_contact_number']=$data['guardian_contact_number'];
			$_SESSION['landline_number']=$data['landline_number'];
			$_SESSION['mobile_number']=$data['mobile_number'];
			$_SESSION['email']=$data['email'];
		    $_SESSION['educational_detail']=1;
      }
	  
   }
   
    /** Set educational data in session ***/
   public function set_educational_session($data)
   {
	   
      if($data)
      {
			$_SESSION['examination_type']=$data['examination_type'];
			$_SESSION['degree']=$data['degree'];
			$_SESSION['board']=$data['board'];
			$_SESSION['name_of_college']=$data['name_of_college'];
			$_SESSION['persent']=$data['persent'];
			$_SESSION['year_of_passing']=$data['year_of_passing'];
			$_SESSION['subject']=$data['subject'];
		    $_SESSION['family_info']=1;
      }
	  
   }
   
    /** Set educational data in session ***/
   public function set_exam_session($data)
   {
	   
      if($data)
      {
			$_SESSION['appear']=$data['appear'];
			$_SESSION['name_of_exam']=$data['name_of_exam'];
			$_SESSION['year_of_apper']=$data['year_of_apper'];
			$_SESSION['roll_no']=$data['roll_no'];
			$_SESSION['percent']=$data['percent'];
		    $_SESSION['other_info']=1;
      }
	  
   }
   
    /** Set educational data in session ***/
   public function set_other_info($data)
   {
	   
      if($data)
      {
			$_SESSION['how_did_you_get']=$data['how_did_you_get'];
		    $_SESSION['upload_doc']=1;
      }
	  
   }
   
    /** Set educational data in session ***/
   public function set_upload_info($data)
   {
	   
      if($data)
      {
		  $profile_pic=$data['profile_pic'];
		  if(isset($_FILES['profile_img']) && $_FILES['profile_img']['error'] == 0){
					$errors= array($_FILES);
					//print_r($_FILES['profile_img']);
					$file_name = time().$_FILES['profile_img']['name'];
					$file_size =$_FILES['profile_img']['size'];
					$file_tmp =$_FILES['profile_img']['tmp_name'];
					$file_type=$_FILES['profile_img']['type'];
					$file_ext=strtolower(end(explode('.',$_FILES['profile_img']['name'])));
					
                    $target_dir=$_SERVER['DOCUMENT_ROOT'].'/apply-online-form/include/profile_pic/'.$file_name;
					if( move_uploaded_file($file_tmp,$target_dir)){
					 $profile_pic="http://192.168.100.59/apply-online-form/include/profile_pic/".$file_name;
					}
			}
			$_SESSION['profile_pic']=$profile_pic;
			$_SESSION['guardian_name']=$data['guardian_name'];
			$_SESSION['place']=$data['place'];
			$_SESSION['date']=$data['date'];
		    $_SESSION['confirm_inf']=1;
      }
	  
   }
   
    /** Set educational data in session ***/
   public function set_data_array()
   {
        $application_no='';	   
	   try
       {
          $stmt = $this->db->prepare("SELECT user_pri_setid FROM personal_information_info_tbl order by user_pri_setid desc LIMIT 1");
          $stmt->execute();
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             $id=$userRow['user_pri_setid']+1;
			 $application_no='MU/'.date('m/Y').'/'.$id;
          }else{
			$application_no='MU/'.date('m/Y').'/1';  
		  }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
		 
		 $how_did_you_get='';
	     if(!empty($_SESSION['how_did_you_get'])){
			 
		      $how_did_you_get=implode(',',$_SESSION['how_did_you_get']);	 
		 }
         $date=date('Y-m-d',strtotime($_SESSION['date'])); 
	     $dob=date('Y-m-d',strtotime($_SESSION['dob']));
		 
		 $data=array('course_type'=>$_SESSION['course_type'],'preference_1'=>$_SESSION['preference_1'],'preference_2'=>$_SESSION['preference_2'],'preference_3'=>$_SESSION['preference_3'],'gender'=>$_SESSION['gender'],'name'=>$_SESSION['name'],'dob'=>$dob,'fathers_name'=>$_SESSION['fathers_name'],'category'=>$_SESSION['category'],'permanent_address_line1'=>$_SESSION['permanent_address_line1'],'permanent_address_line2'=>$_SESSION['permanent_address_line2'],'permanent_city'=>$_SESSION['permanent_city'],'permanent_state'=>$_SESSION['permanent_state'],'permanent_country'=>$_SESSION['permanent_country'],'permanent_pin'=>$_SESSION['permanent_pin'],'correspondence_address_line1'=>$_SESSION['correspondence_address_line1'],'correspondence_address_line2'=>$_SESSION['correspondence_address_line2'],'correspondence_city'=>$_SESSION['correspondence_city'],'correspondence_state'=>$_SESSION['correspondence_state'],'correspondence_country'=>$_SESSION['correspondence_country'],'correspondence_pin'=>$_SESSION['correspondence_pin'],'guardian_contact_number'=>$_SESSION['guardian_contact_number'],'landline_number'=>$_SESSION['landline_number'],'mobile_number'=>$_SESSION['mobile_number'],'email'=>$_SESSION['email'],'examination_type'=>$_SESSION['examination_type'],'degree'=>$_SESSION['degree'],'board'=>$_SESSION['board'],'name_of_college'=>$_SESSION['name_of_college'],'persent'=>$_SESSION['persent'],'year_of_passing'=>$_SESSION['year_of_passing'],'subject'=>$_SESSION['subject'],'appear'=>$_SESSION['appear'],'name_of_exam'=>$_SESSION['name_of_exam'],'year_of_apper'=>$_SESSION['year_of_apper'],'roll_no'=>$_SESSION['roll_no'],'percent'=>$_SESSION['percent'],'how_did_you_get'=>$how_did_you_get,'url'=>$_SESSION['profile_pic'],'guardian_name'=>$_SESSION['guardian_name'],'place'=>$_SESSION['place'],'date'=>$date,'updated_on'=>date('Y-m-d'),'application_number'=>$application_no);
	     return $data;
	   
   }
   
   
   public function is_personaldetail()
   {
	   
      if(!isset($_SESSION['personal_detail']))
      {
         return 1;
      }
	  
   }
   
   public function is_educationaldetail()
   {
	   
      if(!isset($_SESSION['educational_detail']))
      {
         return 1;
      }
	  
   }
   
   public function is_familyinfo()
   {
	   
      if(!isset($_SESSION['family_info']))
      {
         return 1;
      }
	  
   }
 
   public function is_otherinfo()
   {
	   
      if(!isset($_SESSION['other_info']))
      {
         return 1;
      }
	  
   }
   
   public function is_uploaddoc()
   {
	   
      if(!isset($_SESSION['upload_doc']))
      {
         return 1;
      }
	  
   }
   
   public function is_confirm()
   {
	   
      if(!isset($_SESSION['confirm_inf']))
      {
         return 1;
      }
	  
   }
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
   
   public function get_userinformation($user_id=null){
	   
	 try
       {
          $stmt = $this->db->prepare("SELECT * FROM personal_information_info_tbl where user_pri_setid = $user_id");
          $stmt->execute();
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             return $userRow;
		  }else{
			  return false;
		  }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }  
   }
   
   public function get_qualification($user_id=null){
	   
	 try
       {
          $stmt = $this->db->prepare("SELECT * FROM qualification_info_tbl where user_pri_setid = $user_id");
          $stmt->execute();
          $userRow=$stmt->fetchall(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             return $userRow;
		  }else{
			  return false;
		  }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }  
   }
}
?>