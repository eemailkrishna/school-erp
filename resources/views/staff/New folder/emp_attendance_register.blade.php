
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Employee Attendance Register
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-money"></i> Staff</a></li>
	  <li class="active">Employee Attendance Register</li>
      </ol>
    </section>
	<script>
	function for_check(id){
   if($('#'+id).prop("checked") == true){
	$("."+id).each(function() {
	$(this).prop('checked',true);
	});
    }else{
	$("."+id).each(function() {
	$(this).prop('checked',false);
	});
   }
   }
   
   function validation(){
   var add=0;
   $(".checked1").each(function() {
	if($(this).prop("checked") == true){
	add=add+1;
	}
	});
    if(add>0){
	return true;
	}else{
	alert_new("Please Select Atleast One Employee !!!",'red');
	return false;
	}
   }
   
       $("#my_form").submit(function(e){
        e.preventDefault();
    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"staff/emp_attendance_register_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
				
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				   get_content('staff/emp_attendance_register');
            }
			}
         });
      });
   
	</script>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	<form id="my_form" method="post" enctype="multipart/form-data">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div <div class="box box-success" >>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <div class="col-sm-12">&nbsp;</div>
              <div class="col-sm-12">
			  
              <div class="col-sm-2">
			  </div>
              <div class="col-sm-8">
			  <div class="container-fluid">
			  <div class="panel panel-default">
			  <div class="panel-body">
			    <div class="col-sm-12">
				
				<table class="table table-bordered table-striped">
				<thead >
				<tr>
				<td>#</td>
				<td><input type="checkbox" id="checked1" onclick="for_check(this.id);" checked> All</td>
				<td>Empolyee Name</td>
				<td>Attendance Register</td>
				</tr>
				</thead>
				<tbody id="priority">
								<tr>
				<td><b>1.</b><input type="hidden" name="emp_id[]" class="form-control" value="19" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="0" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="kailash soni" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>2.</b><input type="hidden" name="emp_id[]" class="form-control" value="gtttsk280" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="1" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Sunita Bai" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>3.</b><input type="hidden" name="emp_id[]" class="form-control" value="281" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="2" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Rati " readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>4.</b><input type="hidden" name="emp_id[]" class="form-control" value="283" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="3" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Priyanka kaushik" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>5.</b><input type="hidden" name="emp_id[]" class="form-control" value="302" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="4" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="RAMKISHAN JI" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>6.</b><input type="hidden" name="emp_id[]" class="form-control" value="303" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="5" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="rima d" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>7.</b><input type="hidden" name="emp_id[]" class="form-control" value="309" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="6" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="nidhi" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option selected value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>8.</b><input type="hidden" name="emp_id[]" class="form-control" value="310" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="7" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="pooja " readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>9.</b><input type="hidden" name="emp_id[]" class="form-control" value="312" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="8" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="ufgv" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>10.</b><input type="hidden" name="emp_id[]" class="form-control" value="313" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="9" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Moniika" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>11.</b><input type="hidden" name="emp_id[]" class="form-control" value="315" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="10" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Monika" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>12.</b><input type="hidden" name="emp_id[]" class="form-control" value="789456123216320" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="11" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="shamli " readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>13.</b><input type="hidden" name="emp_id[]" class="form-control" value="322" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="12" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="kundan kumar jha" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>14.</b><input type="hidden" name="emp_id[]" class="form-control" value="323" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="13" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="JAGMAL YADAV" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>15.</b><input type="hidden" name="emp_id[]" class="form-control" value="328" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="14" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="rahul " readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>16.</b><input type="hidden" name="emp_id[]" class="form-control" value="hi331" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="15" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="eswari" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>17.</b><input type="hidden" name="emp_id[]" class="form-control" value="332" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="16" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="JAGMAL YADAV" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>18.</b><input type="hidden" name="emp_id[]" class="form-control" value="333" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="17" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="JAGMAL YADAV" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>19.</b><input type="hidden" name="emp_id[]" class="form-control" value="334" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="18" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="ABJISHEK LAND" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>20.</b><input type="hidden" name="emp_id[]" class="form-control" value="-335" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="19" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="TUSHAR SULTANE" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>21.</b><input type="hidden" name="emp_id[]" class="form-control" value="RP34641645336" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="20" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="PARVATI PATIL" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>22.</b><input type="hidden" name="emp_id[]" class="form-control" value="1337" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="21" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="ASHADUR RAHMAN MONDAL" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>23.</b><input type="hidden" name="emp_id[]" class="form-control" value="0338" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="22" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="TUSHAR" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>24.</b><input type="hidden" name="emp_id[]" class="form-control" value="340" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="23" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="VIVEK KUMAR" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>25.</b><input type="hidden" name="emp_id[]" class="form-control" value="123341" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="24" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="suresh Devashi" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>26.</b><input type="hidden" name="emp_id[]" class="form-control" value="86" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="25" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Amit Kumar Patra" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>27.</b><input type="hidden" name="emp_id[]" class="form-control" value="90" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="26" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Brahmarao" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>28.</b><input type="hidden" name="emp_id[]" class="form-control" value="91" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="27" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="srishti gusain" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>29.</b><input type="hidden" name="emp_id[]" class="form-control" value="92" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="28" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="HARSHALI SHAH" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>30.</b><input type="hidden" name="emp_id[]" class="form-control" value="93" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="29" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="tushar modi " readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>31.</b><input type="hidden" name="emp_id[]" class="form-control" value="94" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="30" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="DS SALUJA" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>32.</b><input type="hidden" name="emp_id[]" class="form-control" value="96" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="31" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="TUSHAR IYRE " readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option selected value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>33.</b><input type="hidden" name="emp_id[]" class="form-control" value="97" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="32" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Rajanikanta Mund" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>34.</b><input type="hidden" name="emp_id[]" class="form-control" value="99" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="33" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="kunal mourya" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>35.</b><input type="hidden" name="emp_id[]" class="form-control" value="101" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="34" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="MR. SANTOSH KUMAR SAHU" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>36.</b><input type="hidden" name="emp_id[]" class="form-control" value="102" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="35" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="MR. BHOOPENDRA LODHI " readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>37.</b><input type="hidden" name="emp_id[]" class="form-control" value="103" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="36" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Anjali ojha" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>38.</b><input type="hidden" name="emp_id[]" class="form-control" value="104" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="37" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="atul singh thakur " readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>39.</b><input type="hidden" name="emp_id[]" class="form-control" value="105" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="38" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="SANTOSH KUMAR SINGH" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>40.</b><input type="hidden" name="emp_id[]" class="form-control" value="107" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="39" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="rani" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>41.</b><input type="hidden" name="emp_id[]" class="form-control" value="108" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="40" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="KUMAR RAVIKANT" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option selected value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>42.</b><input type="hidden" name="emp_id[]" class="form-control" value="123456109" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="41" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="nikhil advin" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>43.</b><input type="hidden" name="emp_id[]" class="form-control" value="110" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="42" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="sadab" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>44.</b><input type="hidden" name="emp_id[]" class="form-control" value="111" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="43" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Ravi" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>45.</b><input type="hidden" name="emp_id[]" class="form-control" value="Samir 112" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="44" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Samir harle" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>46.</b><input type="hidden" name="emp_id[]" class="form-control" value="122" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="45" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="umesh mourya" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>47.</b><input type="hidden" name="emp_id[]" class="form-control" value="124" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="46" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Neelam jharbade" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>48.</b><input type="hidden" name="emp_id[]" class="form-control" value="125" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="47" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="anand sharma" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>49.</b><input type="hidden" name="emp_id[]" class="form-control" value="126" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="48" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="jitendra shriwash" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>50.</b><input type="hidden" name="emp_id[]" class="form-control" value="127" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="49" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="demo faculty" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>51.</b><input type="hidden" name="emp_id[]" class="form-control" value="128" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="50" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="VATAN VERMA" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>52.</b><input type="hidden" name="emp_id[]" class="form-control" value="129" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="51" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="user1" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>53.</b><input type="hidden" name="emp_id[]" class="form-control" value="Ok show130" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="52" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Pawan malviya" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>54.</b><input type="hidden" name="emp_id[]" class="form-control" value="131" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="53" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value=" teacher" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>55.</b><input type="hidden" name="emp_id[]" class="form-control" value="1132" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="54" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="ABHISHEK SINGH THAKUR" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option selected value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>56.</b><input type="hidden" name="emp_id[]" class="form-control" value="124489134" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="55" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="MONU KUMAR" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>57.</b><input type="hidden" name="emp_id[]" class="form-control" value="135" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="56" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="abhushek" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>58.</b><input type="hidden" name="emp_id[]" class="form-control" value="137" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="57" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Supriya tiwari" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>59.</b><input type="hidden" name="emp_id[]" class="form-control" value="138" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="58" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Yashpal Kr" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>60.</b><input type="hidden" name="emp_id[]" class="form-control" value="29002139" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="59" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="VAISHNAVI AGRWAL" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option selected value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>61.</b><input type="hidden" name="emp_id[]" class="form-control" value="2901140" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="60" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="KAREEM RANA" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option selected value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>62.</b><input type="hidden" name="emp_id[]" class="form-control" value="AAAA141" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="61" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="PALWINDER KAUR" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>63.</b><input type="hidden" name="emp_id[]" class="form-control" value="142" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="62" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Supriya Santosh" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>64.</b><input type="hidden" name="emp_id[]" class="form-control" value="143" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="63" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="MD JAHIR KHAN" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>65.</b><input type="hidden" name="emp_id[]" class="form-control" value="144" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="64" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Supriya Santosh" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>66.</b><input type="hidden" name="emp_id[]" class="form-control" value="S145" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="65" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Mr Daya Nand Tiwari" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option selected value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>67.</b><input type="hidden" name="emp_id[]" class="form-control" value="146" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="66" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="satyaprakash yadav" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>68.</b><input type="hidden" name="emp_id[]" class="form-control" value="148" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="67" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Neelam jharbade" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>69.</b><input type="hidden" name="emp_id[]" class="form-control" value="149" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="68" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Tribhuwan Kumar" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>70.</b><input type="hidden" name="emp_id[]" class="form-control" value="150" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="69" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="SURAJ KUMAR SINGH" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>71.</b><input type="hidden" name="emp_id[]" class="form-control" value="152" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="70" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="umesh" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option selected value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>72.</b><input type="hidden" name="emp_id[]" class="form-control" value="153" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="71" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Shiwanand Tiwari" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option selected value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>73.</b><input type="hidden" name="emp_id[]" class="form-control" value="154" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="72" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="suresh soni" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option selected value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>74.</b><input type="hidden" name="emp_id[]" class="form-control" value="222155" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="73" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="RAYEES" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option selected value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>75.</b><input type="hidden" name="emp_id[]" class="form-control" value="156" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="74" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="ANAYAT ULLAH" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option selected value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>76.</b><input type="hidden" name="emp_id[]" class="form-control" value="157" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="75" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="xxx" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option selected value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>77.</b><input type="hidden" name="emp_id[]" class="form-control" value="158" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="76" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="AAA" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option selected value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>78.</b><input type="hidden" name="emp_id[]" class="form-control" value="159" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="77" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="AA" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option selected value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>79.</b><input type="hidden" name="emp_id[]" class="form-control" value="166" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="78" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="JAVID" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>80.</b><input type="hidden" name="emp_id[]" class="form-control" value="199" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="79" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Mohit nagar" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>81.</b><input type="hidden" name="emp_id[]" class="form-control" value="85" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="80" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Premshankar Yadav" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option selected value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>82.</b><input type="hidden" name="emp_id[]" class="form-control" value="87" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="81" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Sibdutta Negi" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>83.</b><input type="hidden" name="emp_id[]" class="form-control" value="292" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="82" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="JAGMAL YADAV" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>84.</b><input type="hidden" name="emp_id[]" class="form-control" value="15" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="83" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="kailash soni" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>85.</b><input type="hidden" name="emp_id[]" class="form-control" value="70" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="84" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="suresh soni" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option selected value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>86.</b><input type="hidden" name="emp_id[]" class="form-control" value="71" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="85" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="rohan" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option selected value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>87.</b><input type="hidden" name="emp_id[]" class="form-control" value="74" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="86" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="DEMO" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option selected value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>88.</b><input type="hidden" name="emp_id[]" class="form-control" value="75" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="87" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="shreya sharma" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option selected value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>89.</b><input type="hidden" name="emp_id[]" class="form-control" value="78" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="88" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="pravin" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option selected value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>90.</b><input type="hidden" name="emp_id[]" class="form-control" value="79" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="89" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="sanjay" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option selected value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>91.</b><input type="hidden" name="emp_id[]" class="form-control" value="81" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="90" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Pankajini Patra" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option selected value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>92.</b><input type="hidden" name="emp_id[]" class="form-control" value="95" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="91" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="AYUSH" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option selected value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>93.</b><input type="hidden" name="emp_id[]" class="form-control" value="29" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="92" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Abhul Rjaak " readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option selected value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>94.</b><input type="hidden" name="emp_id[]" class="form-control" value="82" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="93" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Jyoti Ranjan Patra" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>95.</b><input type="hidden" name="emp_id[]" class="form-control" value="83" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="94" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Goutam Kumar Das" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option selected value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>96.</b><input type="hidden" name="emp_id[]" class="form-control" value="1147" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="95" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="praveen" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option selected value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>97.</b><input type="hidden" name="emp_id[]" class="form-control" value="001175" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="96" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Hansraj" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option selected value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>98.</b><input type="hidden" name="emp_id[]" class="form-control" value="261" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="97" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="PRAKASH KUMAWAT" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option selected value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>99.</b><input type="hidden" name="emp_id[]" class="form-control" value="136" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="98" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Teacher" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>100.</b><input type="hidden" name="emp_id[]" class="form-control" value="80" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="99" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Rashi Saxena" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option selected value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>101.</b><input type="hidden" name="emp_id[]" class="form-control" value="84" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="100" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Human Ram Bhati" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>102.</b><input type="hidden" name="emp_id[]" class="form-control" value="151" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="101" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="Rohit " readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option  value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								<tr>
				<td><b>103.</b><input type="hidden" name="emp_id[]" class="form-control" value="20" readonly /></td>
				<td><input type="checkbox" class="checked1" checked value="102" name="emp_index[]"></td>
				<td><input type="text" name="emp_name[]" class="form-control" value="jay kishan" readonly /></td>
				<td>
				  <select name="emp_attendance_register[]" class="form-control">
			        <option value="">Select</option>
			        			        <option selected value="Register1">Register1</option>
			        			        <option  value="Register2">Register2</option>
			        			        <option  value="Register3">Register3</option>
			        			        <option  value="Register4">Register4</option>
			        			        <option  value="Register5">Register5</option>
			        			        <option  value="Register6">Register6</option>
			        			        <option  value="Register7">Register7</option>
			        			        <option  value="Register8">Register8</option>
			        			        <option  value="Register9">Register9</option>
			        			        <option  value="Register10">Register10</option>
			        			      </select>  
				</td>
				</tr>
								</tbody>
				<tfoot>
				
				<tr>
				<td colspan="6"><center><input type="submit" name="submit" value="Update" onclick="return validation();" class="btn btn-success" /></center></td>
				</tr>
				
				</tfoot>
				</table>
				
				</div>
			  </div>
			  </div>
			  </div>
			  </div>
			  <div class="col-sm-2"></div>
			  
			  </div>
			</div>
		</div>
	</div>
  </div>
      <!-- /.row -->
  </section>
  </form>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>