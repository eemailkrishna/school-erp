    <section class="content-header">
      <h1>
        Stock Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:get_content('stock/stock')"><i class="fa fa-money"></i> Stock Management</a></li>
        <li class="active"> Item List</li>
        </ol>
    </section>

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
url: access_link+"stock/item_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('stock/item_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}
</script>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
		<div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
		  
		<div <div class="box box-success" >>
            <div class="box-header with-border">
			  <div class="col-lg-3"></div>
			   <a href="javascript:get_content('stock/add_item')"> <button style="float:right;" type="button" class="btn btn-primary">+ Add New Item</button></a>  
			</div>
			
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
					<th style="width:50px";>S.no.</th>
					<th>Product Name</th>
					<th>Category</th>
					<th>Product Brand</th>
					<th>Product Description</th>
					<th>Product Quantity</th>
					<th>Rate/Product</th>
					<th>Product Code</th>
					<th ><center>Action</center></th>
                </tr>
                </thead>
				<tbody id="search_table">



<tr  align='center' >

	<th style="width:50";>1</th>
	<th>Shoes</th>
	<th>BOOK</th>
	<th>radhe</th>
	<th></th>
	<th></th>
	<th>200</th>
	<th>1</th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=1 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=1')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=1')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('1');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>2</th>
	<th>test</th>
	<th>BOOK</th>
	<th>test brand</th>
	<th>test description</th>
	<th>best</th>
	<th>50</th>
	<th>123</th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=2 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=2')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=2')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('2');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>3</th>
	<th> trse</th>
	<th>BOOK</th>
	<th>sadfsad</th>
	<th>asdfasdf</th>
	<th>10</th>
	<th>10</th>
	<th>asdfasdfsadf</th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=3 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=3')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=3')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('3');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>4</th>
	<th>Tables</th>
	<th>Furniture</th>
	<th>ABC</th>
	<th>Wooden</th>
	<th>A Grade</th>
	<th>2500</th>
	<th>001</th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=4 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=4')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=4')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('4');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>5</th>
	<th>nursing  book</th>
	<th>BOOK</th>
	<th></th>
	<th></th>
	<th>3</th>
	<th>50</th>
	<th></th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=5 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=5')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=5')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('5');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>6</th>
	<th>mouse</th>
	<th>computers</th>
	<th>hp</th>
	<th></th>
	<th>5</th>
	<th>450</th>
	<th></th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=6 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=6')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=6')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('6');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>7</th>
	<th>Shirt</th>
	<th>Uniform</th>
	<th></th>
	<th></th>
	<th></th>
	<th>400</th>
	<th></th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=7 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=7')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=7')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('7');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>8</th>
	<th>Shirt</th>
	<th>Uniform</th>
	<th></th>
	<th></th>
	<th></th>
	<th>400</th>
	<th></th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=8 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=8')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=8')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('8');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>9</th>
	<th>shart</th>
	<th>uni.</th>
	<th></th>
	<th></th>
	<th>250</th>
	<th>250</th>
	<th>1211</th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=9 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=9')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=9')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('9');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>10</th>
	<th>shart</th>
	<th>uni.</th>
	<th></th>
	<th></th>
	<th>250</th>
	<th>250</th>
	<th>1211</th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=10 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=10')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=10')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('10');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>11</th>
	<th>books</th>
	<th>BOOK</th>
	<th>gdghfds</th>
	<th></th>
	<th></th>
	<th>250</th>
	<th></th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=11 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=11')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=11')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('11');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>12</th>
	<th>tables</th>
	<th>tables</th>
	<th>sello</th>
	<th></th>
	<th>5</th>
	<th>1200</th>
	<th></th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=12 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=12')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=12')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('12');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>13</th>
	<th>chair</th>
	<th>Furniture</th>
	<th>dghfds</th>
	<th></th>
	<th>10</th>
	<th>1200</th>
	<th></th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=13 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=13')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=13')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('13');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>14</th>
	<th>work book </th>
	<th>stationary</th>
	<th>abc</th>
	<th>ashsdghfdj</th>
	<th>100</th>
	<th>50</th>
	<th>789</th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=14 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=14')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=14')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('14');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>15</th>
	<th>pens</th>
	<th>Stationery item</th>
	<th>pentonic</th>
	<th></th>
	<th>100</th>
	<th>50</th>
	<th>897</th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=15 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=15')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=15')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('15');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>16</th>
	<th>laptop</th>
	<th>computers</th>
	<th>Del</th>
	<th></th>
	<th>1</th>
	<th>500000</th>
	<th></th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=16 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=16')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=16')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('16');" >Delete</button></td>
	</center>
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>17</th>
	<th>hindi book </th>
	<th>books</th>
	<th>verma ji </th>
	<th>saral hindi </th>
	<th>20</th>
	<th>520</th>
	<th>101</th>
	
<th style="width:50";>
	<center>
	<!--<a href='sales_item.php?id=17 'style="color:#fff;"><input type="button" value="Sale" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;-->
	<a href="javascript:post_content('stock/buy_item','id=17')" style="color:#fff;"><input type="button" value="Buy " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:post_content('stock/edit_item','id=17')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('17');" >Delete</button></td>
	</center>
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