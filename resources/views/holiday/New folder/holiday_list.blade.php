 
@include('common.header')
@include('common.navbar')
<script>
			function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_holiday(s_no);       
 }            
else  {      
return false;
 }       
  } 
  function delete_holiday(s_no){
$.ajax({
type: "POST",
url: access_link+"holiday/delete_holiday.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				  alert_new('Successfully Deleted','green');
				   get_content('holiday/holiday_list');
			   }else{
               alert_new(detail); 
			   }
}
});
}

</script>	

    <section class="content-header">
      <h1>
        Holiday Management 
      </h1>
      <ol class="breadcrumb">
    <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('holiday/holiday')"><i class="fa fa-photo"></i> Holiday</a></li>
        <li class="active"><i class="fa fa-list"></i> Holiday List </li>
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
              <h3 class="box-title">Holiday List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Holiday Name</th>
                  <th>Date</th>
                  <th>Day</th>
                  <th>Descrption</th>
                  
                  <th>Update By</th>
                  <th>Date</th>
                  
                  <th>Action</th>
                 
                </tr>
                </thead>
		
		<tbody>
				                <tr>
                  <td>1</td>
                  <td>DIWALI </td>
                  <td>15-11-2022</td>
                  <td>Tuesday</td>
                  <td>HAPPY DIWALI TO ALL </td>
                  
                  <td>rahul@simption.com</td>
                  <td>13-12-2022</td>
                  
                  <td><a href="{{url('/holiday-editHoliday')}}"><button type="button"  onclick="post_content('holiday/edit_holiday','id=84')" class="btn btn-success" >Edit</button></a>
			<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('84');" >Delete</button></td>
                </tr>
                               <tr>
                  <td>2</td>
                  <td>HOLI </td>
                  <td>29-11-2022</td>
                  <td>Tuesday</td>
                  <td>HAPPY HOLI </td>
                  
                  <td>rahul@simption.com</td>
                  <td>13-12-2022</td>
                  
                  <td><button type="button"  onclick="post_content('holiday/edit_holiday','id=85')" class="btn btn-success" >Edit</button>
			<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('85');" >Delete</button></td>
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
@include('common.footer')