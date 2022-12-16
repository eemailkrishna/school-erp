<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
admission_delete(s_no);       
 }            
else  {      
return false;
 }       
  } 
function admission_delete(s_no){
	      $("#get_content").html(loader_div);
$.ajax({
type: "POST",
url: access_link+"student/student_admission_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted',"red");
				   get_content('student/student_admission_list');
			   }else{
              //  alert_new(detail); 
			   }
}
});
}
</script>
<script>
function check_function(){
$("#search_list").html(loader_div);
 if($("#all_medium").prop("checked")==true){
    var value="Yes";
 }else{
     var value="No";
 }
    $.ajax({
    type: "POST",
    url: access_link+"student/student_admission_filter_checked.php?checked="+value+"",
    cache: false,
    success: function(detail){
    $("#search_list").html(detail);
    }
    });
}
</script>
    <section class="content-header">
      <h1>
        Student Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
      <li class="active">Student Admission List</li>
      </ol>
    </section>
	

	<!---******************************************************************************************************-->
 <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
            <h3 class="box-title">Admission List</h3>
			  <script>
  function  for_list(){
  if (document.getElementById('g1').checked) {
  var gender = document.getElementById('g1').value;
  }else if (document.getElementById('g2').checked) {
  var gender = document.getElementById('g2').value;
  }else if (document.getElementById('g3').checked) {
  var gender = document.getElementById('g3').value;
  }else if (document.getElementById('g4').checked) {
  var gender = document.getElementById('g4').value;
  }
   
  if (document.getElementById('r1').checked) {
  var religion = document.getElementById('r1').value;
  }else if (document.getElementById('r2').checked) {
  var religion = document.getElementById('r2').value;
  }else if (document.getElementById('r3').checked) {
  var religion = document.getElementById('r3').value;
  }else if (document.getElementById('r4').checked) {
  var religion = document.getElementById('r4').value;
  }else if (document.getElementById('r5').checked) {
  var religion = document.getElementById('r5').value;
  }else if (document.getElementById('r6').checked) {
  var religion = document.getElementById('r6').value;
  }else if (document.getElementById('r7').checked) {
  var religion = document.getElementById('r7').value;
  }else if (document.getElementById('r8').checked) {
  var religion = document.getElementById('r8').value;
  }
  if (document.getElementById('c1').checked) {
  var caste = document.getElementById('c1').value;
  }else if (document.getElementById('c2').checked) {
  var caste = document.getElementById('c2').value;
  }else if (document.getElementById('c3').checked) {
  var caste = document.getElementById('c3').value;
  }else if (document.getElementById('c4').checked) {
  var caste = document.getElementById('c4').value;
  }else if (document.getElementById('c5').checked) {
  var caste = document.getElementById('c5').value;
  }else if (document.getElementById('c6').checked) {
  var caste = document.getElementById('c6').value;
  }
 
  var age=document.getElementById('a').value;
  var scheme=document.getElementById('student_admission_scheme').value;
  var type=document.getElementById('student_admission_type').value;
  var student_class=document.getElementById('student_class').value;
  var student_class_stream=document.getElementById('student_class_stream').value;
  var student_class_group=document.getElementById('student_class_group').value;
  var student_class_section=document.getElementById('student_class_section').value;
  var bus_fee_category_name=document.getElementById('bus_fee_category_name').value;
  
  var sort_by=document.getElementById('sort_by').value;
       var dataTable=$('#example1').DataTable({
                destroy: true,
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:access_link+"student/student_admission_list_fatch.php?gender="+gender+"&student_class_group="+student_class_group+"&student_class_stream="+student_class_stream+"&religion="+religion+"&caste="+caste+"&age="+age+"&scheme="+scheme+"&type="+type+"&student_class="+student_class+"&student_class_section="+student_class_section+"&bus_fee_category_name="+bus_fee_category_name+"&sort_by="+sort_by+"",
                    type:"post"
                }
            });
  
  /*$.ajax({
  
		  type: "POST",
		  url: access_link+"student/ajax_filter_student_admission_list.php?gender="+gender+"&student_class_group="+student_class_group+"&student_class_stream="+student_class_stream+"&religion="+religion+"&caste="+caste+"&age="+age+"&scheme="+scheme+"&type="+type+"&student_class="+student_class+"&student_class_section="+student_class_section+"&bus_fee_category_name="+bus_fee_category_name+"&sort_by="+sort_by+"",
		  cache: false,
		  success: function(detail){
		$('#search_list').html(detail);
		$('#example1').DataTable();
		  }
	   });
*/
  
  }
  </script>
  <script>	
