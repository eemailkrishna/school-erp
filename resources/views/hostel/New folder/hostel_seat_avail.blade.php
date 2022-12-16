
     <section class="content-header">
      <h1>
        Hostel Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	     <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	    <li class="active">Hostel List</a></li>
     </ol>
    </section>
    
<script>
function hostel_detail(value){
$("#bed_detail").html(loader_div);
$.ajax({
type: "POST",
url: access_link+"hostel/seat_avail.php?hostel_name="+value+"",
cache: false,
success: function(detail){
$("#bed_detail").html(detail);
}
});
}
</script>

	<!---*****************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Seat Availability</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >
			<form method="post">
			  <div class="col-md-12">
						<div class="col-md-3"></div>
						<div class="col-md-6">
						<div class="form-group">
						<label>Select Hostel</label>
						<select name="hostel_name" id="hostel_name" class="form-control" onchange="hostel_detail(this.value);" >
						<option value=''>Select</option>
												<option value="gbssss">gbssss</option>
												<option value="TS BOYS HOSTEL">TS BOYS HOSTEL</option>
												<option value="TSRD GIRLS HOSTEL">TSRD GIRLS HOSTEL</option>
												<option value="v boys hostel">v boys hostel</option>
												</select>
						</div>
						</div>
						<div class="col-md-3"></div>
		     		</div>
						<div class="col-md-12" id="bed_detail">

						</div>
                    </div> 
                </form>	
		    </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>