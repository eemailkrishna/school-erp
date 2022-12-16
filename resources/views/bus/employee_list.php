
<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
for_delete(s_no);       
 }            
else  {      
return false;
 }       
  }
  
function for_delete(s_no){
$.ajax({
type: "POST",
url: access_link+"bus/employee_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				  alert_new('Successfully Deleted','green');
				   get_content('bus/employee_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}

</script>

    <section class="content-header">
      <h1>
       Bus Management        <small>Control Panel</small>
      </h1>
     <ol class="breadcrumb">
	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
	    <li><a href="javascript:get_content('bus/bus_staff')"><i class="fa fa-bed"></i>Bus Staff</a></li>
	</ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box box-success ">
            <div class="box-header with-border">
              <h3 class="box-title">Employee List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Employee Name</th>
                  <th>Photo</th>
				  <th>Contact No.</th>
                  <th>Designation</th>
                  <th>Details</th>
                </tr>
                </thead>
                <tbody>
                
<tr>
    <td>1</td>
	<td>demo</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','24');" src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td>09144555977</td>
	<td></td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=24');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('24');" >Delete</button></td>
	</tr>
	 <tr>
    <td>2</td>
	<td>Kamlesh Nayaka</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','23');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/bus_staff_document/88820658_IMG_20210123_133121.jpg" height="50" width="50"></td>
	<td>8976543290</td>
	<td>Driver</td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=23');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('23');" >Delete</button></td>
	</tr>
	 <tr>
    <td>3</td>
	<td></td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','21');" src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td></td>
	<td></td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=21');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('21');" >Delete</button></td>
	</tr>
	 <tr>
    <td>4</td>
	<td>Shiwanand Tiwari</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','20');" src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td>8602503194</td>
	<td>Teacher</td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=20');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('20');" >Delete</button></td>
	</tr>
	 <tr>
    <td>5</td>
	<td>BAJGDS</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','19');" src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td>9999999999</td>
	<td></td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=19');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('19');" >Delete</button></td>
	</tr>
	 <tr>
    <td>6</td>
	<td>dfsadfasdf</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','18');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/bus_staff_document/89947020_89244707_26991359_simption_logo1 (3).png" height="50" width="50"></td>
	<td>9717454545</td>
	<td></td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=18');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('18');" >Delete</button></td>
	</tr>
	 <tr>
    <td>7</td>
	<td>sadab</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','17');" src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td>700427073</td>
	<td></td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=17');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('17');" >Delete</button></td>
	</tr>
	 <tr>
    <td>8</td>
	<td>Shailesh  kumar</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','16');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/bus_staff_document/98429653_170920190343pm.jpg" height="50" width="50"></td>
	<td>123</td>
	<td> Driver</td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=16');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('16');" >Delete</button></td>
	</tr>
	 <tr>
    <td>9</td>
	<td>Puspendra Singh</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','15');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/bus_staff_document/49600974_170920190343pm.jpg" height="50" width="50"></td>
	<td>9685748596</td>
	<td>Cleaner </td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=15');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('15');" >Delete</button></td>
	</tr>
	 <tr>
    <td>10</td>
	<td>Alok Sharma</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','14');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/bus_staff_document/89900595_170920190343pm.jpg" height="50" width="50"></td>
	<td>9685745263</td>
	<td>Conductor</td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=14');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('14');" >Delete</button></td>
	</tr>
	 <tr>
    <td>11</td>
	<td>sudhir kumar Raghuwansi </td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','13');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/bus_staff_document/13997293_170920190343pm.jpg" height="50" width="50"></td>
	<td>9685748596</td>
	<td>Conductor</td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=13');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('13');" >Delete</button></td>
	</tr>
	 <tr>
    <td>12</td>
	<td>satish kumar pandey</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','12');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/bus_staff_document/43292701_170920190342pm.jpg" height="50" width="50"></td>
	<td>8987944575</td>
	<td>Driver</td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=12');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('12');" >Delete</button></td>
	</tr>
	 <tr>
    <td>13</td>
	<td>Vishal Sahu</td>
	<td><img onclick="open_file1('emp_photo','bus_staff_document','s_no','11');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/bus_staff_document/36149768_170920190342pm.jpg" height="50" width="50"></td>
	<td>8282545785</td>
	<td>Bus Cleaner</td>
			
<td><button type="button" class="btn btn-default" onclick="post_content('bus/employee_edit','id=11');" >Details</button>
<button type="button" class="btn btn-default" onclick="return valid('11');" >Delete</button></td>
	</tr>
	 	</tbody>
	   </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
     <div id="mypdf_view">
			<div>
    </section>
<script>
$(function(){
$('#example1').DataTable()
})
</script>