<script type="text/javascript">

	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    get_content(loader_div);
        $.ajax({
            url: access_link+"fees_monthly/set_dues_detail_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){

               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert('Successfully Complete');
				   get_content('fees_monthly/set_dues_detail');
            }
			}
         });
      });

</script>


      <section class="content-header">
      <h1>
        Student Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
	  <li class="active">Set Dues Detail</li>
      </ol>
      </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
           
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
			  <!---------------------------Start Admission form--------------------------------------->
        <!---------------------------Start Personal Details ------------------------------------->
			
		<form method="post" enctype="multipart/form-data" id="my_form">
		
            <div class="box-body">
			    
				<div class="col-md-12">
				<div class="col-md-2">&nbsp;</div>
				<div class="col-md-8">
				<div class="col-md-4"><h2>Set Dates</h2></div>
				<div class="col-md-4">
				
				                <label>Penalty <small>(% / Rs.)</small></label>
                <div class="input-group">
                <input type="text" name="penalty_percent_rupees_amount" id="" value="40" class="form-control" />
                <span class="input-group-addon" style="padding:0px;">
                <select name="penalty_method" id="" style="border:none;" class="">
                <option  value="%">%</option>
                <option selected value="Rs">Rs</option>
                </select>
                </span>
                </div>
				
				</div>
				
				<div class="col-md-4">
				<label>Penalty <small>(Day / Monthly)</small></label>
                <select name="penalty_day_monthly" id="" class="form-control">
                <option  value="Day">Day</option>
                <option selected value="Monthly">Monthly</option>
                </select>
				</div>
				
				<div class="col-md-12" style="border:1px solid;border-radius:20px;">
								<div class="col-md-4">
				<label>April Month Dues Date</label>
				<input type="date" name="dues_last_date[]" id="" value="2022-11-15" class="form-control" />
				<input type="hidden" name="fees_type_code[]" id="" value="fees_type1" class="form-control" />
				</div>
								<div class="col-md-4">
				<label>May Month Dues Date</label>
				<input type="date" name="dues_last_date[]" id="" value="2022-11-30" class="form-control" />
				<input type="hidden" name="fees_type_code[]" id="" value="fees_type2" class="form-control" />
				</div>
								<div class="col-md-4">
				<label>June Month Dues Date</label>
				<input type="date" name="dues_last_date[]" id="" value="0000-00-00" class="form-control" />
				<input type="hidden" name="fees_type_code[]" id="" value="fees_type3" class="form-control" />
				</div>
								<div class="col-md-4">
				<label>July Month Dues Date</label>
				<input type="date" name="dues_last_date[]" id="" value="0000-00-00" class="form-control" />
				<input type="hidden" name="fees_type_code[]" id="" value="fees_type4" class="form-control" />
				</div>
								<div class="col-md-12">&nbsp;</div>
				</div>
				</div>
				<div class="col-md-2">&nbsp;</div>
				</div>
				<div class="col-md-12">
				<hr/>
				</div>
				
			</div>
				   
		<!---------------------------Start Fees Details ----------------------------------------->
		    <div class="box-body">
		    <div class="col-md-8" id="student_fee_details">
            
			</div>
			<div class="col-md-4" id="student_details">
            
			</div>
			<div class="box-body ">
			<div class="col-md-12">
			<center><input type="submit" name="finish" value="Save" class="btn  my_background_color" /></center>
			</div>
			</div>
			</div>
		<!---------------------------End Fees Details ----------------------------------------->		   
			</div>
              <!---------------------------End Document Upload ----------------------------------------->

    <!---------------------------------------------End Admission form------------------------->
		  <!-- /.box-body -->
         
		</form>	

    </div>
</section>
