<?php 
include_once 'include/db_connection.php'; 
$course_type='';
$preference_1='';
$preference_2='';
$preference_3='';
if(isset($_SESSION['personal_detail'])){
	
$course_type=	$_SESSION['course_type'];
$preference_1=	$_SESSION['preference_1'];
$preference_2=	$_SESSION['preference_2'];
$preference_3=	$_SESSION['preference_3'];
}
include('include/header.php'); 
//print_r($_SESSION);
$program=array('ug'=>'Under Graduate Programmes','pg'=>'Post Graduate Programmes','doctoral'=>'Ph. D. Programmes');
?>
                  <!-------------------text  end------------->
<div class="container-fluid mid-content no-gutter dk-grey Course_Listing">
  <div class="row no-gutter">
    <div class="container">
      <div class="col-md-12 left-align-content no-gutter">
        <div class="Course_ListingPage">
          <ul class="tabs">
            <h4 class="nu-heading">Online Application</h4>
          <li class="active">Basic Information</li>
            <li>Personal Details</li>
            <li>Educational Details</li>
            <li>Entrance Exam Information</li>
            <li>Other Information</li>
            <li>Upload Documents</li>
          </ul>
          <div class="form-step tab_container">
            <div class="form-step1 tab_content" style="display: block;">
              <form action="personal_detail.php" method="post">
                <h3 class="nu-text1 nu-text">program applying for</h3>
               
               <div class="form-group">
                  <select name="course_type" id="course_type">
                    <?php foreach($program as $pkey=>$pvalue){ ?>
					 <option value="<?php echo $pkey;?>" <?php if($pkey==$course_type){?> selected="selected" <?php } ?>><?php echo $pvalue;?></option>
					<?php } ?>
                  </select>
                  <label for="select" class="control-label">Programmes</label>
                  <i class="bar"></i> </div>   
                  
                  
                <div class="form-group">
                  <select name="preference_1" id="preference_1">
                    <option value="BCA" <?php if($preference_1=='BCA'){?> selected="selected" <?php } ?>>BCA</option>
                    <option value="BBA"  <?php if($preference_1=='BBA'){?> selected="selected" <?php } ?>>BBA</option>
                    <option value="B.Tech." <?php if($preference_1=='B.Tech.'){?> selected="selected" <?php } ?>>B.Tech.</option>
                    <option value="BA" <?php if($preference_1=='BA'){?> selected="selected" <?php } ?>>BA</option>
                  </select>
                  <label for="select" class="control-label">Course Preference1</label>
                  <i class="bar"></i> 
				 </div>
                <div class="form-group">
                  <select name="preference_2" id="preference_2">
                    <option value="BCA" <?php if($preference_2=='BCA'){?> selected="selected" <?php } ?>>BCA</option>
                    <option value="BBA"  <?php if($preference_2=='BBA'){?> selected="selected" <?php } ?>>BBA</option>
                    <option value="B.Tech." <?php if($preference_2=='B.Tech.'){?> selected="selected" <?php } ?>>B.Tech.</option>
                    <option value="BA" <?php if($preference_2=='BA'){?> selected="selected" <?php } ?>>BA</option>
                  </select>
                  <label for="select" class="control-label">Course Preference2</label>
                  <i class="bar"></i> </div>
                <div class="form-group">
                  <select name="preference_3" id="preference_3">
                    <option value="BCA" <?php if($preference_3=='BCA'){?> selected="selected" <?php } ?>>BCA</option>
                    <option value="BBA"  <?php if($preference_3=='BBA'){?> selected="selected" <?php } ?>>BBA</option>
                    <option value="B.Tech." <?php if($preference_3=='B.Tech.'){?> selected="selected" <?php } ?>>B.Tech.</option>
                    <option value="BA" <?php if($preference_3=='BA'){?> selected="selected" <?php } ?>>BA</option>
                  </select>
                  <label for="select" class="control-label">Course Preference3</label>
                  <i class="bar"></i> </div>
				  
				  <div class="button-container">
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
