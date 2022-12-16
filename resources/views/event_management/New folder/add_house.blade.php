<script type="text/javascript">
$(function()
{
    $("#table-data").on('click', 'input.addButton', function() 
	{	
		 var $tr = $(this).closest('tr');
        var allTrs = $tr.closest('table').find('tr');
        var lastTr = allTrs[allTrs.length-1];
        var $clone = $(lastTr).clone();
        $clone.find('td').each(function()
		{
			var el = $(this).find(':first-child');
			var id = el.attr('id') || null;
			if(id) 
			{
				var i = id.substr(id.length-1);
				var prefix = id.substr(0, (id.length-1));
			}
        });
        $clone.find('input:text').val('');
        $tr.closest('table').append($clone);
});
});
</script>
<script type="text/javascript">
 
 var deleteRow = function (link) {
     var row = link.parentNode.parentNode;
     var table = row.parentNode; 
     table.removeChild(row); 
	 
 }
 
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"event_management/add_house_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			//alert_new(detail);
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				   get_content('event_management/add_house');
            }
			}
         });
      });
</script>
<script>
	function valid(s_no){
	var myval=confirm("Are you sure want to delete this record !!!!");
	if(myval==true){
	delete_fee(s_no);
	}
	else  {
	return false;
	}
	}
	
	function delete_fee(s_no){
	$.ajax({
	type: "POST",
	url: access_link+"event_management/house_dlt.php?id="+s_no+"",
	cache: false,
	success: function(detail){
	var res=detail.split("|?|");
	if(res[1]=='success'){
	   alert_new('Successfully Deleted','green');
	   get_content('event_management/add_house');
	}else{
	//alert_new(detail); 
	}
	}
	});
	}
	</script>
	
    <section class="content-header">
      <h1>
        House Name Generate
      </h1>
      <ol class="breadcrumb">
 	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('event_management/event_management')"><i class="fa fa-calendar"></i>Event Management</a></li>
        <li class="active">Add House Name</li>
      </ol>
    </section>

<!---********************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">House Name Generate</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >
			<form role="form" method="post" enctype="multipart/form-data" id="my_form">
			   
	     		   <div class="col-md-12">
			      <div class="col-md-6 ">
						<div class="form-group">
						  <label>House Name<font style="color:red"><b>*</b></font></label>
						   <center><input type="text"  name="house" placeholder="Eg: House1"  value="" class="form-control" required></center>
						</div>
				   </div>
			 
				
				<div class="col-md-6">
				<div class="col-md-2"></div>
				
				
				<div class="col-md-8 box-body table-responsive">
                <table id="example2" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
                  <th>S.No</th>
                  <th>House Name</th>
                  <th>Delete</th>
				</tr>
                </thead>
								<tbody>
					<tr>
					   <td>1</td>
					   <td>shivaji </td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('24');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>2</td>
					   <td>MANGIT BANIHAL</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('25');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>3</td>
					   <td>Ashoka Garden</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('26');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>4</td>
					   <td>research </td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('27');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>5</td>
					   <td>PYTHON</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('28');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>6</td>
					   <td>आशोक ग़र्देन</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('29');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>7</td>
					   <td>ST.School</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('30');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>8</td>
					   <td>tracy</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('31');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>9</td>
					   <td>abcd</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('32');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>10</td>
					   <td>Red house</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('33');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>11</td>
					   <td>blue</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('34');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>12</td>
					   <td>test</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('35');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>13</td>
					   <td></td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('36');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>14</td>
					   <td>shivaji</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('37');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>15</td>
					   <td>hiii</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('38');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>16</td>
					   <td>house 1</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('39');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>17</td>
					   <td>Panchwati.</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('40');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>18</td>
					   <td>blue </td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('41');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>19</td>
					   <td>Panchwati.</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('42');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>20</td>
					   <td>red house</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('43');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>21</td>
					   <td>yellow house</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('44');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>22</td>
					   <td>blue</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('45');" >Delete</th>
					</tr>
									<tbody>
					<tr>
					   <td>23</td>
					   <td>chhota don</td>
				       <th><button type="button" class="btn btn-default" onclick="return valid('46');" >Delete</th>
					</tr>
									</tbody>
                </table>
                </div>
				<div class="col-md-2"></div>
			</div>
			</div>
	
		  <div class="col-md-12">
		        <center><input type="submit" name="finish" value="Submit" class="btn  btn-success" /></center>
		  </div>
		  </form>
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
<script>
$(function () {
$('#example2').DataTable()
})
</script>