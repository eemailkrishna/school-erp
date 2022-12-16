    @include('common.header')
    @include('common.navbar')
    <section class="content-header">
        <h1>
            Bus Management <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('/bus')}}"><i class="fa fa-truck"></i> Bus Management</a></li>
            <li class="active">Bus Details List</li>
        </ol>
    </section>

    <!---***********************************************************************************************************************************************************************************************************************************-->
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
                                    <th>S.no.</th>
                                    <th>Bus Route</th>
                                    <th>Start Stop Name</th>
                                    <th>Start Route Timing</th>
                                    <th>Bus No.</th>
                                    <th>Details</th>
                                </tr>
                            </thead>


                            <tr align='center'>

                                <th>1</th>
                                <th></th>
                                <th>mp nagar</th>
                                <th>19:22</th>
                                <th>MH19TS0001</th>

                                <th><button type="button" class="btn btn-default "
                                        onclick="post_content('bus/bus_route_list_details','id=');">Details</th>

                            </tr>


                            <tr align='center'>

                                <th>2</th>
                                <th>1 - KURHA</th>
                                <th>kalpna nagar</th>
                                <th>15:30</th>
                                <th>MH19TS0001</th>

                                <th><button type="button" class="btn btn-default "
                                        onclick="post_content('bus/bus_route_list_details','id=1 - KURHA');">Details
                                </th>

                            </tr>


                            <tr align='center'>

                                <th>3</th>
                                <th>80feet thana</th>
                                <th>BORKHEDA</th>
                                <th>14:22</th>
                                <th>MH19TS0001</th>

                                <th><button type="button" class="btn btn-default "
                                        onclick="post_content('bus/bus_route_list_details','id=80feet thana');">Details
                                </th>

                            </tr>


                            <tr align='center'>

                                <th>4</th>
                                <th>Khapar, Selamba</th>
                                <th>kolar</th>
                                <th>16:41</th>
                                <th>mh-05</th>

                                <th><button type="button" class="btn btn-default "
                                        onclick="post_content('bus/bus_route_list_details','id=Khapar, Selamba');">Details
                                </th>

                            </tr>


                            <tr align='center'>

                                <th>5</th>
                                <th>prabhat squr</th>
                                <th>kalpna nagar</th>
                                <th>14:38</th>
                                <th>mh-05</th>

                                <th><button type="button" class="btn btn-default "
                                        onclick="post_content('bus/bus_route_list_details','id=prabhat squr');">Details
                                </th>

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