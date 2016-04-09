<?php 
include_once '../../include/db_connection.php';  
if(@$_GET['str']=='logout'){
	if($user->logout()){
	 
	$user->redirect('http://' . $_SERVER['SERVER_NAME'].'/apply-online-form/onlineform-admin/'); 
 }
	
}
if($user->is_loggedin()!=''){
	 
	$user->redirect('http://' . $_SERVER['SERVER_NAME'].'/apply-online-form/onlineform-admin/'); 
 }
?>
<?php include_once 'adminheader.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Track Report</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Report
							<div style="float:right;"><input type="button" id="btnExport" onclick="fnExcelReport();" value=" Export Table data into Excel " /></div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th title="Application No.">App. No.</th>
                                            <th >Course type</th>
                                            <th title="Preference 1">Pre 1</th>
                                            <th title="Preference 2">Pre 2</th>
                                            <th title="Preference 3">Pre 3</th>
											<th title="Name">name</th>
                                            <th title="Fathers Name">Fathers Name</th>
											<th title="Date Of Birth">Dob</th>
                                            <th title="Category">Category</th>
											<th title="Email">Email</th>
											<th title="Mobile Number">Mobile Number</th>
											<th title="Action">Action</th>
                                        </tr>
                                    </thead>
									<tbody>
									
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
           
        </div>
        <!-- /#page-wrapper -->
<iframe id="txtArea1" style="display:none"></iframe>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js">
	</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
               "aProcessing": true,
               "aServerSide": true,
               "ajax": "server_processing.php",
			   "pageLength": 5
        });
		
		
    });
	
	function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('dataTables-example'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}
    </script>

</body>

</html>
