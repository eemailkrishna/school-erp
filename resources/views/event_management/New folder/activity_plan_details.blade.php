<script>
	function valid(s_no){
	var myval=confirm("Are you sure want to delete this record !!!!");
	if(myval==true){
	delete_fee(s_no);
	}
	else  {
	return false;
	}
	}
	
	function delete_fee(s_no){
	$.ajax({
	type: "POST",
	url: access_link+"event_management/activity_plan_dlt.php?id="+s_no+"",
	cache: false,
	success: function(detail){
	var res=detail.split("|?|");
	if(res[1]=='success'){
	   alert_new('Successfully Deleted','green');
	   get_content('event_management/activity_plane_list');
	}else{
	//alert_new(detail); 
	}
	}
	});
	}
	</script>	

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Activity Plan List
	   <small>Control Panel</small> 
      </h1>
      <ol class="breadcrumb">
       <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
	    <li><a href="javascript:get_content('event_management/event_management')"><i class="fa fa-calendar-check-o"></i> Event Management</a></li>
        <li class="active"><i class="fa fa-list"></i>Activity Plan List</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-md-12">
         
          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Activity Plan List</h3>
			</div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
                   <th>Serial No.</th>
				   <th>Event Name</th>
				   <th>Name</th>
				   <th>Delete</th>
				  
                </tr>
                </thead>
                <tbody>
                             <tr>
                <th>1</th>
				<th>Annual FUnction</th>
				<th>Vikas </th>
			    <th><button type="button" onclick="return valid('13');" class="btn btn-default" >Delete</button></th>
            </tr>
               
	            <tr>
                <th>2</th>
				<th>Annual FUnction</th>
				<th>ANKIT SHARMA</th>
			    <th><button type="button" onclick="return valid('12');" class="btn btn-default" >Delete</button></th>
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
    <!-- /.content -->
 <script>
$(function(){
$('#example1').DataTable()
})
</script>
