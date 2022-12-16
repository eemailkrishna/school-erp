@include('common.header')
@include('common.navbar')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Bus Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/bus')}}"><i class="fa fa-truck"></i> Bus Management</a></li>
        <li><a href="{{url('/bus_route_list')}}"><i class="fa fa-list"></i>Bus Details List</a></li>
        <li class="active">Bus Details Edit</li>
    </ol>
</section>

<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "bus/bus_route_list_edit_api.php",
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
                get_content('bus/bus_route_list');
            }
        }
    });
});
</script>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning  ">
            <div class="box-header with-border ">
                <h3 class="box-title">Bus Routes Edit</h3>
            </div>

            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <form role="form" id="my_form" method="post" enctype="multipart/form-data">
                <div class="box-body ">

                    <input type="hidden" name="s_no1" value="84" class="form-control" />
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Bus Route</label>
                            <input type="text" name="bus_route" placeholder="Bus Route" value="" class="form-control"
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Bus Stop Name</label>
                            <input type="text" name="bus_stop_name" placeholder="Bus Stop Name" value="mp nagar"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Bus Route Time</label>
                            <input type="time" name="bus_route_time" placeholder="Bus Route Time" value="19:22"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Bus No.</label>
                            <input type="text" name="bus_no" placeholder="Bus No." readonly value="MH19TS0001"
                                class="form-control">
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <center><input type="submit" name="submit" value="update" class="btn btn-primary" /></center>
                </div>
            </form>
        </div>
        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->
    </div>
    </div>
</section>

@include('common.footer')