<?php include_once 'include/db_connection.php'; 
if($_POST){
	$user->set_personal_session($_POST);	
}
 if($user->is_educationaldetail()!=''){
	 
	$user->redirect('index.php'); 
 }
 
?>
<?php include('include/header.php'); 
    $degree_0='';
	$degree_1='';
	$degree_2='';
	$degree_3='';
	$board_0='';
	$board_1='';
	$board_2='';
	$board_3='';
	$name_of_college_0='';
	$name_of_college_1='';
	$name_of_college_2='';
	$name_of_college_3='';
	
	$persent_0='';
	$persent_1='';
	$persent_2='';
	$persent_3='';
	
	$year_of_passing_0='';
	$year_of_passing_1='';
	$year_of_passing_2='';
	$year_of_passing_3='';
	
	$subject_0='';
	$subject_1='';
	$subject_2='';
	$subject_3='';
if(isset($_SESSION['family_info'])){
	$degree_0=$_SESSION['degree'][0];
	$degree_1=$_SESSION['degree'][1];
	$degree_2=$_SESSION['degree'][2];
	$degree_3=$_SESSION['degree'][3];
	
	$board_0=$_SESSION['board'][0];
	$board_1=$_SESSION['board'][1];
	$board_2=$_SESSION['board'][2];
	$board_3=$_SESSION['board'][3];
	
	$name_of_college_0=$_SESSION['name_of_college'][0];
	$name_of_college_1=$_SESSION['name_of_college'][1];
	$name_of_college_2=$_SESSION['name_of_college'][2];
	$name_of_college_3=$_SESSION['name_of_college'][3];
	
	$persent_0=$_SESSION['persent'][0];
	$persent_1=$_SESSION['persent'][1];
	$persent_2=$_SESSION['persent'][2];
	$persent_3=$_SESSION['persent'][3];
	
	$year_of_passing_0=$_SESSION['year_of_passing'][0];
	$year_of_passing_1=$_SESSION['year_of_passing'][1];
	$year_of_passing_2=$_SESSION['year_of_passing'][2];
	$year_of_passing_3=$_SESSION['year_of_passing'][3];
	
	$subject_0=$_SESSION['subject'][0];
	$subject_1=$_SESSION['subject'][1];
	$subject_2=$_SESSION['subject'][2];
	$subject_3=$_SESSION['subject'][3];
//print_r($_SESSION);
}
$exam_type=array('HIS'=>'High School','INTM'=>'10+2 or Equivalent','GRAD'=>'Graduation','PGRAD'=>'Post Graduation');
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
            <li class="active">Educational Details</li>
            <li>Entrance Exam Information</li>
            <li>Other Information</li>
            <li>Upload Documents</li>
          </ul>
          <div class="form-step tab_container">
            <div class="form-step3 tab_content" style="display: block;">
              <div class="col-md-12" style="overflow:scroll">
			  <form action="exam_information.php" method="post">
                <h3>Qualifying Examination Details:</h3>
                <table class="table table-bordered table-responsive table-hover">
                  <thead>
                    <tr>
                      <th>Examination</th>
                      <th>Degree</th>
                      <th>Board/University/College</th>
                      <th>Name of School/College</th>
                      <th>%</th>
                      <th>Year of Passing</th>
                      <th>Subjects</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="hidden" name="examination_type[]" required value="HIS">High School</td>
                      <td><input type="text" name="degree[]" required value="<?php echo $degree_0;?>"></td>
                      <td><input type="text" name="board[]" required value="<?php echo $board_0;?>"></td>
                      <td><input type="text" name="name_of_college[]" required value="<?php echo $name_of_college_0;?>"></td>
                      <td><input type="text" name="persent[]" required value="<?php echo $persent_0;?>"></td>
                      <td><input type="text" name="year_of_passing[]" required value="<?php echo $year_of_passing_0;?>"></td>
                      <td><input type="text" name="subject[]" required value="<?php echo $subject_0;?>"></td>
                    </tr>
                    <tr>
                      <td><input type="hidden" name="examination_type[]" value="INTM">10+2 or Equivalent</td>
                      <td><input type="text" name="degree[]" value="<?php echo $degree_1;?>"></td>
                      <td><input type="text" name="board[]" value="<?php echo $board_1;?>"></td>
                      <td><input type="text" name="name_of_college[]" value="<?php echo $name_of_college_1;?>"></td>
                      <td><input type="text" name="persent[]" value="<?php echo $persent_1;?>"></td>
                      <td><input type="text" name="year_of_passing[]" value="<?php echo $year_of_passing_1;?>"></td>
                      <td><input type="text" name="subject[]" value="<?php echo $subject_1;?>"></td>
                    </tr>
                    <tr>
                      <td><input type="hidden" name="examination_type[]" value="GRAD">Graduation</td>
                      <td><input type="text" name="degree[]" value="<?php echo $degree_2;?>"></td>
                      <td><input type="text" name="board[]" value="<?php echo $board_2;?>"></td>
                      <td><input type="text" name="name_of_college[]" value="<?php echo $name_of_college_2;?>"></td>
                      <td><input type="text" name="persent[]" value="<?php echo $persent_2;?>"></td>
                      <td><input type="text" name="year_of_passing[]" value="<?php echo $year_of_passing_2;?>"></td>
                      <td><input type="text" name="subject[]" value="<?php echo $subject_2;?>"></td>
                    </tr>
					<tr>
                      <td><input type="hidden" name="examination_type[]" value="PGRAD">Post Graduation</td>
                      <td><input type="text" name="degree[]" value="<?php echo $degree_3;?>"></td>
                      <td><input type="text" name="board[]" value="<?php echo $board_3;?>"></td>
                      <td><input type="text" name="name_of_college[]" value="<?php echo $name_of_college_3;?> "></td>
                      <td><input type="text" name="persent[]" value="<?php echo $persent_3;?>"></td>
                      <td><input type="text" name="year_of_passing[]" value="<?php echo $year_of_passing_3;?>"></td>
                      <td><input type="text" name="subject[]" value="<?php echo $subject_3;?>"></td>
                    </tr>
                  </tbody>
                </table>
				 <div class="button-container">
                  <a href="personal_detail.php"><input type="button" class="btn btn-info" value="Back"></a>
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
</div>
<?php include('include/footer.php'); ?>
