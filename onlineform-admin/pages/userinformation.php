<?php 
include_once '../../include/db_connection.php'; 
require_once('tcpdf/tcpdf.php');
if($_GET['user_id']!=''){
	$data=$user->get_userinformation($_GET['user_id']);
   //print_r($data);	
   
   $qualification=$user->get_qualification($_GET['user_id']);
   
   
}else{
	
	echo "Invalid Url";
}
$exam_type=array('HIS'=>'High School','INTM'=>'10+2 or Equivalent','GRAD'=>'Graduation','PGRAD'=>'Post Graduation');
$news=array(1=>'Danik Jagran',2=>'Amar Ujala',3=>'Hindustan');
$publicity=array(4=>'Education Fair',5=>'FM Radio',6=>'Television');
$Others=array(7=>'iend studying at MU',8=>'MU Staff',9=>'MU Faculty');
$newspap='';
$pub='';
$oth='';
if($data['how_did_you_get']!=''){
$how_did_you_get=explode(',',$data['how_did_you_get']);
$n=array();
$p=array();
$o=array();
foreach($how_did_you_get as $val){
	  if($val==1){
		  $n[]='Danik Jagran';
	  }
	  if($val==2){
		  $n[]='Amar Ujala';
	  }
	  if($val==3){
		  $n[]='Hindustan';
	  }
	  if($val==4){
		  $p[]='Education Fair';
	  }
	  if($val==5){
		  $p[]='FM Radio';
	  }
	  if($val==6){
		  $p[]='Television';
	  }
	  if($val==7){
		  $o[]='iend studying at MU';
	  }
	  if($val==8){
		  $o[]='MU Staff';
	  }
	  if($val==9){
		  $o[]='MU Faculty';
	  }	  
	 
}
 $newspap=implode(',',$n);
	  $pub=implode(',',$p);
	   $oth=implode(',',$o);
}
$imgurl='PIC';
if($data['url'] !=''){ 
	  $imgurl='<img src="'.$data['url'].'" alt="profile image" />';
	  
   }
   
   
   // create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
//$pdf->SetTitle('TCPDF Example 001');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
//$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
//$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
//$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
/*if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}*/

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

$html='
<table width="700" border="1" align="center" cellpadding="5" cellspacing="1" style="font-size:9px;">
<tr style="text-align:left">
  <td colspan="1" width="501"><strong>PROGRAM APPLYING FOR</strong></td>
</tr>
<tr style="text-align:left">
  <td width="100" ><strong>Course Type</strong></td>
  <td width="200">'.$data['course_type'].'</td>
  <td width="200" colspan="-4" rowspan="4">
  '.$imgurl.'
  </td>
</tr>
<tr style="text-align:left">
  <td><strong>Preference 1</strong></td>
  <td>'.$data['preference_1'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Preference 2</strong></td>
  <td>'.$data['preference_2'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Preference 3</strong></td>
  <td>'.$data['preference_3'].'</td>
  </tr>
<tr style="text-align:left">
  <td colspan="3"><strong>PERSONAL INFORMATION</strong></td>
</tr>
<tr style="text-align:left">
  <td><strong>Gender</strong></td>
  <td colspan="2">'.$data['gender'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Name of Applicant</strong></td>
  <td colspan="2">'.$data['name'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Father\'s Name</strong></td>
  <td colspan="2">'.$data['fathers_name'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Date Of Birth</strong></td>
  <td colspan="2">'.$data['dob'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Category</strong></td>
  <td colspan="2">'.$data['category'].'</td>
  </tr>
<tr style="text-align:left">
  <td colspan="3"><strong>PERMANENT ADDRESS </strong></td>
</tr>
<tr style="text-align:left">
  <td><strong>Address</strong></td>
  <td colspan="2">'.$data['permanent_address_line1'].'<br>'.$data['permanent_address_line2'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>City</strong></td>
  <td colspan="2">'.$data['permanent_city'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>State</strong></td>
  <td colspan="2">'.$data['permanent_state'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Pin Code</strong></td>
  <td colspan="2">'.$data['permanent_pin'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Land Line No</strong></td>
  <td colspan="2">'.$data['landline_number'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Mobile No.</strong></td>
  <td colspan="2">'.$data['mobile_number'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Gaurdian\'s Contact No</strong></td>
  <td colspan="2">'.$data['guardian_contact_number'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Email Address</strong></td>
  <td colspan="2">'.$data['email'].'</td>
  </tr>
<tr style="text-align:left">
  <td colspan="3"><strong>Correspondence Address</strong></td>
</tr>
<tr style="text-align:left">
  <td><strong>Address</strong></td>
  <td colspan="2">'.$data['correspondence_address_line1'].'<br>'.$data['correspondence_address_line2'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>City</strong></td>
  <td colspan="2">'.$data['correspondence_city'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>State</strong></td>
  <td colspan="2">'.$data['correspondence_state'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Pin Code</strong></td>
  <td colspan="2">'.$data['correspondence_pin'].'</td>
  </tr>

<tr style="text-align:left">
  <td colspan="3"><strong>QUALIFICATION</strong></td>
</tr>
<tr style="text-align:left">
  <td colspan="3" valign="top"><table width="500" border="1" align="center" cellpadding="5" cellspacing="1">
    <tr style="text-align:left">
      <td width="70"><strong>Examination</strong></td>
      <td width="70"><strong>Degree</strong></td>
      <td width="70"><strong>Board/Uni./College</strong></td>
      <td width="70"><strong>Name of School/College</strong></td>
      <td width="70"><strong>%</strong></td>
      <td width="70"><strong>Year of Passing</strong></td>
      <td width="65"><strong>Subjects</strong></td>
    </tr>';
	if($qualification){ 
	foreach($qualification as $quali) {
    $html.='<tr style="text-align:left">
      <td><strong>'.$exam_type[$quali['examination_type']].'</strong></td>
      <td>'.$quali['degree'].'</td>
      <td>'.$quali['board'].'</td>
      <td>'.$quali['name_of_college'].'</td>
      <td>'.$quali['persent'].'</td>
      <td>'.$quali['year_of_passing'].'</td>
      <td>'.$quali['subject'].'</td>
    </tr>';
	 } 
	 } 
    
  $html.='</table></td>
</tr>
<tr style="text-align:left">
  <td colspan="3"><strong>HOW DID YOU GET TO KNOW ABOUT US</strong></td>
</tr>
<tr style="text-align:left">
  <td><strong>News Paper</strong></td>
  <td colspan="2">'.$newspap.'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Publicity</strong></td>
  <td colspan="2">'.$pub.'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Others</strong></td>
  <td colspan="2">'.$oth.'</td>
  </tr>
<tr style="text-align:left">
  <td colspan="3"><strong>DECLARATION:</strong></td>
</tr>

<tr style="text-align:left">
  <td><strong>Parent Name</strong></td>
  <td colspan="2">&nbsp;</td>
  </tr>

<tr style="text-align:left">
  <td><strong>Place</strong></td>
  <td colspan="2">'.@$data['place'].'</td>
  </tr>
<tr style="text-align:left">
  <td><strong>Date</strong></td>
  <td colspan="2">'.$data['updated_on'].'</td>
  </tr>
<tr style="text-align:left">
  <td>&nbsp;</td>
  <td colspan="2">&nbsp;</td>
  </tr>
</table>
';

//echo $html;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

?>