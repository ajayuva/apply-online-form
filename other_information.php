<?php include_once 'include/db_connection.php'; 

if($_POST){
	$user->set_exam_session($_POST);	
}
 if($user->is_otherinfo()!=''){
	 
	$user->redirect('index.php'); 
 }
?>
<?php include('include/header.php'); 
$how_did_you_get=array();
if(isset($_SESSION['upload_doc'])){
$how_did_you_get=$_SESSION['how_did_you_get'];
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
            <li class="active">Other Information</li>
            <li>Upload Documents</li>
          </ul>
          <div class="form-step tab_container">
           
            <div class="form-step5 tab_content" style="display: block;">
              <form action="upload_documents.php" method="post">
              <h3 class="nu-text">How did you get to know about us:</h3>
              <div class="form-check form-group">
              <p class="control-label" style="margin-top: -3%;">Newspaper:</p>
              
                <label class="checkbox-inline">
                  <input class="nu-check" type="checkbox" name="how_did_you_get[]" value="1" <?php if(in_array(1,$how_did_you_get)){?> checked="checked" <?php } ?>>
                  Danik Jagran </label>
                <label class="checkbox-inline">
                  <input class="nu-check" type="checkbox" name="how_did_you_get[]" value="2" <?php if(in_array(2,$how_did_you_get)){?> checked="checked" <?php } ?>>
                  Amar Ujala </label>
                <label class="checkbox-inline">
                  <input class="nu-check" type="checkbox" name="how_did_you_get[]" value="3" <?php if(in_array(3,$how_did_you_get)){?> checked="checked" <?php } ?>>
                  Hindustan </label>
              
            </div>
            <div class="form-group">
              <p class="control-label" style="margin-top: -3%;">Publicity:</p>
              
                <label class="checkbox-inline">
                  <input class="nu-check" type="checkbox" name="how_did_you_get[]" value="4" <?php if(in_array(4,$how_did_you_get)){?> checked="checked" <?php } ?>>
                  Education Fair</label>
                <label class="checkbox-inline">
                  <input class="nu-check" type="checkbox" name="how_did_you_get[]" value="5" <?php if(in_array(5,$how_did_you_get)){?> checked="checked" <?php } ?>>
                  FM Radio </label>
                <label class="checkbox-inline">
                  <input class="nu-check" type="checkbox" name="how_did_you_get[]" value="6" <?php if(in_array(6,$how_did_you_get)){?> checked="checked" <?php } ?>>
                  Television </label>
             
            </div>
            <div class="form-group">
              <p class="control-label" style="margin-top: -3%;">Others:</p>
             
                <label class="checkbox-inline">
                  <input class="nu-input1 nu-check" type="checkbox" name="how_did_you_get[]" value="7" <?php if(in_array(7,$how_did_you_get)){?> checked="checked" <?php } ?>>
                  Friend studying at MU</label>
                <label class="checkbox-inline">
                  <input class="nu-check" type="checkbox" name="how_did_you_get[]" value="8" <?php if(in_array(8,$how_did_you_get)){?> checked="checked" <?php } ?>>
                  MU Staff</label>
                <label class="checkbox-inline">
                  <input class="nu-check" type="checkbox" name="how_did_you_get[]" value="9" <?php if(in_array(9,$how_did_you_get)){?> checked="checked" <?php } ?>>
                  MU Faculty </label>
              
            </div>
			<div class="button-container">
             <a href="exam_information.php"><input type="button" class="btn btn-info" value="Back"></a>
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
