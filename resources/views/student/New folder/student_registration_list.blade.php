    <section class="content-header">
      <h1>
        Student Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
	  <li class="active">Student Registration List</li>
      </ol>
    </section>
	
<script>
function valid(student_roll_no,student_date_of_admission,student_registration_fee){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
registration_delete(student_roll_no,student_date_of_admission,student_registration_fee);      
 }            
else  {      
return false;
 }       
  } 
  function registration_delete(student_roll_no,student_date_of_admission,student_registration_fee){

$("#get_content").html(loader_div);
$.ajax({
type: "POST",
url: access_link+"student/student_registration_delete.php?id="+student_roll_no+"&date="+student_date_of_admission+"&amount="+student_registration_fee+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   get_content('student/student_registration_list');
			   }else{
              //  alert(detail); 
			   }
}
});
}
</script>

	<!---******************************************************************************************************-->
 <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
    <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
            <h3 class="box-title">Registration List</h3>
            </div>
 <div class="box-body ">
     	 <div class="col-md-3">	
					<div class="form-group" >
					    <label>Class</label>
							<select name="student_class" onchange="for_list(this.value);" class="form-control" required>
						       <option value="All">All</option>
						       						       <option value="NURSERY">NURSERY</option>
					     						       <option value="LKG">LKG</option>
					     						       <option value="UKG">UKG</option>
					     						       <option value="1ST">1ST</option>
					     						       <option value="2ND">2ND</option>
					     						       <option value="3RD">3RD</option>
					     						       <option value="4TH">4TH</option>
					     						       <option value="5TH">5TH</option>
					     						       <option value="6TH">6TH</option>
					     						       <option value="7TH">7TH</option>
					     						       <option value="8TH">8TH</option>
					     						       <option value="9TH">9TH</option>
					     						       <option value="10TH">10TH</option>
					     						       <option value="11TH">11TH</option>
					     						       <option value="12TH">12TH</option>
					     					    </select>
					</div>
				</div>
	<div class="col-md-12">
                <!-- /.box -->

                <div <div class="box box-success" >>
                <div class="box-header with-border">
                </div>
			
		<div class="box-body table-responsive" id="search_list">
				  <table id="example1" class="table table-bordered table-striped">
						<thead >
							             <tr>
				  <th>S.No</th>
				  <th>student Name</th>
				  <th>Father's Name</th>
				  <th>Class</th>
				  <th>Father Contact No.</th>
				  <th>Registration Date</th>
                  <!--<th>Remark</th>-->
                  <th>Reg. No.</th>
                  <th>Update By</th>
                  <th>Date</th>
                 <th>Make Admission</th>
                 <th>Print</th>
                 <th>Print Fee Reciept</th>
				  <th>Delete</th>
                </tr>
						</thead>
				 </table>
			</div>
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
 for_list('All');
})
   function for_list(student_class){
    var dataTable=$('#example1').DataTable({
                destroy: true,
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:access_link+"student/student_registration_list_fatch.php?student_class="+student_class,
                    type:"post"
                }
            });
    }
</script>