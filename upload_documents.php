<?php include_once 'include/db_connection.php'; 

if($_POST){
	$user->set_other_info($_POST);	
}
 if($user->is_uploaddoc()!=''){
	 
	$user->redirect('index.php'); 
 }
?>
<?php 

include('include/header.php'); 

$profile_pic='';
$guardian_name='';
$place='';
if(isset($_SESSION['confirm_inf'])){
$profile_pic=$_SESSION['profile_pic'];
$guardian_name=$_SESSION['guardian_name'];
$place=$_SESSION['place'];
$date=$_SESSION['date'];
}	

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
            <li>Personal Details</li>
            <li>Educational Details</li>
            <li>Entrance Exam Information</li>
            <li>Other Information</li>
            <li class="active">Upload Documents</li>
          </ul>
          <div class="form-step tab_container">
          <div class="form-ste6 tab_content" style="display: block;">
            <form action="confirm_information.php" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
			  <!-- <label class="control-label" for="input">Upload Photo</label>-->
                
               <input type="hidden" name="profile_pic" required value="<?php echo $profile_pic;?>">
			   <?php if($profile_pic !=''){ ?> <input type="file" name="profile_img"><img src="<?php echo $profile_pic; ?>" > 
			   <?php }else{ ?> <input type="file" name="profile_img" required> <?php }?>
                <i class="bar"></i> </div>
              <div class="form-group">
                <input type="text" required name="guardian_name" value="<?php echo $guardian_name;?>">
                <label class="control-label" for="input" >Parent's/Guardian Name</label>
                <i class="bar"></i> </div>
              <!--<div class="form-group">
                <input type="text" required>
                <label class="control-label" for="input">Parent's/Guardian Signature</label>
                <i class="bar"></i> </div>-->
              <div class="form-group">
                <input type="text" required name="place" value="<?php echo $place;?>">
                <label class="control-label" for="input">Place</label>
                <i class="bar"></i> </div>
              <div class="form-group">
                <input type="hidden" required name="date" value="<?php echo date('d-m-Y');?>"><?php echo date('d-m-Y');?>
                
                <i class="bar"></i> </div>
				
				 <div class="button-container">
                   <a href="other_information.php"><input type="button" class="btn btn-info" value="Back"></a>
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
