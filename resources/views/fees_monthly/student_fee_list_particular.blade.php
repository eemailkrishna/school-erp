@include('common.header')
@include('common.navbar')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Fees Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/fees')}}"><i class="fa fa-money"></i> Fees</a></li>
        <li><a href="{{url('/student_fee_list')}}"><i class="fa fa-money"></i> Student Fees List</a></li>
        <li class="active">Student Fees List Particular</li>
    </ol>
</section>

<script>
function valid(s_no, roll_no, total_months) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_fee(s_no, roll_no, total_months);
    } else {
        return false;
    }
}

function delete_fee(s_no, roll_no, total_months) {
    $.ajax({
        type: "POST",
        url: access_link + "fees_monthly/student_fee_delete.php?s_no=" + s_no + "&roll_no=" + roll_no +
            "&total_months=" + total_months + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('fees_monthly/student_fee_list');
            } else {
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
        <div class="col-md-12">

            <!-- /.box -->


            <div class="box box-success">
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="my_background_color">
                            <tr>
                                <th>#</th>
                                <th>Adm. No.</th>
                                <th>student Name</th>
                                <th>Father's Name</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Receipt No</th>
                                <th>Submission Date</th>
                                <th>Total Pay</th>

                                <th>Update By</th>
                                <th>Date</th>

                                <th>Details</th>
                                <th style="">Edit</th>
                                <th style="">Delete</th>
                                <th>A4 Print</th>
                                <th>Thermal Print</th>
                            </tr>
                        </thead>
                        <tbody>



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
<!-- /.content -->
<script>
$(function() {
    $('#example1').DataTable()
})
</script>
@include('common.footer')