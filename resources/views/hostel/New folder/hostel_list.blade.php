<script>
window.scrollTo(0, 0);
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_hostel(s_no);       
 }            
else  {      
return false;
 }       
  } 
  function delete_hostel(s_no){
$.ajax({
type: "POST",
url: access_link+"hostel/hostel_dlt.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('hostel/hostel_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}


</script>				
    <section class="content-header">
      <h1>
      Hostel Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	    <li class="active">Hostel List</a></li>
    </ol>
    </section>

	<!---***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Student Hostel List</h3>
			  <a href="javascript:get_content('hostel/add_hostel')"><button type="button"  class="btn btn-danger">Add Hostel</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Hostel Name</th>
                  <th>Hostel type</th>
                  <th>No. of Room</th>
                  <th>Total Capacity</th>
                  <th>Facilities</th>
                  <th>Laundry Services</th>
                  <th>Mess</th>
                  <th>Warden Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                 <td >1</td>
                 <td >TSRD GIRLS HOSTEL</td>
                 <td >Girls</td>
                 <td >1000</td>
                 <td >1000</td>
                 <td >A.C</td>
                 <td >Yes</td>
                 <td >Yes</td>
                 <td ></td>
                  <td>
		
				  <button type="button"  onclick="post_content('hostel/hostel_details','id=18')" class="btn btn-success" >Edit</button>
				 <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('18');" >Delete</button>
				  </td>
                </tr>
                               <tr>
                 <td >2</td>
                 <td >gbssss</td>
                 <td >Both</td>
                 <td >50</td>
                 <td >500</td>
                 <td >AC&NonAc</td>
                 <td >Yes</td>
                 <td >Yes</td>
                 <td >abc</td>
                  <td>
		
				  <button type="button"  onclick="post_content('hostel/hostel_details','id=20')" class="btn btn-success" >Edit</button>
				 <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('20');" >Delete</button>
				  </td>
                </tr>
                               <tr>
                 <td >3</td>
                 <td >v boys hostel</td>
                 <td >Boys</td>
                 <td >60</td>
                 <td >120</td>
                 <td >AC&NonAc</td>
                 <td >Yes</td>
                 <td >Yes</td>
                 <td >niraj</td>
                  <td>
		
				  <button type="button"  onclick="post_content('hostel/hostel_details','id=21')" class="btn btn-success" >Edit</button>
				 <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('21');" >Delete</button>
				  </td>
                </tr>
                               <tr>
                 <td >4</td>
                 <td >TS BOYS HOSTEL</td>
                 <td >Boys</td>
                 <td >450</td>
                 <td >900</td>
                 <td >A.C</td>
                 <td >Yes</td>
                 <td >Yes</td>
                 <td >TSG AUTHORITY</td>
                  <td>
		
				  <button type="button"  onclick="post_content('hostel/hostel_details','id=22')" class="btn btn-success" >Edit</button>
				 <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('22');" >Delete</button>
				  </td>
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
      <!-- /.row -->
    </section>
<script>
$(function(){
$('#example1').DataTable()
})
</script>