<script>
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"important/document_edit_api.php",
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
				   get_content('important/document_list');
            }
			}
         });
      });
</script>
    <section class="content-header">
      <h1>
        Edit Important Document
      </h1>
      <ol class="breadcrumb">
          <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('important/important')"><i class="fa fa-check-square"></i>Important</a></li>
		<li><a><i class="fa fa-edit"></i> Edit Important Document</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-warning  ">
            <div class="box-header with-border ">
              <h3 class="box-title">Edit Official Document</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
		
    <div class="box-body "  >
			<form role="form" method="post" enctype="multipart/form-data" id="my_form">
			  <input type="hidden"  name="s_no1"  value="25" >
			 <div class="col-md-4 ">
						<div class="form-group">
						  <label>Name</label>
						   <input type="text"  name="document_name" style="  border-color: red;"   placeholder="Name"  value="sk" class="form-control">
						</div>
				</div>
				  <div class="col-md-4 ">	
					<div class="form-group" >
					  <label>Date</label>
					  <input type="date"  name="document_date" placeholder="Date"  value="2022-12-01" class="form-control">
					</div>
				  </div>
				  <div class="col-md-3 ">	
					<div class="form-group" >
					  <label>Document upload</label>
					  <input type="file"  name="document_upload" placeholder="Upload Bill"  value="" class="form-control">
					</div>
				  </div>
				  <div class="col-md-1 ">	
					<div class="form-group" >
					 <img onclick="open_file1('document_upload','govt_official_document','info_id','25');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/govt_official_document/85581926_Screenshot (6).png" height="50" width="50">
					</div>
				  </div>
				<div class="col-md-12">
		        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
		  </div>
	</div>
		</form>	

          </div>
    </div>
     <div id="mypdf_view">
			<div>
</section>

