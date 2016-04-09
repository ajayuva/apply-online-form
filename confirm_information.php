<?php include_once 'include/db_connection.php'; 

if($_POST){
	$user->set_upload_info($_POST);	
}
 if($user->is_confirm()!=''){
	 
	$user->redirect('index.php'); 
	  //ajay dvfdbvf fdfvfdbgfb
 }
?>
<?php include('include/header.php'); ?>
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
            <li>Upload Documents</li>
			<li class="active">Confirm Information</li>
          </ul>
          <div class="form-step tab_container">
          <div class="form-ste6 tab_content" style="display: block;">
            <form action="submit_information.php" method="post">
              
              <h3 class="nu-text">Declaration</h3>
              <p><input type="checkbox" name="accecpt" required> I hereby declare that i have carefully read the instruction and all the information furnished by me are correct:</p>
				 <div class="button-container">
                   <a href="upload_documents.php"><input type="button" class="btn btn-info" value="Back"></a>
                  <input type="submit" class="btn btn-info" value="Submit">
            
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
