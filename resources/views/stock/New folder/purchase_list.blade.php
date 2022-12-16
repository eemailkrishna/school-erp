    <section class="content-header">
      <h1>
        Stock Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:get_content('stock/stock')"><i class="fa fa-money"></i> Stock Management</a></li>
        <li class="active">Purchase List</li>
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
url: access_link+"stock/purchase_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('stock/purchase_list');
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
            
			
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
					<th style="width:50px";>S.no.</th>
					<th>Product Name</th>
					<th>Category</th>
					<th>Remain Quantity</th>
					<th>Total Quantity</th>
					<th>Rate</th>
					<th>Shop Name</th>
					<th>Contact Person Name</th>
					<th>Total Amount</th>
					<th ><center>Action</center></th>
                </tr>
                </thead>
				<tbody id="search_table">
<tr  align='center' >

	<th style="width:50";>1</th>
	<th>milk powder</th>
	<th></th>
	<th>-55</th>
	<th>10</th>
	<th>45</th>
	<th>amul parlour</th>
	<th>dinesh sahu</th>
	<th>450</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=7'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=7')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('7');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>2</th>
	<th>SHOES</th>
	<th></th>
	<th>20</th>
	<th>20</th>
	<th>700</th>
	<th>RAJU HALKAT</th>
	<th>Mr. gupta </th>
	<th>14000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=10'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=10')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('10');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>3</th>
	<th>chairs and baches</th>
	<th></th>
	<th>14</th>
	<th>14</th>
	<th>2</th>
	<th>nnnnnnnnm</th>
	<th>mbnnn</th>
	<th>28</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=11'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=11')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('11');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>4</th>
	<th>Pen</th>
	<th></th>
	<th>-15355</th>
	<th>100</th>
	<th>4.50</th>
	<th>Ravi Books </th>
	<th>Ravi kumar</th>
	<th>450</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=12'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=12')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('12');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>5</th>
	<th>test</th>
	<th></th>
	<th>2</th>
	<th>2</th>
	<th>10</th>
	<th>gupta ji </th>
	<th>Mr. gupta </th>
	<th>20</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=13'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=13')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('13');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>6</th>
	<th>School dress</th>
	<th></th>
	<th>49</th>
	<th>50</th>
	<th>125</th>
	<th>raja shoe</th>
	<th>ajay</th>
	<th>6250</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=14'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=14')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('14');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>7</th>
	<th>School dress</th>
	<th></th>
	<th>100</th>
	<th>100</th>
	<th>300</th>
	<th>ABHILASHA DRESS HOUSE </th>
	<th>SHOP KEEPER </th>
	<th>30000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=15'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=15')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('15');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>8</th>
	<th>tie</th>
	<th></th>
	<th>10</th>
	<th>10</th>
	<th>5</th>
	<th>sgr</th>
	<th>khkhg</th>
	<th>50</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=16'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=16')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('16');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>9</th>
	<th>School dress</th>
	<th></th>
	<th>100</th>
	<th>100</th>
	<th>300</th>
	<th>ABHILASHA DRESS HOUSE </th>
	<th>SHOP KEEPER </th>
	<th>30000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=17'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=17')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('17');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>10</th>
	<th>School dress</th>
	<th></th>
	<th>10</th>
	<th>10</th>
	<th>12</th>
	<th>yfgutft</th>
	<th>999999999</th>
	<th>120</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=18'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=18')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('18');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>11</th>
	<th>bookssss</th>
	<th></th>
	<th>100</th>
	<th>100</th>
	<th>300</th>
	<th>ABHILASHA DRESS HOUSE </th>
	<th>SHOP KEEPER </th>
	<th>30000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=19'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=19')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('19');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>12</th>
	<th>computers</th>
	<th></th>
	<th>30</th>
	<th>50</th>
	<th>20000</th>
	<th>alina computers shop </th>
	<th>9656878128</th>
	<th>1000000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=20'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=20')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('20');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>13</th>
	<th>School dress</th>
	<th></th>
	<th>2</th>
	<th>2</th>
	<th>10</th>
	<th>gupta ji </th>
	<th>Mr. gupta </th>
	<th>20</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=21'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=21')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('21');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>14</th>
	<th>School Dress</th>
	<th></th>
	<th>49</th>
	<th>50</th>
	<th>100</th>
	<th>Satish Enterprises</th>
	<th>9617387850</th>
	<th>5000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=22'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=22')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('22');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>15</th>
	<th>School dress</th>
	<th></th>
	<th>20</th>
	<th>20</th>
	<th>300</th>
	<th>ss</th>
	<th>9545212125</th>
	<th>6000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=23'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=23')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('23');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>16</th>
	<th>tie</th>
	<th></th>
	<th>9</th>
	<th>10</th>
	<th>10</th>
	<th>azd</th>
	<th>ajit</th>
	<th>100</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=24'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=24')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('24');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>17</th>
	<th>tie</th>
	<th></th>
	<th>9</th>
	<th>10</th>
	<th>10</th>
	<th>abc</th>
	<th>xyz</th>
	<th>100</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=25'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=25')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('25');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>18</th>
	<th>Computer system</th>
	<th></th>
	<th>100</th>
	<th>100</th>
	<th>300</th>
	<th>ABHILASHA DRESS HOUSE </th>
	<th>SHOP KEEPER </th>
	<th>30000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=28'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=28')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('28');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>19</th>
	<th>Computer system</th>
	<th></th>
	<th>10</th>
	<th>10</th>
	<th>250000</th>
	<th>mult</th>
	<th>1234</th>
	<th>2500000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=29'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=29')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('29');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>20</th>
	<th>Computer system</th>
	<th></th>
	<th>1</th>
	<th>1</th>
	<th>22</th>
	<th>vgffvcf</th>
	<th>dggddd</th>
	<th>22</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=30'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=30')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('30');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>21</th>
	<th>Computer system</th>
	<th></th>
	<th>1</th>
	<th>1</th>
	<th>2700</th>
	<th>press</th>
	<th>8131827108</th>
	<th>2700</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=31'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=31')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('31');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>22</th>
	<th>book</th>
	<th></th>
	<th>3</th>
	<th>5</th>
	<th>250</th>
	<th>press</th>
	<th>8131827108</th>
	<th>1250</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=32'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=32')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('32');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>23</th>
	<th>book</th>
	<th></th>
	<th>12</th>
	<th>12</th>
	<th>50</th>
	<th>bhopal</th>
	<th>Ravi Kumar</th>
	<th>600</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=33'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=33')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('33');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>24</th>
	<th>Chair</th>
	<th>welcome kite </th>
	<th>30</th>
	<th>30</th>
	<th>450</th>
	<th>VENdir</th>
	<th>ANDH</th>
	<th>13500</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=34'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=34')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('34');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>25</th>
	<th>Marker</th>
	<th>computers</th>
	<th>3</th>
	<th>23</th>
	<th>30</th>
	<th>Asdfdsfds</th>
	<th>Ravi</th>
	<th>690</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=35'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=35')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('35');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>26</th>
	<th>Marker</th>
	<th>computers</th>
	<th>1</th>
	<th>1</th>
	<th>20</th>
	<th> vvv</th>
	<th>vv</th>
	<th>20</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=36'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=36')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('36');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>27</th>
	<th>Books</th>
	<th></th>
	<th>7</th>
	<th>7</th>
	<th>7</th>
	<th>ggggh</th>
	<th>7889990</th>
	<th>49</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=37'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=37')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('37');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>28</th>
	<th>Books</th>
	<th></th>
	<th>45</th>
	<th>45</th>
	<th>30</th>
	<th>DIM</th>
	<th>34534</th>
	<th>1350</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=38'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=38')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('38');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>29</th>
	<th>rkbooks</th>
	<th>BOOK</th>
	<th>999</th>
	<th>1000</th>
	<th>10</th>
	<th>hello</th>
	<th>8888888</th>
	<th>10000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=39'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=39')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('39');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>30</th>
	<th>books</th>
	<th></th>
	<th>1</th>
	<th>1</th>
	<th>1</th>
	<th>adagdhf</th>
	<th>tyty6</th>
	<th>1</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=40'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=40')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('40');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>31</th>
	<th>Books</th>
	<th></th>
	<th>78</th>
	<th>78</th>
	<th>89</th>
	<th>VHGHJ</th>
	<th>NKNKN</th>
	<th>6942</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=41'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=41')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('41');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>32</th>
	<th>Book</th>
	<th>BOOK</th>
	<th>9</th>
	<th>10</th>
	<th>10000</th>
	<th>sunil book store</th>
	<th>sk</th>
	<th>100000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=42'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=42')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('42');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>33</th>
	<th>Shoes</th>
	<th>BOOK</th>
	<th>1</th>
	<th>1</th>
	<th>15</th>
	<th>sdfasdf</th>
	<th>asdfasdf</th>
	<th>15</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=43'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=43')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('43');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>34</th>
	<th>Tables</th>
	<th>Furniture</th>
	<th>5</th>
	<th>20</th>
	<th>2500</th>
	<th>Ravi Enterprises</th>
	<th>Ravi Bhaiyya</th>
	<th>50000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=44'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=44')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('44');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>35</th>
	<th>Shoes</th>
	<th>BOOK</th>
	<th>1</th>
	<th>1</th>
	<th>200</th>
	<th>Ks</th>
	<th>959606853</th>
	<th>200</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=45'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=45')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('45');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>36</th>
	<th>mouse</th>
	<th>computers</th>
	<th>5</th>
	<th>5</th>
	<th>450</th>
	<th>xyz</th>
	<th>xyz</th>
	<th>2250</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=46'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=46')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('46');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>37</th>
	<th>Shirt</th>
	<th>Uniform</th>
	<th>1</th>
	<th>2</th>
	<th>400</th>
	<th>Anil</th>
	<th>Milan Dobariya</th>
	<th>800</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=47'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=47')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('47');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>38</th>
	<th>shart</th>
	<th>uni.</th>
	<th>49</th>
	<th>50</th>
	<th>250</th>
	<th>kr</th>
	<th>744477</th>
	<th>12500</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=48'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=48')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('48');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>39</th>
	<th>test</th>
	<th>BOOK</th>
	<th>100</th>
	<th>100</th>
	<th>50</th>
	<th>abc</th>
	<th>xyz</th>
	<th>5000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=49'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=49')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('49');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>40</th>
	<th>work book </th>
	<th>stationary</th>
	<th>99</th>
	<th>100</th>
	<th>50</th>
	<th>pustak bhawan</th>
	<th>459876325</th>
	<th>5000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=50'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=50')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('50');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>41</th>
	<th>Shoes</th>
	<th>BOOK</th>
	<th>20</th>
	<th>20</th>
	<th>50</th>
	<th>bnvhng</th>
	<th>1234567899</th>
	<th>1000</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=51'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=51')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('51');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>42</th>
	<th>mouse</th>
	<th>computers</th>
	<th>25</th>
	<th>25</th>
	<th>750</th>
	<th>P A MALL</th>
	<th>PA</th>
	<th>18750</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=52'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=52')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('52');" >Delete</button></td>
			
</center>
</th>

</tr>

<tr  align='center' >

	<th style="width:50";>43</th>
	<th>Shoes</th>
	<th>BOOK</th>
	<th>1</th>
	<th>1</th>
	<th>200</th>
	<th>anirudh </th>
	<th>NIDHI </th>
	<th>200</th>
	
<th>
	<center>
	<!--<a style="color:Green;" aria-hidden="true" class="fa fa-pencil" href='expense_edit.php?id=53'> Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; -->
	<a href="javascript:post_content('stock/sales_item','id=53')" style="color:#fff;"><input type="button" value="Sale " class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('53');" >Delete</button></td>
			
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