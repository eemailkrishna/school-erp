<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_employee(s_no);       
 }            
else  {      
return false;
 }       
  } 
  function delete_employee(s_no){
$.ajax({
type: "POST",
url: access_link+"staff/employee_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('staff/employee_drop_list');
			   }else{
               alert_new('Sorry!!! Some Error Occured','red'); 
			   }
}
});
}

function for_rejoin(s_no){
    var myval=confirm("Are you sure you want to Re-Join this Employee !!!!");
    if(myval==true){
    for_rejoin11(s_no);
    }else{
    return false;
    }
}

function for_rejoin11(s_no){
$.ajax({
type: "POST",
url: access_link+"staff/employee_rejoin.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Completed','green');
				   get_content('staff/employee_drop_list');
			   }else{
               alert_new('Sorry!!! Some Error Occured','red'); 
			   }
}
});
}

function open_file1(image_type,emp_id){
	$.ajax({
	address: "POST",
	url: access_link+"staff/ajax_open_image.php?image_type="+image_type+"&emp_id="+emp_id+"",
	cache: false,
	success: function(detail){
	 $("#mypdf_view").html(detail);
	}
	});
	}

function for_edit(s_no,drop_date){
$('#s_no').val(s_no);
$('#drop_date').val(drop_date);
}

 $("#my_form").submit(function(e){
        e.preventDefault();
    var formdata = new FormData(this);
				 $("#myModal_close").click();  
        $.ajax({
            url: access_link+"staff/employee_drop_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   
				   $('#myModal').modal('hide');
				
				   get_content('staff/employee_drop_list');
            }
			}
         });
      });
