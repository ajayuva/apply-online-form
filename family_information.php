<?php include_once 'include/db_connection.php'; 

if($_POST){
	$user->set_educational_session($_POST);	
}

 if($user->is_familyinfo()!=''){
	 
	$user->redirect('index.php'); 
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
                    <input type="radio" value="1" name="appear" class="nu-check1">
                    Yes (Please fill below details) </label>
                    <label class="radio-inline">
                    <input type="radio" value="2" name="appear" class="nu-check">
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
                    <tr>
                     <td><input type="text" value="" name="name_of_exam[]"></td>
                      <td><input type="text" value="" name="year_of_apper[]"></td>
                      <td><input type="text" value="" name="roll_no[]"></td>
                      <td><input type="text" value="" name="percent[]"></td>
                    </tr>
                    <tr>
                      <td><input type="text" value="" name="name_of_exam[]"></td>
                      <td><input type="text" value="" name="year_of_apper[]"></td>
                      <td><input type="text" value="" name="roll_no[]"></td>
                      <td><input type="text" value="" name="percent[]"></td>
                    </tr>
                    <tr>
                      <td><input type="text" value="" name="name_of_exam[]"></td>
                      <td><input type="text" value="" name="year_of_apper[]"></td>
                      <td><input type="text" value="" name="roll_no[]"></td>
                      <td><input type="text" value="" name="percent[]"></td>
                    </tr>
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