function for_stream(value2){
if(value2=="11TH" || value2=="12TH"){
$("#student_class_stream_div").show();
$("#student_class_group_div").show();
}else{
$("#student_class_stream_div").hide();
$("#student_class_group_div").hide();
}
}
function get_group(value1){
         if(value1!='All'){
              $('#student_class_group').html("<option value='' >Loading....</option>"); 
       $.ajax({
			  type: "POST",
              url: access_link+"student/ajax_stream_group_all.php?stream_name="+value1+"",
              cache: false,
              success: function($detail1){
                   var str1 =$detail1;                
        
                  $("#student_class_group").html(str1);
              }
           });
}else{
$("#student_class_group").html('');
}
    }
</script>
    <script type="text/javascript">
   function for_section(value){
        $('#student_class_section').html("<option value='' >Loading....</option>"); 
       $.ajax({
			  type: "POST",
              url: access_link+"student/ajax_class_section_all.php?class_name="+value+"",
              cache: false,
              success: function($detail){
                   var str =$detail;                
                 
                  $("#student_class_section").html(str);
				 
              }
           });

    }
</script>
		

                        <div class="input-group-btn" >
						  <select  name="sort_by" class="btn btn-info " id="sort_by" onchange="for_list();" >
						  <option value=" ORDER BY s_no DESC">Sort By</option>
						  <option value=" ORDER BY student_name ASC">Name</option>
						  <option value=" ORDER BY student_class ASC">Classwise</option>
						  <option value=" ORDER BY student_class_section ASC">Section</option>
						  <option value=" ORDER BY student_father_name ASC">Father</option>
						  <option value=" ORDER BY school_roll_no ASC">Roll No.</option>
						  <option value=" ORDER BY CAST(student_date_of_admission AS UNSIGNED) ASC">Roll No.</option>
						  </select>
						 <a href="javascript:get_content('student/student_admission_list')"><button style="float:right;" type="button" class="btn btn-info my_background_color" >Reset</button></a>
						<button style="float:right;" type="button" class="btn btn-info" onclick="myFunction()" data-toggle="collapse" data-target="#demo">Filter</button>
						</div>
					
					 
			<form  oninput="x.value=parseInt(a.value)" id="demo" class="collapse" method="post">
					
		
				 
				<div class="col-md-4 ">				
					 <div class="form-group" >
						<label >Class</label><br>
						 <select name="student_class" onchange="for_section(this.value);for_list();for_stream(this.value);" id="student_class" class="form-control" required>
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
				
				<div class="col-md-4 " id="student_class_stream_div" style="display:none;">				
					<div class="form-group">
					  <label >Stream<font style="color:red"><b>*</b></font></label>
					    <select class="form-control" name="student_class_stream" id="student_class_stream" onchange="get_group(this.value);for_list();" required>
					           <option  value="All">All</option>
						       						       <option value="SCIENCE">SCIENCE</option>
					           						       <option value="ARTS">ARTS</option>
					           						       <option value="Commerce ">Commerce </option>
					           					    </select>
					  </select>
					</div>
				</div>
								<div class="col-md-4 " id="student_class_group_div" style="display:none;">				
					<div class="form-group">
					  <label >Group<font style="color:red"><b>*</b></font></label>
					    <select class="form-control" name="student_class_group" id="student_class_group" onchange='for_list();' required>
						<option  value="">Select Group</option>
					    </select>
					  </select>
					</div>
				</div>
				<div class="col-md-4 ">				
					 <div class="form-group" >
						<label >Section</label><br>
						  <select class="form-control" name="student_class_section" id="student_class_section" onchange='for_list();' required>
					     <option value="All">All</option>
					    </select>
					</div>
				</div>
			    <div class="col-md-4 ">				
					 <div class="form-group" >
						<label >Gender</label><br>
						<div class="form-control">
							<input type="radio" name="student_gender" onclick="for_list();" id="g3" value="Both" checked>&nbsp;&nbsp;<b>Both</b>
							<input type="radio" name="student_gender" onclick="for_list();" id="g1" value="Male">&nbsp;&nbsp;<b>Male</b>&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="student_gender" onclick="for_list();" id="g2" value="Female">&nbsp;&nbsp;<b>Female</b>&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="student_gender" onclick="for_list();" id="g4" value="Other">&nbsp;&nbsp;<b>Other</b>&nbsp;&nbsp;&nbsp;&nbsp;
						</div>
					</div>
				</div>
				<div class="col-md-4 ">				
					 <div class="form-group" >
					  <label >Religion</label><br>
						<div class="form-control">
							<input type="radio" name="student_religion" onclick="for_list();" id="r5" value="All" checked>&nbsp;&nbsp;<b>All</b>
							<input type="radio" name="student_religion" onclick="for_list();" id="r1" value="Hindu">&nbsp;<b>Hindu</b>
							<input type="radio" name="student_religion" onclick="for_list();" id="r2" value="Muslim">&nbsp;<b>Muslim</b>
							<input type="radio" name="student_religion" onclick="for_list();" id="r3" value="Sikh">&nbsp;<b>Sikh</b>
							<input type="radio" name="student_religion" onclick="for_list();" id="r4" value="Christian">&nbsp;<b>Christian</b>
								<input type="radio" name="student_religion" onclick="for_list();" id="r7" value="Jain">&nbsp;<b>Jain</b>
							<input type="radio" name="student_religion" onclick="for_list();" id="r8" value="Buddh">&nbsp;<b>Buddh</b>
							<input type="radio" name="student_religion" onclick="for_list();" id="r6" value="Other">&nbsp;<b>Other</b>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 ">				
					 <div class="form-group" >
					  <label >Catagory</label><br>
						<div class="form-control">
							<input type="radio" name="student_category" onclick="for_list();" id="c5" value="All" checked>&nbsp;<b>All</b>
							<input type="radio" name="student_category" onclick="for_list();" id="c1" value="General">&nbsp;<b>General</b>&nbsp;
							<input type="radio" name="student_category" onclick="for_list();" id="c2" value="OBC">&nbsp;<b>OBC</b>&nbsp;
							<input type="radio" name="student_category" onclick="for_list();" id="c3" value="SC">&nbsp;<b>SC</b>&nbsp;
							<input type="radio" name="student_category" onclick="for_list();" id="c4" value="ST">&nbsp;<b>ST</b>&nbsp;
							<input type="radio" name="student_category" onclick="for_list();" id="c6" value="Other">&nbsp;<b>Other</b>&nbsp;
							
						</div>
					</div>
				</div>
				<div class="col-md-4 ">				
					 <div class="form-group" >
					  <label >Scheme</label>
					  <select class="form-control" name="student_admission_scheme" id="student_admission_scheme" onchange="for_list();" >
					  <option value="All">All</option>
					  <option value="NON-RTE">NON-RTE</option>
					  <option value="RTE">RTE</option>
					  </select>
					</div>
				 </div>
			
				<div class="col-md-4 ">				
					<div class="form-group" >
						  <label >Admission Type</label>
						  <select class="form-control" name="student_admission_type" id="student_admission_type" onchange="for_list();" >
						  <option value="All">All</option>
						  <option value="Regular">Regular</option>
						  <option value="Private">Private</option>
						  </select>
					</div>
				</div>
				<div class="col-md-4 ">
					 <label>Age (In Years)</label>
					 <div class="input-group">
					<input style="width:100%;" type="range" name="student_date_of_birth" id="a" value="0" oninput="for_list();" >
					 <span class="input-group-addon" style="padding:0px;">
					 <input style="color:red;font-size:20px;width:100px;" name="x" style="border:none;" >
					 </span>
					</div>
				</div>
				<div class="col-md-4">
					 <label>Bus Category</label>
				     <select class="form-control select2" name="bus_fee_category_name" id="bus_fee_category_name" style="width:100%" onchange="for_list();">
					           <option  value="All">All</option>
						       								<option value="busfee1">NASRULLAGANJ</option>
																<option value="busfee2">RALA</option>
																<option value="busfee3">BORKHEDA</option>
																<option value="busfee4">MP</option>
																<option value="busfee5">subhas nagar</option>
																<option value="busfee6">20000</option>
																<option value="busfee7">mp nagar</option>
																<option value="busfee8">ashoka garden</option>
																<option value="busfee9">kolar</option>
																<option value="busfee10">bardi</option>
																<option value="busfee11">mp.nagar</option>
																<option value="busfee12">arwind vihar</option>
																<option value="busfee13">kalpna nagar</option>
																<option value="busfee14">KHANDAKPAR</option>
																<option value="busfee15">Bhel </option>
																<option value="busfee16">MOD</option>
																<option value="busfee17">mp nagar</option>
																<option value="busfee18">mp nagar</option>
																<option value="busfee19">mp nagar </option>
													 </select>
				</div>
				
		</form>	
            
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>			
            </div>
                    
 <div class="box-body ">
	<div class="col-md-12">
                <!-- /.box -->

                <div <div class="box box-success" >>
                    
                <div class="box-header with-border">
                </div>

		<div class="box-body table-responsive" id="search_list">
				  <table id="example1" class="table table-bordered table-striped">
						<thead >
								<tr>
								  <th>#</th>
								  <th>student Name</th>
								  <th>Father's Name</th>
								  <th>Class</th>
								  <th>Stream</th>
								  <th>Father Contact No.</th>
								  <th>student DOB</th>
								  <th>student Age</th>
								  <th>Student Roll No</th>
								  <th>Admission No</th>
								                                  <th>Update By</th>
                                <th>Date</th>
								 
								  <th>Edit</th>
								  <th>Delete</th>
								  <th>Print</th>
								  <th>Scholar Print</th>
								</tr>
						</thead>
					<tbody>
					

					</tbody>
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
    <!-- /.content -->
 

<script>
  $(function (){
    for_list();
  })
</script>