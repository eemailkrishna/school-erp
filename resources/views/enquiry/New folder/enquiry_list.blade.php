  
  
  <script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_enquiry(s_no);       
 }            
else  {      
return false;
 }       
  }           

function edit_enquiry(s_no){
$.ajax({
type: "POST",
url:access_link+"enquiry/enquiry_edit.php?id="+s_no+"",
cache: false,
success: function(detail){
$("#get_content").html(detail);
}
});
}
function delete_enquiry(s_no){
$.ajax({
type: "POST",
url: access_link+"enquiry/enquiry_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				  // alert_new('Successfully Deleted');
				   get_content('enquiry/enquiry_list');
			   }else{
              //  alert_new(detail); 
			   }
}
});
}

   
 </script>
  
    <section class="content-header">
      <h1>
       Enquiry Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
       	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i>  Home</a></li>
        <li><a href="javascript:get_content('enquiry/enquiry')"><i class="fa fa-phone-square"></i>  Enquiry</a></li>
        <li class="active"><i class="fa fa-list"></i>  Enquiry List</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Enquiry List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
	    <th>S.no.</th>
		<th>Enquiry Type</th>
        <th>Name</th>
        <th>Class</th>
        <th>Father's Name</th>
        <th>Student Medium</th>
        <th>Date</th>
        <th>Contact No 1.</th>
	    <th>Contact No 2.</th>
	    <th>Address</th>
		<th>Next Follow Up Date</th>
		<th>Enquiry Remark1</th>
		<th>Enquiry Remark2</th>
		
		<th>Update By</th>
        <th>Date</th>
		
		<th>Print</th>
		
		<th>Edit</th>
		<th>Delete</th>
        </tr>
        </thead>
		<tbody>
		    
		</tbody>


             </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
 

<script>

var dataTable=$('#example1').DataTable({
                "orderMulti": true,
                "processing": true,
                "serverSide":true,
              
                "ajax":{
                    url:access_link+"enquiry/enquiry_list_fetch.php",
                    type:"post"
                }
            });


</script>
