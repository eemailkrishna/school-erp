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
url: access_link+"hostel/room_dlt.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('hostel/room_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}


</script>
    <section class="content-header">
      <h1>
       Hostel Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
     <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	  <li class="Active"> Room List</li>
      </ol>
    </section>

	<!---******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Student Room List</h3>
			   <a href="javascript:get_content('hostel/add_room')"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">Add Room</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Hostel</th>
                  <th>Room No.</th>
                  <th>Room Bed Type</th>
                  <th>Facilities</th>
                  <th>Attach Washroom</th>
                  <th>Charges Per Student</th>
                 <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                 <td >1</td>
                 <td >TSRD BOYS HOSTEL</td>
                 <td >02</td>
                 <td >1</td>
                 <td >NonAc</td>
                 <td >Yes</td>
                 <td >500</td>
            
				 <td><button type="button"  onclick="post_content('hostel/room_details','id=24')" class="btn btn-success" >Edit</button>
				 <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('24');" >Delete</button></td>
				 </tr>
                               <tr>
                 <td >2</td>
                 <td >TSRD BOYS HOSTEL</td>
                 <td >201</td>
                 <td >2</td>
                 <td >Cooler</td>
                 <td >Yes</td>
                 <td >5000</td>
            
				 <td><button type="button"  onclick="post_content('hostel/room_details','id=25')" class="btn btn-success" >Edit</button>
				 <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('25');" >Delete</button></td>
				 </tr>
                               <tr>
                 <td >3</td>
                 <td >TSRD BOYS HOSTEL</td>
                 <td >3</td>
                 <td >2</td>
                 <td >Ac</td>
                 <td >Yes</td>
                 <td >2500</td>
            
				 <td><button type="button"  onclick="post_content('hostel/room_details','id=26')" class="btn btn-success" >Edit</button>
				 <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('26');" >Delete</button></td>
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
  $(function () {
    $('#example1').DataTable()
  })
 
</script>