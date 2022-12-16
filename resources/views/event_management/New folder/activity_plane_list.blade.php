<script>
    function valid()
    {
var myval=confirm("Are you sure want to parmanently  delete this record !!!!");
    if(myval==true)
        {
            return true;
        }
    else
        {
            return false;
        }
        }
</script>	

    <section class="content-header">
      <h1>
         Activity Plan List
	   <small>Control Panel</small> 
      </h1>
      <ol class="breadcrumb">
   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('event_management/event_management')"><i class="fa fa-calendar"></i>Event Management</a></li>
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
                   <th>Sr No.</th>
				   <th>Event Name</th>
		           <th>Details</th>
                </tr>
                </thead>
                <tbody>
				                <tr>
                  <th>1</th>
				  <th>Annual FUnction</th>
				<th><button type="button"  class="btn btn-default" onclick="post_content('event_management/activity_plan_details','id=Annual FUnction');" >Details</button></th>
                </tr>
	                            <tr>
                  <th>2</th>
				  <th>Dance Competion</th>
				<th><button type="button"  class="btn btn-default" onclick="post_content('event_management/activity_plan_details','id=Dance Competion');" >Details</button></th>
                </tr>
	                            <tr>
                  <th>3</th>
				  <th>Fancy Dress </th>
				<th><button type="button"  class="btn btn-default" onclick="post_content('event_management/activity_plan_details','id=Fancy Dress ');" >Details</button></th>
                </tr>
	                            <tr>
                  <th>4</th>
				  <th>Group Dance </th>
				<th><button type="button"  class="btn btn-default" onclick="post_content('event_management/activity_plan_details','id=Group Dance ');" >Details</button></th>
                </tr>
	                            <tr>
                  <th>5</th>
				  <th>mimicry</th>
				<th><button type="button"  class="btn btn-default" onclick="post_content('event_management/activity_plan_details','id=mimicry');" >Details</button></th>
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
  