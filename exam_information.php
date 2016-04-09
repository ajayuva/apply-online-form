<?php include_once 'include/db_connection.php'; 

if($_POST){
	$user->set_educational_session($_POST);	
}

 if($user->is_familyinfo()!=''){
	 
	$user->redirect('index.php'); 
 }
?>
<?php include('include/header.php');
$appear=2;
$name_of_exam=array();
$year_of_apper=array();
$roll_no=array();
$percent=array();
if(isset($_SESSION['other_info'])){
$appear=$_SESSION['appear'];
$name_of_exam=$_SESSION['name_of_exam'];
$year_of_apper=$_SESSION['year_of_apper'];
$roll_no=$_SESSION['roll_no'];
$percent=$_SESSION['percent'];
}	
//print_r($name_of_exam);
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
            <li class="active">Entrance Exam Information</li>
            <li>Other Information</li>
            <li>Upload Documents</li>
          </ul>
          <div class="form-step tab_container">
            
            <div class="form-step4 tab_content" style="display: block;">
              <div class="col-md-12" style="overflow:scroll">
			   <form action="other_information.php" method="post">
                <div class="nu-padding col-md-7"><h3 style="margin-top: 0%;">Have you appeared in any Entrance Exam</h3></div>
                <div class="col-md-5">
                  <label class="radio-inline">
                    <input type="radio" value="1" name="appear" class="nu-check1" <?php if($appear==1){?> checked="checked" <?php } ?>>
                    Yes (Please fill below details) </label>
                    <label class="radio-inline">
                    <input type="radio" value="2" name="appear" class="nu-check" <?php if($appear==2){?> checked="checked" <?php } ?>>
                    No </label>
                </div>
                <table class="table table-bordered table-responsive table-hover">
                  <thead>
                    <tr>
                      <th>Name of Exam</th>
                      <th>Year of Appearing</th>
                      <th>Roll No.</th>
                      <th>Precentile(%)/Score/Rank</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php if($appear==1){ ?> 
				    <?php 
					  $i=0;
					foreach($name_of_exam as $exam){   ?>
					<tr>
						<td><input type="text"  name="name_of_exam[]" value="<?php echo $exam;?>"></td>
						<td><input type="text"  name="year_of_apper[]" value="<?php echo $year_of_apper[$i];?>" ></td>
						<td><input type="text"  name="roll_no[]" value="<?php echo $roll_no[$i];?>" ></td>
						<td><input type="text"  name="percent[]" value="<?php echo $percent[$i];?>" ></td>
					</tr>
					<?php $i++;} ?>
				  <?php }else{ ?> 
				  <tr>
						<td><input type="text" value="" name="name_of_exam[]"></td>
						<td><input type="text" value="" name="year_of_apper[]"></td>
						<td><input type="text" value="" name="roll_no[]"></td>
						<td><input type="text" value="" name="percent[]"></td>
					</tr>
				  
				  <?php } ?>
                   
                    
                  </tbody>
                </table>
					<div class="button-container">
						<a href="educational_detail.php"><input type="button" class="btn btn-info" value="Back"></a>
						<input type="submit" class="btn btn-info" value="Next">

					</div>
              </div>
             
			 
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include('include/footer.php'); ?>
