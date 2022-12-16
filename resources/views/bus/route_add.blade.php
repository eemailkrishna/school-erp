@include('common.header')
@include('common.navbar')
<script type="text/javascript">
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "bus/route_add_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            ////alert_new(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('bus/route_add');
            }
        }
    });
});

function delete_route(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "bus/route_dlt.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                //alert_new('Successfully Deleted','green');
                get_content('bus/route_add');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>
<section class="content-header">
    <h1>
        Bus Management </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/bus')}}"><i class="fa fa-truck"></i> Bus Management</a></li>
        <li class="active">Add Routes</li>
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
                <h3 class="box-title"> Bus Route Generate</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" id="my_form" method="post" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Route Name<font style="color:red"><b>*</b></font></label>
                                <center><input type="text" name="bus_route" placeholder="Eg: Route1,Route2" value=""
                                        class="form-control" required></center>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="col-md-2"></div>


                            <div class="col-md-8 box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Route Name</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1 - KURHA</td>
                                            <th><button type="button" class="btn btn-default"
                                                    onclick="delete_route('80')">Delete</th>
                                        </tr>

                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>80feet thana</td>
                                            <th><button type="button" class="btn btn-default"
                                                    onclick="delete_route('79')">Delete</th>
                                        </tr>

                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>khandari</td>
                                            <th><button type="button" class="btn btn-default"
                                                    onclick="delete_route('81')">Delete</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
                    </div>
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
<script>
$(function() {
    $('#example1').DataTable()
})
</script>
@include('common.footer')