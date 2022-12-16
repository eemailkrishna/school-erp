@include('common.header')
@include('common.navbar')


<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_reminder(s_no);
    } else {
        return false;
    }
}

function delete_reminder(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "reminder/reminder_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('reminder/reminder_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>
<section class="content-header">
    <h1>
        Reminder Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/reminder')}}"><i class="fa fa-history"></i> Reminder</a></li>
        <li class="active"><i class="fa fa-list"></i> Reminder List</li>
    </ol>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Reminder List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Allocated Date</th>
                                <th>Finsih Date</th>
                                <th>Reminder Task1</th>
                                <th>Reminder Task2</th>
                                <th>Reminder Task3</th>
                                <th>Reminder Task4</th>
                                <th> Reminder Task5</th>
                                <th>Remark</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tr align='center'>

                            <td>1</td>
                            <td>01-12-2022</td>
                            <td>31-12-2022</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>

                            <td><button type="button" onclick="post_content('reminder/reminder_edit','id=28')"
                                    class="btn btn-success">Edit</button></td>
                            <td>
                                <button type="button" class="btn btn-danger"
                                    onclick="return valid('28');">Delete</button>
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
})
</script>

@include('common.footer')