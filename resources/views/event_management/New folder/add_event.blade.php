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
            url: access_link+"event_management/add_event_api.php",
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
				  get_content('event_management/add_event');
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
	}else{
	return false;
	}
	}
	
	function delete_fee(s_no){
	$.ajax({
	type: "POST",
	url: access_link+"event_management/delete_event.php?id="+s_no+"",
	cache: false,
	success: function(detail){
	var res=detail.split("|?|");
	if(res[1]=='success'){
	   alert_new('Successfully Deleted','green');
	   get_content('event_management/add_event');
	}else{
	//alert_new(detail); 
	}
	}
	});
	}
	</script>


    <section class="content-header">
      <h1>
        Event Name Generate
      </h1>
      <ol class="breadcrumb">
      	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('event_management/event_management')"><i class="fa fa-calendar"></i>Event Management</a></li>
        <li class="active">Add Event Name</li>
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
              <h3 class="box-title">Event Name Generate</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
			<form id="my_form" method="post" enctype="multipart/form-data">
			   
	     		   <div class="col-md-12">
			      <div class="col-md-2 ">
						<div class="form-group">
						  <label>Event Name<font style="color:red"><b>*</b></font></label>
						   <center><input type="text"  name="event_name" placeholder="Eg: House1"  value="" class="form-control" required></center>
						</div>
				   </div>   
				   <div class="col-md-2 ">
						<div class="form-group">
						  <label>No. Of Participants<font style="color:red"><b>*</b></font></label>
						   <center><input type="number"  name="total_participats" placeholder="No. Of Participants"  value="" class="form-control" required></center>
						</div>
				   </div>
			       <div class="col-md-2 ">
						<div class="form-group">
						  <label>Date<font style="color:red"><b>*</b></font></label>
						   <center><input type="date"  name="event_date" value="" class="form-control" required></center>
						</div>
				   </div>
				
				<div class="col-md-6">
				<div class="col-md-2"></div>
				
				
				<div class="col-md-10 box-body table-responsive">
                <table id="example3" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
                  <th>S.No</th>
                  <th>Event Name</th>
                  <th>No.Of Participants</th>
                  <th>Date</th>
                  <th>Delete</th>
				</tr>
                </thead>
								<tbody>
					<tr>
					   <td>1</td>
					   <td>singing Competion</td>
					   <td>1</td>
					   					   <td>0000-00-00</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('7');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>2</td>
					   <td>mimicry</td>
					   <td>1</td>
					   					   <td>0000-00-00</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('8');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>3</td>
					   <td>MODELING</td>
					   <td>5</td>
					   					   <td>0000-00-00</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('10');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>4</td>
					   <td>Kayra</td>
					   <td>8</td>
					   					   <td>28-12-2018</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('24');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>5</td>
					   <td> न्न</td>
					   <td>44</td>
					   					   <td>01-01-2019</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('25');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>6</td>
					   <td>DIWALI FESTIWAL</td>
					   <td>5</td>
					   					   <td>26-02-2019</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('26');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>7</td>
					   <td>gff</td>
					   <td>2</td>
					   					   <td>04-04-2019</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('27');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>8</td>
					   <td>test</td>
					   <td>2</td>
					   					   <td>31-05-2019</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('28');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>9</td>
					   <td>Rough India</td>
					   <td>100</td>
					   					   <td>30-08-2019</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('29');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>10</td>
					   <td>research</td>
					   <td>1</td>
					   					   <td>01-09-2019</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('30');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>11</td>
					   <td>gsfgf</td>
					   <td>44</td>
					   					   <td>02-12-1222</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('31');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>12</td>
					   <td>Annual FUnction</td>
					   <td>2</td>
					   					   <td>07-11-2019</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('32');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>13</td>
					   <td>Tt</td>
					   <td>2</td>
					   					   <td>31-01-2020</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('33');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>14</td>
					   <td>abcd</td>
					   <td>10</td>
					   					   <td>21-02-2020</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('34');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>15</td>
					   <td><?php include("../attachment/session.php");  	   $query="DELETE FROM `event_table`";    mysql_query($query);    ?></td>
					   <td>11</td>
					   					   <td>02-02-2020</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('35');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>16</td>
					   <td><?php include("../attachment/session.php");  	   $x % $y $query="DELETE FROM `event_table`";    mysql_query($query);    ?></td>
					   <td>12</td>
					   					   <td>13-02-2020</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('37');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>17</td>
					   <td>Annual function</td>
					   <td>50</td>
					   					   <td>06-03-2020</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('42');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>18</td>
					   <td>jit</td>
					   <td>5</td>
					   					   <td>26-03-2020</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('43');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>19</td>
					   <td></td>
					   <td></td>
					   					   <td>0000-00-00</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('44');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>20</td>
					   <td>Gjg</td>
					   <td>25</td>
					   					   <td>23-04-2021</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('45');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>21</td>
					   <td>rtytu</td>
					   <td>2</td>
					   					   <td>15-06-2020</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('46');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>22</td>
					   <td>jiii</td>
					   <td>8</td>
					   					   <td>30-12-2020</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('47');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>23</td>
					   <td>annual </td>
					   <td>100</td>
					   					   <td>15-12-2021</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('48');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>24</td>
					   <td>hokey</td>
					   <td>6</td>
					   					   <td>23-09-2021</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('49');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>25</td>
					   <td>red house</td>
					   <td>10</td>
					   					   <td>21-07-2022</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('50');" >Delete</button></th>
					</tr>
									<tbody>
					<tr>
					   <td>26</td>
					   <td>earth day celebration </td>
					   <td>10</td>
					   					   <td>25-07-2022</td>
					   				       <th><button type="button" class="btn btn-default" onclick="return valid('51');" >Delete</button></th>
					</tr>
									</tbody>
                </table>
                </div>
			
			</div>
			</div>
	
		  <div class="col-md-12">
		        <center><input type="submit" name="submit" value="Submit" class="btn  btn-success" /></center>
		  </div>
		  </form>
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

