<script type="text/javascript">
   function for_list(){
			$("#example2").html(loader_div);
			var emp_categories=document.getElementById("emp_categories").value;
		//	alert(emp_categories);
		$.ajax({
			  type: "POST",
              url: access_link+"staff/ajax_rfid_get.php?emp_categories="+emp_categories+"",
              cache: false,
              success: function(detail){

            $('#example2').html(detail);
			//$("#click").click();
              }
           });
    }
	    $("#my_form").submit(function(e){
        e.preventDefault();
 $('#modal-default').modal('hide');

    var formdata = new FormData(this);
			
        $.ajax({
            url: access_link+"staff/rfid_card_generate_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
               var res=detail.split("|?|");
				//   alert(res[1]);
				var emp_categories=document.getElementById("emp_categories").value;
				 $("#staff_rf_id_number").val("");
				
	for_list();
            
			}
         });
      });
</script>

    <section class="content-header">
      <h1>
        Employee Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-graduation-cap"></i> Employee</a></li>
	  <li class="active">Staff RFID Card</li>
      </ol>
    </section>
	

    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Assign RFID</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body ">
			<form role="form"  method="post"  enctype="multipart/form-data" id="my_form">
							
			 <div class="col-md-4 ">	
		  <div class="form-group">
				<label>Staff type :</label>
				<select name="staff_type" id="emp_categories" class="form-control" onchange="for_list();" required>
				<option 	 value="Teaching">Teaching </option>
				<option value="Non Teaching">Non Teaching </option>
				</select>
			  </div>
				</div>

				

				
				
				<div class="col-xs-12">
                <!-- /.box -->

                <div <div class="box box-success" >>
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive" id="example2">
                <table  class="table table-bordered table-striped">
                <thead >
                <tr>
				  <th>S.no.</th>
                  <th>Staff Name</th>
                  <th>Employee ID</th>
                  <th>Designation</th>
                  <th>Contact</th>
				  <th>Rfid No.</th>
				  
				  <th>Update By</th>
                  <th>Date</th>
				  
                  <th>Action</th>
                </tr>
                </thead>
				<tbody >
		        </tbody>
                </table>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
				 <!-- modal-box-open -->
			         		<form role="form"  method="post" enctype="multipart/form-data">
	                         <div class="modal fade" id="modal-default">
							 <div class="modal-dialog">
							     
							 <div class="modal-content">
							 <div class="modal-header my_background_color">
							 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span></button>
							 <center><h4 class="modal-title"><b>ADD RFID CARD NO</b></h4></center>
							 </div>
							 <div class="modal-body">
									 
						     <div class="form-group">
						     <label>Staff Name<font style="color:red"><b>*</b></font></label>
						     <input type="text" class="form-control" name="staff_name" id="staff_name"  readonly />
						     </div>
					         <div class="form-group" style="display:none">
					         <input type="hidden" class="form-control" name="employee_id" id="employee_id"  readonly>
							 </div>
							 <div class="form-group">
						     <label>Add RFID</label>
						     <input type="text" name="staff_rf_id_number" id="staff_rf_id_number" autofocus class="form-control"  />
						     </div>
							 </div>
							 <div class="modal-footer ">
							 <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
							 <input type="submit" name="submit" value="Submit" class="btn btn-primary" >
							 </div>
							 </div>
							 </div>
							 </div>
					      </form>			
			              <!-- modal-box-end -->
		  <div class="col-md-12" style="display:none">
		        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
		  </div>
		  </form>
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

 
<script>
	function open_model(roll_no){
	var student=document.getElementById("emp_name_"+roll_no).value;
	document.getElementById("staff_name").value=student;
	document.getElementById("employee_id").value=roll_no;
	}
	
</script>
<script>

	for_list();
</script>
