@include('common.header')
@include('common.navbar')

<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_bus(s_no);
    } else {
        return false;
    }
}

function delete_bus(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "bus/bus_details_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('bus/bus_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>
<section class="content-header">
    <h1>
        Bus Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/bus')}}"><i class="fa fa-truck"></i> Bus Management</a></li>
        <li class="active">Bus Details List</li>
    </ol>
</section>

<!---****************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">

            <!-- /.box -->

            <div class="box box-success ">
                <div class="box-header with-border">
                    <h3 class="box-title">Bus Details</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S No.</th>
                                <th>Bus Name</th>
                                <th>Bus Company</th>
                                <th>Model No.</th>
                                <th>Bus No.</th>
                                <th>Capacity</th>
                                <th>Owner Name</th>
                                <th>Contact No.</th>
                                <th>Ragistration No.</th>
                                <th>Registration</th>
                                <th>Bus Photo</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>


                        <tr align='center'>

                            <th>1</th>
                            <th>BHARAT BENZ</th>
                            <th>BHARAT BENZ</th>
                            <th>4D34i</th>
                            <th>MH19TS0001</th>
                            <th>40</th>
                            <th>JJSHSS</th>
                            <th>07266300001</th>
                            <th>MH19TS0001</th>
                            <th><img src="../school_software_v1_old/images/student_blank.png" height="50"
                                    width="50"></a></th>
                            <th><img src="../school_software_v1_old/images/student_blank.png" height="50"
                                    width="50"></a></th>


                            <td><button type="button" onclick="post_content('bus/bus_details_edit','id=3')"
                                    class="btn btn-success">Edit</button></td>
                            <td>
                                <button type="button" class="btn btn-danger"
                                    onclick="return valid('3');">Delete</button>
                            </td>
                        </tr>


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
$(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})
</script>

@include('common.footer')