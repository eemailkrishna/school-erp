<script>
function for_section(class_name){
$('#student_section').html("<option value='' >Loading....</option>");
$.ajax({
type: "POST",
url: access_link+"time_table/ajax_class_section.php?class_name="+class_name+"",
cache: false,
success: function(detail){
$("#student_section").html(detail);
for_stream(class_name);
get_time_table();
  }
});
}

function get_time_table(){

var class_name=document.getElementById('student_class').value;
var class_section=document.getElementById('student_section').value;
var student_class_group=document.getElementById('student_class_group').value;
var student_class_stream=document.getElementById('student_class_stream').value;
var t=0;
if(class_name=='class14' || class_name=='class15'){
if(student_class_group!='' && student_class_stream!=''){
t=1;
}
}else{
t=1;
}
if(class_name!='' && class_section!='' && t==1){
$('#time_table_list1').html(loader_div);
$.ajax({
type: "POST",
url: access_link+"time_table/ajax_time_table_list.php?class="+class_name+"&section="+class_section+"&student_class_stream="+student_class_stream+"&student_class_group="+student_class_group+"",
cache: false,
success: function(detail){
$("#time_table_list1").html(detail);
  }
});
}else{
$("#time_table_list1").html('');
}
}
function for_stream(value2){
		   if(value2=="class14" || value2=="class15"){
$("#student_class_stream_div").show();
$("#student_class_group_div").show();
$("#student_class_group_subject_div").show();
$("#student_class_stream").attr('required',true);
$("#student_class_group").attr('required',true);
}else{
$("#student_class_stream_div").hide();
$("#student_class_group_div").hide();
$("#student_class_group_subject_div").hide();
$("#student_class_stream").attr('required',false);
$("#student_class_group").attr('required',false);
}
}

function get_group(value1){
        $('#student_class_group').html("<option value='' >Loading....</option>");
        $.ajax({
        type: "POST",
        url: access_link+"time_table/ajax_stream_group.php?stream_name="+value1+"",
        cache: false,
        success: function(detail1){
        //alert_new(detail1);
        $("#student_class_group").html(detail1);
        }
        });
    }

</script>

    <section class="content-header">
      <h1>
        Time Table Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li><a href="javascript:get_content('time_table/time_table')"><i class="fa fa-clock-o"></i> Time Table</a></li>
	  <li class="active">Time Table List</li>
      </ol>
    </section>
	
	
    <section class="content">
      <div class="row">
        <div class="col-md-12">
         
          <!-- /.box -->

          <div <div class="box box-success" >>
            <div class="box-header with-border">
              <h3 class="box-title">Time Table List</h3>
            </div>
			      <div class="box-body "  >
				 <div class="col-md-3 ">	
				<div class="form-group">
				<label>Class</label>
				<select name="student_class1" id="student_class"  class="form-control" onchange="for_section(this.value);get_time_table();" required>
					<option value="">Select</option>
										<option value="class1">NURSERY</option>
										<option value="class2">LKG</option>
										<option value="class3">UKG</option>
										<option value="class4">1ST</option>
										<option value="class5">2ND</option>
										<option value="class6">3RD</option>
										<option value="class7">4TH</option>
										<option value="class8">5TH</option>
										<option value="class9">6TH</option>
										<option value="class10">7TH</option>
										<option value="class11">8TH</option>
										<option value="class12">9TH</option>
										<option value="class13">10TH</option>
										<option value="class14">11TH</option>
										<option value="class15">12TH</option>
									</select>
				<input type="hidden" id="class_code_hidden" name="class_code_hidden" />
			  </div>
			  	</div>
									<div class="col-md-3 " id="student_class_stream_div" style="display:none;">				
					<div class="form-group">
					  <label >Stream</label>
					    <select class="form-control" name="student_class_stream" id="student_class_stream" onchange="get_group(this.value);get_time_table();" >
					           <option  value="">Select Stream</option>
						       						       <option value="stream1">SCIENCE</option>
					           						       <option value="stream2">ARTS</option>
					           						       <option value="stream5">Commerce </option>
					           					    </select>
					
					</div>
				</div>
								<div class="col-md-3 " id="student_class_group_div" style="display:none;">				
					<div class="form-group">
					  <label >Group</label>
					      <select class="form-control" name="student_class_group" id="student_class_group" onchange="get_time_table();" >
					           <option  value="">Select Group</option>
					    </select>
					  </select>
					</div>
				</div>
			   <div class="col-md-3 ">	
			  <div class="form-group">
				<label>Section</label>
				<select name="student_section" id="student_section" class="form-control" onchange="get_time_table();"  required>
					<option value="">Select</option>
				</select>
			  </div>
					</div>
		<div class="col-md-12">
            <div class="box-body table-responsive">
              <table id="example2" class="table table-bordered table-striped">
                <thead >
                <tr>
	    <th>S.no.</th>
        <th>Class</th>
		<th>Section</th>
		
		<th>Update By</th>
        <th>Date</th>
		
		<th>Print</th>
        </tr>
        </thead>
		<tbody id="time_table_list1">
        </tbody>
             </table>
            </div>
       	</div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
    
  </div>
<script>
$(function () {
$('#example2').DataTable()
})
</script>
