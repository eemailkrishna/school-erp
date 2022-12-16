@include('common.header')
@include('common.navbar')

<script>
function for_list(value) {
    $('#my_table').html(loader_div);
    if (value != '') {
        $.ajax({
            type: "POST",
            url: access_link + "bus/ajax_bus_student_list.php?id=" + value + "",
            cache: false,
            success: function(detail) {
                $('#my_table').html(detail);
            }
        });
    } else {
        $('#my_table').html('');
    }
}
</script>
<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    $("#my_button").click();
    $.ajax({
        url: access_link + "bus/bus_student_list_api.php",
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
                get_content('bus/bus_student_list');
            }
        }
    });
});
</script>
<section class="content-header">
    <h1>
        Bus Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/bus')}}"><i class="fa fa-truck"></i> Bus Management</a></li>
        <li class="active">Student Registration List</li>
    </ol>
</section>

<!---*******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************    <section class="content">
      <!-- Small boxes (Stat box) -->
<form role="form" method="post" enctype="multipart/form-data" id="my_form">
    <section class="content">
        <div class="row">
            <!-- general form elements disabled -->
            <div class="box box-primary my_border_top">
                <div class="box-header with-border ">
                    <h3 class="box-title">Bus Student List</h3>
                </div>
                <!-- /.box-header -->
                <!------------------------------------------------Start Registration form--------------------------------------------------->

                <div class="box-body">

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class</label>
                            <select name="student_class" onchange="for_list(this.value);" class="form-control" required>
                                <option value="">Select Class</option>
                                <option value="NURSERY">NURSERY</option>
                                <option value="LKG">LKG</option>
                                <option value="UKG">UKG</option>
                                <option value="1ST">1ST</option>
                                <option value="2ND">2ND</option>
                                <option value="3RD">3RD</option>
                                <option value="4TH">4TH</option>
                                <option value="5TH">5TH</option>
                                <option value="6TH">6TH</option>
                                <option value="7TH">7TH</option>
                                <option value="8TH">8TH</option>
                                <option value="9TH">9TH</option>
                                <option value="10TH">10TH</option>
                                <option value="11TH">11TH</option>
                                <option value="12TH">12TH</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <!-- /.box -->

                        <div class="box box-success ">
                            <div class="box-header with-border">
                            </div>
                            <div class="box-body table-responsive" id="my_table">

                            </div>

                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.row -->
    </section>
</form>
<script>
for_list('');
</script>
@include('common.footer')