</script>
  <section class="content-header">
      <h1>Employee Management        <small>Control Panel</small></h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-graduation-cap"></i> Employee</a></li>
	  <li class="active">Employee List</li>
      </ol>
    </section>
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <!-- /.box -->

          <div <div class="box box-success" >>
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
				<tr>
                  <th>#</th>
                  <th>Employee Name</th>
                  <!-- <th></th> -->
				  <th>Contact No.</th>
                  <th>Designation</th>
                  <th>Drop Date</th>
                  
                  <th>Update By</th>
                  <th>Date</th>
                  
                  <th>Print</th>
                  <th style="display:none;">Edit</th>
                  <th>Re - join</th>
                  <th>Delete</th>
                  <th>Drop Date</th>
                </tr>
                </thead>
                <tbody>
				
                <tr>
                <td >1</td>
				<td></td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=160'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=160')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('160');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('160');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('160','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >2</td>
				<td>DD</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>54654</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=161'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=161')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('161');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('161');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('161','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >3</td>
				<td>FF</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>2356235421</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=162'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=162')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('162');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('162');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('162','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >4</td>
				<td>Harshit sharma</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>7869973168</td>
				<td>BDE</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=163'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=163')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('163');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('163');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('163','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >5</td>
				<td>ABC</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td>Vice Principal</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=164'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=164')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('164');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('164');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('164','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >6</td>
				<td>Feeroz Ahmad</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>7700224455</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=165'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=165')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('165');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('165');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('165','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >7</td>
				<td>sofi shab</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>666</td>
				<td>Director</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=167'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=167')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('167');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('167');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('167','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >8</td>
				<td>UMESH MOURYA </td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>7067247461</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=168'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=168')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('168');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('168');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('168','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >9</td>
				<td>umer</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>6005202661</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=169'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=169')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('169');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('169');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('169','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >10</td>
				<td>Feeroz Ahmad</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>6005478277</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=170'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=170')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('170');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('170');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('170','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >11</td>
				<td>arif</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9419112786</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=171'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=171')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('171');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('171');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('171','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >12</td>
				<td>shakib</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=172'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=172')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('172');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('172');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('172','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >13</td>
				<td>Reena</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=173'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=173')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('173');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('173');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('173','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >14</td>
				<td>Rajesh</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9906412069</td>
				<td>Other</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=174'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=174')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('174');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('174');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('174','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >15</td>
				<td>Brindaban Jamatia</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=176'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=176')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('176');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('176');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('176','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >16</td>
				<td>Mukul sharma</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>8219879387</td>
				<td>Lecturer</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=178'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=178')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('178');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('178');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('178','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >17</td>
				<td>Ambika </td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>09805140977</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=179'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=179')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('179');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('179');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('179','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >18</td>
				<td>m</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=180'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=180')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('180');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('180');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('180','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >19</td>
				<td>kam</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>353453535</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=181'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=181')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('181');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('181');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('181','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >20</td>
				<td>कैलश</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>07568582859</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=182'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=182')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('182');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('182');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('182','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >21</td>
				<td>Kaveesh B N</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9902988450</td>
				<td>Principle</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=183'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=183')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('183');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('183');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('183','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >22</td>
				<td>Vishu</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>Hdhdh</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=184'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=184')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('184');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('184');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('184','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >23</td>
				<td>Saurabh singh</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=185'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=185')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('185');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('185');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('185','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >24</td>
				<td>Risheekesh upadhyay</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=186'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=186')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('186');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('186');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('186','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >25</td>
				<td>Babi Kumari</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=187'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=187')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('187');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('187');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('187','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >26</td>
				<td>Bacon Singh Tomar</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9997529590</td>
				<td>Principle</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=188'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=188')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('188');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('188');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('188','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >27</td>
				<td>Miss. Sonam chauhan</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>6260584566</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=189'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=189')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('189');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('189');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('189','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >28</td>
				<td>A</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9918666600</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=190'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=190')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('190');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('190');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('190','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >29</td>
				<td>VIVEK KUMAR SHARMA</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>8544567456</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=191'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=191')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('191');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('191');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('191','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >30</td>
				<td>Dhanraj Prajapati</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>7470410633</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=192'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=192')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('192');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('192');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('192','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >31</td>
				<td>gjkk</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=193'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=193')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('193');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('193');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('193','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >32</td>
				<td>Skj</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=194'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=194')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('194');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('194');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('194','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >33</td>
				<td>rohini</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9096559620</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=195'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=195')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('195');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('195');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('195','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >34</td>
				<td>Upload</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>09876543210</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=196'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=196')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('196');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('196');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('196','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >35</td>
				<td>h</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9876543209</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=197'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=197')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('197');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('197');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('197','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >36</td>
				<td>Mangi lal saini</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>8949911686</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=198'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=198')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('198');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('198');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('198','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >37</td>
				<td>Mukul sharma</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>08219879387</td>
				<td>Principle</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=200'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=200')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('200');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('200');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('200','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >38</td>
				<td>JAYA</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>7854961240</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=201'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=201')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('201');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('201');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('201','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >39</td>
				<td>NANDINI BINAKIA</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>09617050420</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=202'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=202')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('202');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('202');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('202','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >40</td>
				<td>Subair faisy</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9995292362</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=203'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=203')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('203');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('203');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('203','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >41</td>
				<td>Ass</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>56777889</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=204'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=204')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('204');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('204');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('204','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >42</td>
				<td>Varshika</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9588231141</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=205'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=205')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('205');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('205');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('205','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >43</td>
				<td>JATIN KUMAR</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td>Librarian</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=206'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=206')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('206');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('206');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('206','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >44</td>
				<td>Bhavya Gaglani</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>8766543456</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=207'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=207')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('207');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('207');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('207','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >45</td>
				<td>Amit Chaudhary</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9592147871</td>
				<td>Director</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=208'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=208')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('208');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('208');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('208','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >46</td>
				<td>Amit Chaudhary</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9592147871</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=209'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=209')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('209');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('209');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('209','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >47</td>
				<td>PRAKASH KUMAWAT</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>6367680365</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=210'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=210')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('210');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('210');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('210','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >48</td>
				<td>Norang lal</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>6377764116</td>
				<td>Principal</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=211'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=211')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('211');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('211');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('211','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >49</td>
				<td>Chena Ram Tailor</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>8432850736</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=212'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=212')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('212');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('212');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('212','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >50</td>
				<td>Md Farhan Ashraf</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9939776047</td>
				<td>Director</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=213'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=213')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('213');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('213');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('213','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >51</td>
				<td>SATYADEV</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>7015066743</td>
				<td>Accountant</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=214'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=214')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('214');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('214');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('214','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >52</td>
				<td>DWARAPUREDDI GANESH</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>8096960283</td>
				<td>Head Master</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=215'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=215')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('215');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('215');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('215','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >53</td>
				<td>PRADEEP SHILPI</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>09399835410</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=216'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=216')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('216');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('216');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('216','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >54</td>
				<td>अथर्व</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=217'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=217')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('217');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('217');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('217','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >55</td>
				<td>Pankaj singh</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>8001546395</td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=218'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=218')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('218');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('218');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('218','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >56</td>
				<td>honey</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9876543211</td>
				<td>Teacher</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=219'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=219')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('219');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('219');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('219','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >57</td>
				<td>REYAN</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>117363736272</td>
				<td>Accountant</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=220'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=220')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('220');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('220');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('220','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >58</td>
				<td>Sangeeta Chauhan</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9797163868</td>
				<td>Accountant</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=221'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=221')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('221');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('221');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('221','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >59</td>
				<td>Anamika Agrawal</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=222'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=222')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('222');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('222');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('222','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >60</td>
				<td>priyanka kaushik</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>7005657009</td>
				<td>Principle</td>
				<td>10-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>10-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=223'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=223')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('223');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('223');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('223','2022-06-10')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >61</td>
				<td>SATVEER JI</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>09-06-2022</td>
				
                <td>rahul@simption.com</td>
                <td>11-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=299'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=299')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('299');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('299');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('299','2022-06-09')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >62</td>
				<td>Sunil</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9994445086</td>
				<td>Principle</td>
				<td>16-05-2022</td>
				
                <td>rahul@simption.com</td>
                <td>16-05-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=286'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=286')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('286');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('286');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('286','2022-05-16')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >63</td>
				<td>Anu</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>16-05-2022</td>
				
                <td>rahul@simption.com</td>
                <td>16-05-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=287'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=287')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('287');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('287');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('287','2022-05-16')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >64</td>
				<td>anshu </td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>1234554321</td>
				<td></td>
				<td>05-05-2022</td>
				
                <td>rahul@simption.com</td>
                <td>24-06-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=303'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=303')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('303');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('303');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('303','2022-05-05')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >65</td>
				<td>S.G.HAGE</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td>Teacher</td>
				<td>28-03-2022</td>
				
                <td>rahul@simption.com</td>
                <td>28-03-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=260'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=260')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('260');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('260');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('260','2022-03-28')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >66</td>
				<td>Ramesh</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>28-03-2022</td>
				
                <td>rahul@simption.com</td>
                <td>28-03-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=276'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=276')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('276');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('276');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('276','2022-03-28')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >67</td>
				<td>RAMESH Ji</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>25-03-2022</td>
				
                <td>rahul@simption.com</td>
                <td>25-03-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=274'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=274')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('274');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('274');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('274','2022-03-25')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >68</td>
				<td>sunana</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td></td>
				<td>16-03-2022</td>
				
                <td>rahul@simption.com</td>
                <td>22-03-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=275'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=275')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('275');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('275');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('275','2022-03-16')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >69</td>
				<td>jkhjh</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>kjh</td>
				<td>Head Master</td>
				<td>08-03-2022</td>
				
                <td>rahul@simption.com</td>
                <td>08-03-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=266'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=266')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('266');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('266');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('266','2022-03-08')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >70</td>
				<td>MANOJ YADAV</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td>driver</td>
				<td>08-03-2022</td>
				
                <td>rahul@simption.com</td>
                <td>08-03-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=268'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=268')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('268');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('268');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('268','2022-03-08')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >71</td>
				<td>MANINDER BHATIA</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td></td>
				<td>Principle</td>
				<td>02-03-2022</td>
				
                <td>rahul@simption.com</td>
                <td>02-03-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=269'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=269')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('269');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('269');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('269','2022-03-02')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				
                <tr>
                <td >72</td>
				<td>SONI JI</td>
				<!-- <td> <img onclick="open_file1('emp_photo','');" src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>7248924385</td>
				<td>Director</td>
				<td>09-02-2022</td>
				
                <td>rahul@simption.com</td>
                <td>09-02-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/experience_letter.php?s_no=262'><button type="button" class="btn btn-success">Print</button></a></td>
				<td style="display:none;"><button type="button"  onclick="post_content('staff/employee_edit','s_no=262')" class="btn btn-success" >Edit</button></td>
				<td><button type="button"  class="btn btn-info" onclick="return for_rejoin('262');" >Re - join</button></td>
				<td><button type="button"  class="btn btn-danger" onclick="return valid('262');" >Delete</button></td>
				<td><button type="button"  class="btn btn-success" onclick="for_edit('262','2022-02-09')" data-toggle="modal" data-target="#myModal" >Change</button></td>
				</tr>
				                </tbody>
             </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
<div id="mypdf_view">
			<div>
      </div>
      <!-- /.row -->
    </section>
    
<div class="modal fade" id="myModal" role="dialog">
	<form role="form"  method="post" enctype="multipart/form-data" id="my_form">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
         <div class="form-group">
		<label>Drop Date</label>
		<input type="date" name="drop_date" id="drop_date" class="form-control" />
		<input type="hidden" name="s_no" id="s_no" class="form-control" />
	  </div>
        </div>
        <div class="modal-footer">
		<input type="submit" name="finish" value="Edit" class="btn btn-success" />
          <button type="button" class="btn btn-default" id="myModal_close" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
	  </form>
  </div>
    
     <script>
  $(function () {
    $('#example1').DataTable()
  })
 
</script>
  