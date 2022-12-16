<script>
$("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"hostel/hostel_details_api.php",
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
				   get_content('hostel/hostel_list');
            }
			}
         });
      });
</script>
     <section class="content-header">
      <h1>
        Hostel Management        <small> Control Panel</small>
      </h1>
    <ol class="breadcrumb">
	    <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	    <li><a href="javascript:get_content('hostel/hostel_list')"><i class="fa fa-bed"></i>Hostel List</a></li>
	    <li class="Active">Hostel Details</li>
	</ol>
    </section>


	
	
	<!---****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
		 
            <div class="box-header with-border ">
              <h3 class="box-title"> Registration</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
		<div class="box-body">	
	    	<form method="post" enctype="multipart/form-data" id="my_form">
			<input type="hidden" name="s_no" value="18" />
     <div class="box-body">
	 <h3 style="color:#d9534f;"><b>Hostel Info</b></h3>
		    <div class="col-md-4 ">
					<div class="form-group">
						<label> Hostel Name</label>
						<input type="text"  name="hostel_name"   placeholder="Hostel Name"  value="TSRD GIRLS HOSTEL" class="form-control " >
					</div>
				</div><div class="col-md-4 ">
					<div class="form-group">
						<label> Hostel type</label>
						<select name="hostel_type" class="form-control">
						  <option value="Girls">Girls</option>
						  <option value="Boys">Boys</option>
						  <option value="Girls">Girls</option>
						  <option value="Both">Both</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label> No. of Room</label>
						<input type="number"  name="hostel_number_of_room"   placeholder="Room Number"  value="1000" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label> Total Capacity</label>
						<input type="number"  name="hostel_total_capacity"   placeholder="Room Number"  value="1000" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label> Facilities</label>
						<select name="hostel_facility" class="form-control">
						  <option value="A.C">A.C</option>
						  <option value="Ac">Ac</option>
						  <option value="NonAc">NonAc</option>
						  <option value="Cooler">Cooler</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label> Laundry Services</label>
						<select class="form-control" name="hostel_laundry">
						<option value="Yes">Yes</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label> Mess</label>
						<select class="form-control" name="hostel_mess">
						<option value="Yes">Yes</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select>
					</div>
				</div>
			 <div class="col-md-4 ">
					<div class="form-group">
						<label> Warden Name</label>
						<input type="text" class="form-control" name="hostel_warden_name" value="">
					</div>
				</div>
			
				<div class="col-md-12 ">
					<div class="form-group">
						<center><button type="submit" name="submit" class="btn btn-primary">Update Details</button></center>
					</div>
				</div>
			</div>
			</form>
			</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
		  	
          </div>
		
    </div>
</section>
