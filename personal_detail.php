<?php include_once 'include/db_connection.php'; 
if($_POST){
	$user->set_basic_session($_POST);	
}

$gender='';
$name='';
$dob='';
$fathers_name='';
$category='';
$permanent_address_line1='';
$permanent_address_line2='';
$permanent_city='';
$permanent_state='';
$permanent_country='';
$permanent_pin='';
$if_same='';
$correspondence_address_line1='';
$correspondence_address_line2='';
$correspondence_city='';
$correspondence_state='';
$correspondence_country='';
$correspondence_pin='';
$guardian_contact_number='';
$landline_number='';
$mobile_number='';
$email='';
if(isset($_SESSION['educational_detail'])){
	
$gender=	$_SESSION['gender'];
$name=	$_SESSION['name'];
$fathers_name=	$_SESSION['fathers_name'];
$dob=	$_SESSION['dob'];
$category=	$_SESSION['category'];
$permanent_address_line1=	$_SESSION['permanent_address_line1'];
$permanent_address_line2=	$_SESSION['permanent_address_line2'];
$permanent_city=	$_SESSION['permanent_city'];
$permanent_state=	$_SESSION['permanent_state'];
$permanent_country=	$_SESSION['permanent_country'];
$permanent_pin=	$_SESSION['permanent_pin'];
$if_same=	$_SESSION['if_same'];
$correspondence_address_line1=	$_SESSION['correspondence_address_line1'];
$correspondence_address_line2=	$_SESSION['correspondence_address_line2'];
$correspondence_city=	$_SESSION['correspondence_city'];
$correspondence_state=	$_SESSION['correspondence_state'];
$correspondence_country=	$_SESSION['correspondence_country'];
$correspondence_pin=	$_SESSION['correspondence_pin'];
$guardian_contact_number=	$_SESSION['guardian_contact_number'];
$landline_number=	$_SESSION['landline_number'];
$mobile_number=	$_SESSION['mobile_number'];
$email=	$_SESSION['email'];
}
 if($user->is_personaldetail()!=''){
	 
	$user->redirect('index.php'); 
 }
 
?>
<?php 
include('include/header.php'); 
//echo $user->is_loggedin();
$categorylist=array('General'=>'General','OBC'=>'OBC','SC'=>'SC','ST'=>'ST','Jain'=>'Jain');
?>
                  <!-------------------text  end------------->
