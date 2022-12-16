  
  
 <script>
			function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_item(s_no);       
 }            
else  {      
return false;
 }       
  } 
  function delete_item(s_no){
$.ajax({
type: "POST",
url: access_link+"stock/sales_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('stock/sale_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}
</script>

   <section class="content-header">
      <h1>
        Stock Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
             <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:get_content('stock/stock')"><i class="fa fa-money"></i> Stock Management</a></li>
        <li class="active">Sale List</li>
        </ol>
    </section>
	

	<!---**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
		<div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div <div class="box box-success" >>
            
			
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
				  <th> S.no.</th>
				  <th> student Name</th>
				  <th> Father's Name</th>
                  <th> Product Name</th>
                  <th>Category</th>
				  <th> Quantity</th>
                  <th> Rate</th>
                  <th> Total Amount</th>
				  <th><center> Action</center></th>
                </tr>
                </thead>
				<tbody id="search_table">



<tr align='center'>

	<th>1</th>
	<th></th>
	<th>BODHRAM SAHU</th>
	<th>milk powder</th>
	<th></th>
	<th>2</th>
	<th>100</th>
	<th>200</th>
	
<th>
	<center>
	
<button type="button"  class="btn btn-danger" onclick="return valid('1');" >Delete</button></td>
			
 &nbsp;&nbsp;&nbsp;&nbsp;
	
	
</th>

</tr>

<tr align='center'>

	<th>2</th>
	<th></th>
	<th>Poooja</th>
	<th>book</th>
	<th></th>
	<th>2</th>
	<th>200</th>
	<th>400</th>
	
<th>
	<center>
	
<button type="button"  class="btn btn-danger" onclick="return valid('2');" >Delete</button></td>
			
 &nbsp;&nbsp;&nbsp;&nbsp;
	
	
</th>

</tr>

<tr align='center'>

	<th>3</th>
	<th></th>
	<th></th>
	<th>Shirt</th>
	<th>Uniform</th>
	<th>1</th>
	<th>500</th>
	<th>500</th>
	
<th>
	<center>
	
<button type="button"  class="btn btn-danger" onclick="return valid('3');" >Delete</button></td>
			
 &nbsp;&nbsp;&nbsp;&nbsp;
	
	
</th>

</tr>

<tr align='center'>

	<th>4</th>
	<th></th>
	<th>s.b. shrivastava</th>
	<th>shart</th>
	<th>uni.</th>
	<th>1</th>
	<th>300</th>
	<th>300</th>
	
<th>
	<center>
	
<button type="button"  class="btn btn-danger" onclick="return valid('4');" >Delete</button></td>
			
 &nbsp;&nbsp;&nbsp;&nbsp;
	
	
</th>

</tr>

<tr align='center'>

	<th>5</th>
	<th>Prashant kumar</th>
	<th>Rammu lal</th>
	<th>milk powder</th>
	<th></th>
	<th>2</th>
	<th>20</th>
	<th>40</th>
	
<th>
	<center>
	
<button type="button"  class="btn btn-danger" onclick="return valid('5');" >Delete</button></td>
			
 &nbsp;&nbsp;&nbsp;&nbsp;
	
	
</th>

</tr>

<tr align='center'>

	<th>6</th>
	<th>sarita</th>
	<th>ramjee Gupta</th>
	<th>milk powder</th>
	<th></th>
	<th>5</th>
	<th>50</th>
	<th>250</th>
	
<th>
	<center>
	
<button type="button"  class="btn btn-danger" onclick="return valid('6');" >Delete</button></td>
			
 &nbsp;&nbsp;&nbsp;&nbsp;
	
	
</th>

</tr>

<tr align='center'>

	<th>7</th>
	<th></th>
	<th>Faraz  Khan</th>
	<th>work book </th>
	<th>stationary</th>
	<th>1</th>
	<th>70</th>
	<th>70</th>
	
<th>
	<center>
	
<button type="button"  class="btn btn-danger" onclick="return valid('7');" >Delete</button></td>
			
 &nbsp;&nbsp;&nbsp;&nbsp;
	
	
</th>

</tr>

<tr align='center'>

	<th>8</th>
	<th>muskan ray</th>
	<th>roshan ray</th>
	<th>milk powder</th>
	<th></th>
	<th>5</th>
	<th>125</th>
	<th>625</th>
	
<th>
	<center>
	
<button type="button"  class="btn btn-danger" onclick="return valid('8');" >Delete</button></td>
			
 &nbsp;&nbsp;&nbsp;&nbsp;
	
	
</th>

</tr>

<tr align='center'>

	<th>9</th>
	<th>Mohit </th>
	<th>Mr. Ravi</th>
	<th>milk powder</th>
	<th></th>
	<th>10</th>
	<th>50</th>
	<th>500</th>
	
<th>
	<center>
	
<button type="button"  class="btn btn-danger" onclick="return valid('9');" >Delete</button></td>
			
 &nbsp;&nbsp;&nbsp;&nbsp;
	
	
</th>

</tr>
		</tbody>
            
             </table>
            </div>
		
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
       <script>
  $(function () {
    $('#example1').DataTable()
  })
 
</script>
