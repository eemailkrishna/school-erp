@include('common.header')
@include('common.navbar')


<script>
function valid1(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_data(s_no);
    } else {
        return false;
    }
}

function delete_data(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "recycle_bin/student_registration_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('recycle_bin/student_registration_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}

function valid(s_no) {
    var myval = confirm("Are you sure want to restore this record !!!!");
    if (myval == true) {
        restore_data(s_no);
    } else {
        return false;
    }
}

function restore_data(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "recycle_bin/student_registration_restore.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Restore', 'green');
                get_content('recycle_bin/student_registration_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Recycle Bin
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/recycle-bin')}}"><i class="fal fa-trash-alt"></i> Recycle Bin</a></li>
        <li class="active">Student Registration List Recycle Bin</li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Student Registration List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S no.</th>
                                <th>Employee Name</th>
                                <th>Photo</th>
                                <th>Contact No.</th>
                                <th>Designation</th>
                                <th>Restore</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td>1</td>
                                <td>FDSGJYTF</td>
                                <td><img src="images/student_blank.png" height="50" width="50"></td>
                                <td></td>
                                <td></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('778');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('778');">Delete</button></td>

                            </tr>
                            <tr>

                                <td>2</td>
                                <td>SAMARTH</td>
                                <td><img src="images/student_blank.png" height="50" width="50"></td>
                                <td></td>
                                <td></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('871');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('871');">Delete</button></td>

                            </tr>
                            <tr>

                                <td>3</td>
                                <td>shubham bisen</td>
                                <td><img src="images/student_blank.png" height="50" width="50"></td>
                                <td></td>
                                <td></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('889');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('889');">Delete</button></td>

                            </tr>
                            <tr>

                                <td>4</td>
                                <td>Prashant </td>
                                <td><img src="images/student_blank.png" height="50" width="50"></td>
                                <td></td>
                                <td></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('1011');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('1011');">Delete</button></td>

                            </tr>
                            <tr>

                                <td>5</td>
                                <td>Nidhi Singh </td>
                                <td><img src="images/student_blank.png" height="50" width="50"></td>
                                <td></td>
                                <td></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('1360');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('1360');">Delete</button></td>

                            </tr>
                            <tr>

                                <td>6</td>
                                <td>Ram</td>
                                <td><img src="images/student_blank.png" height="50" width="50"></td>
                                <td></td>
                                <td></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('1449');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('1449');">Delete</button></td>

                            </tr>
                            <tr>

                                <td>7</td>
                                <td>SURYA PRATAP MAURYA</td>
                                <td><img src="images/student_blank.png" height="50" width="50"></td>
                                <td></td>
                                <td></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('1597');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('1597');">Delete</button></td>

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
$(function() {
    $('#example1').DataTable()
})
</script>

@include('common.footer')