<div class="container-fluid mid-content no-gutter dk-grey Course_Listing">
  <div class="row no-gutter">
    <div class="container">
      <div class="col-md-12 left-align-content no-gutter">
        <div class="Course_ListingPage">
          <ul class="tabs">
            <h4 class="nu-heading">Online Application</h4>
            <li>Basic Information</li>
            <li class="active">Personal Details</li>
            <li>Educational Details</li>
            <li>Entrance Exam Information</li>
            <li>Other Information</li>
            <li>Upload Documents</li>
          </ul>
          <div class="form-step tab_container">
            <div class="form-step2 tab_content" style="display: block;">
              <form action="educational_detail.php" method="post">
                <h3 class="nu-text">Personal Information</h3>
                <div class="form-group"> 
                  <!-- <label for="select" class="control-label">Diploma Programmes</label>--> 
                  <!-- <i class="bar"></i> -->
                  <div class="form-group">
					 <select name="gender">
                    <option value="M"  <?php if($gender=='M'){?> selected="selected" <?php } ?>>Male</option>
                    <option value="F" <?php if($gender=='F'){?> selected="selected" <?php } ?>>Female</option>
                  </select
                    <label for="input"  class="control-label">Gender</label>
                    <i class="bar"></i> </div>
                  <div class="form-group">
                    <input type="text" name="name" required value="<?php echo $name;?>"/>
                    <label for="input" class="control-label">Name of Applicant (As mentioned in Matriculation Certificate)</label>
                    <i class="bar"></i> </div>
                  <div class="form-group">
                    <input type="text" name="fathers_name" value="<?php echo $fathers_name;?>" required/>
                    <label for="input" class="control-label">Father's Name</label>
                    <i class="bar"></i> </div>
                  <div class="form-group">
                    <input type="text" name="dob" value="<?php echo $dob;?>" required/>
                    <label for="input" class="control-label">Date of Birth</label>
                    <i class="bar"></i> </div>
                </div>
                <div class="form-group">
                  <select name="category">
				   <?php foreach($categorylist as $ckey=>$cvalue){ ?>
					 <option value="<?php echo $ckey;?>" <?php if($ckey==$category){?> selected="selected" <?php } ?>><?php echo $cvalue;?></option>
					<?php } ?>
                  </select>
                  <label for="select" class="control-label">Category</label>
                  <i class="bar"></i> </div>
                  <div class="nu-padding col-md-12"><strong>Permanent Address</strong></div>
                <div class="nu-padding col-md-12">
                  <div class="nu-padding col-md-12">
                    <div class="form-group">
                      <input type="text" name="permanent_address_line1" value="<?php echo $permanent_address_line1;?>" required />
                      <label for="input" class="control-label"></label>
                      <i class="bar"></i>
                       <input type="text" name="permanent_address_line2" value="<?php echo $permanent_address_line2;?>" required/>
                      <label for="input" class="control-label"></label>
                      <i class="bar"></i>
                      
                       </div>
                    <div class="form-group">
                      <input type="text" name="permanent_city" value="<?php echo $permanent_city;?>" required/>
                      <label for="input" class="control-label">City</label>
                      <i class="bar"></i> </div>
                    <div class="form-group">
                      <input type="text" name="permanent_state" value="<?php echo $permanent_state;?>" required/>
                      <label for="input" class="control-label">State</label>
                      <i class="bar"></i> </div>
					<div class="form-group">
                      <input type="text" name="permanent_country" value="<?php echo $permanent_country;?>" required/>
                      <label for="input" class="control-label">Country</label>
                      <i class="bar"></i> </div>
                    <div class="form-group">
                      <input type="text" name="permanent_pin" value="<?php echo $permanent_pin;?>" required/>
                      <label for="input" class="control-label">Pin Code</label>
                      <i class="bar"></i> </div>
                  
                  </div>
                  <div class="nu-padding col-md-12" >
                  <div class="nu-padding nu-padding3 col-md-12">
                  <label class="checkbox-inline">
                    <input type="checkbox" class="nu-check1" id="if_same" name="if_same" value="1" <?php if($if_same==1){?> checked="checked" <?php } ?> >
                    If same (Check This) </label>
                </div>
                   <div class="nu-padding col-md-12"><strong>Correspondence Address(If Different)</strong></div>
                    <div class="form-group">
                      <input type="text" name="correspondence_address_line1" value="<?php echo $correspondence_address_line1;?>" required/>
                      <label for="input" class="control-label"></label>
                      <i class="bar"></i>
                       <input type="text" name="correspondence_address_line2" value="<?php echo $correspondence_address_line2;?>" required/>
                      <label for="input" class="control-label"></label>
                      <i class="bar"></i>
                      </div>
                    <div class="form-group">
                      <input type="text" name="correspondence_city" value="<?php echo $correspondence_city;?>" required/>
                      <label for="input" class="control-label">City</label>
                      <i class="bar"></i> </div>
                    <div class="form-group">
                      <input type="text" name="correspondence_state" value="<?php echo $correspondence_state;?>" required/>
                      <label for="input" class="control-label">State</label>
                      <i class="bar"></i> </div>
					<div class="form-group">
                      <input type="text" name="correspondence_country" value="<?php echo $correspondence_country;?>" required/>
                      <label for="input" class="control-label">Country</label>
                      <i class="bar"></i> </div>
                    <div class="form-group">
                      <input type="text" name="correspondence_pin" value="<?php echo $correspondence_pin;?>" required/>
                      <label for="input" class="control-label">Pin Code</label>
                      <i class="bar"></i> </div>
                    <div class="form-group">
                      <input type="text" name="guardian_contact_number" value="<?php echo $guardian_contact_number;?>" required/>
                      <label for="input" class="control-label">GuardianÇontact No.</label>
                      <i class="bar"></i> </div>
                     
                      <div class="form-group">
                      <input type="text" name="landline_number" value="<?php echo $landline_number;?>" required/>
                      <label for="input" class="control-label">Landline No.</label>
                      <i class="bar"></i> </div>
                    <div class="form-group">
                      <input type="text" name="mobile_number" value="<?php echo $mobile_number;?>" required/>
                      <label for="input" class="control-label">Mobile No.</label>
                      <i class="bar"></i> </div>
                    <div class="form-group">
                      <input type="text" name="email" value="<?php echo $email;?>" required/>
                      <label for="input" class="control-label">Email Address</label>
                      <i class="bar"></i> </div>
                      
                      
                  </div>
                </div>
				<div class="button-container">
                  <a href="index.php"><input type="button" class="btn btn-info" value="Back"></a>
                  <input type="submit" class="btn btn-info" value="Next">
              </div>
              </form>
              
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include('include/footer.php'); ?>
