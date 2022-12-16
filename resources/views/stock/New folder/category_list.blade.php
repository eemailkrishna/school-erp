    <section class="content-header">
      <h1>
        Stock Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:get_content('stock/stock')"><i class="fa fa-money"></i> Stock Management</a></li>
        <li class="active">Category List</li>
        </ol>
    </section>

<script>
function valid(s_no){   
    var myval=confirm("Are you sure want to delete this record !!!!");
    if(myval==true){
        delete_record(s_no);       
    }            
    else  {      
        return false;
    }
}

function delete_record(s_no){
$.ajax({
type: "POST",
url: access_link+"stock/category_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
    var res=detail.split("|?|");
	    if(res[1]=='success'){
            alert_new('Successfully Deleted','green');
            get_content('stock/category_list');
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
			  <div class="col-md-6"><h4>Category List</h4></div>
			  <div class="col-md-6"><a href="javascript:get_content('stock/category_add')"> <button style="float:right;" type="button" class="btn btn-primary">+ Add New Category</button></a></div>
			</div>
			
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
					<th>S.No.</th>
					<th>Category Name</th>
					
                    <th>Update By</th>
                    <th>Date</th>
					
					<th><center>Action</center></th>
                </tr>
                </thead>
				<tbody id="search_table">



<tr>

	<td>1</td>
	<td>beg</td>
	
	<td>rahul@simption.com</td>
	<td>08-11-2022 03:26:18</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=26')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('26');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>2</td>
	<td>stashnary</td>
	
	<td>rahul@simption.com</td>
	<td>06-09-2022 12:06:07</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=25')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('25');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>3</td>
	<td>far.</td>
	
	<td>rahul@simption.com</td>
	<td>09-08-2022 01:29:59</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=24')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('24');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>4</td>
	<td>beg</td>
	
	<td>rahul@simption.com</td>
	<td>25-07-2022 05:02:50</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=23')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('23');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>5</td>
	<td>Uniform</td>
	
	<td>rahul@simption.com</td>
	<td>25-07-2022 10:45:47</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=22')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('22');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>6</td>
	<td>school dress</td>
	
	<td>rahul@simption.com</td>
	<td>25-07-2022 10:02:16</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=21')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('21');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>7</td>
	<td>BOOK SETS</td>
	
	<td>rahul@simption.com</td>
	<td>25-07-2022 10:01:50</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=20')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('20');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>8</td>
	<td>stationary</td>
	
	<td>rahul@simption.com</td>
	<td>23-07-2022 10:54:57</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=19')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('19');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>9</td>
	<td>Duster</td>
	
	<td>rahul@simption.com</td>
	<td>23-07-2022 10:11:56</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=18')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('18');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>10</td>
	<td>chair</td>
	
	<td>rahul@simption.com</td>
	<td>23-07-2022 09:56:19</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=17')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('17');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>11</td>
	<td>tables</td>
	
	<td>rahul@simption.com</td>
	<td>21-07-2022 09:30:27</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=16')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('16');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>12</td>
	<td>books</td>
	
	<td>rahul@simption.com</td>
	<td>21-07-2022 09:26:05</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=15')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('15');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>13</td>
	<td>shoes</td>
	
	<td>rahul@simption.com</td>
	<td>14-07-2022 12:18:24</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=14')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('14');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>14</td>
	<td>uni.</td>
	
	<td>rahul@simption.com</td>
	<td>27-06-2022 11:36:28</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=13')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('13');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>15</td>
	<td>testing</td>
	
	<td>rahul@simption.com</td>
	<td>16-06-2022 11:15:17</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=12')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('12');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>16</td>
	<td>uni.</td>
	
	<td>rahul@simption.com</td>
	<td>10-06-2022 11:39:40</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=11')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('11');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>17</td>
	<td>Uniform</td>
	
	<td>rahul@simption.com</td>
	<td>04-06-2022 11:59:38</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=10')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('10');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>18</td>
	<td>computers</td>
	
	<td>rahul@simption.com</td>
	<td>17-05-2022 12:11:40</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=9')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('9');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>19</td>
	<td>welcome kite </td>
	
	<td>rahul@simption.com</td>
	<td>21-04-2022 10:04:02</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=8')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('8');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>20</td>
	<td>bus</td>
	
	<td>rahul@simption.com</td>
	<td>10-03-2022 02:02:50</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=6')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('6');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>21</td>
	<td>Furniture</td>
	
	<td>rahul@simption.com</td>
	<td>25-02-2022 06:33:05</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=5')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('5');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>22</td>
	<td>IT</td>
	
	<td>rahul@simption.com</td>
	<td>25-02-2022 06:32:24</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=4')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('4');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>23</td>
	<td>Stationery item</td>
	
	<td>rahul@simption.com</td>
	<td>20-09-2021 05:27:20</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=3')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('3');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>24</td>
	<td>Stationery item</td>
	
	<td>rahul@simption.com</td>
	<td>27-05-2021 06:10:37</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=2')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('2');" >Delete</button>
    </center>
    </td>

</tr>


<tr>

	<td>25</td>
	<td>BOOK</td>
	
	<td>rahul@simption.com</td>
	<td>17-05-2022 12:11:25</td>
	
    <td>
    <center>
    <a href="javascript:post_content('stock/category_edit','id=1')" style="color:#fff;"><input type="button" value="Edit" class="btn btn-default" style="background-color:#00a654;color:#fff;"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <button type="button"  class="btn btn-danger" onclick="return valid('1');" >Delete</button>
    </center>
    </td>

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