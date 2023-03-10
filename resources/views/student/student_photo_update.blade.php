@include('common.header')
@include('common.navbar')

<script type="text/javascript">
function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "student/ajax_class_section_all.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#student_class_section").html(detail);
            for_stream(value);
        }
    });
}

function for_stream(value2) {
    if (value2 == "11TH" || value2 == "12TH") {
        $("#student_class_stream_div").show();
        $("#student_class_group_div").show();
    } else {
        $("#student_class_stream_div").hide();
        $("#student_class_group_div").hide();
    }
    $("#student_class_stream").val('All');
    $("#student_class_group").val('All');
    for_search11();
}

function get_group(value1) {
    if (value1 != 'All') {
        $('#student_class_group').html("<option value='' >Loading....</option>");
        $.ajax({
            type: "POST",
            url: access_link + "student/ajax_stream_group_all.php?stream_name=" + value1 + "",
            cache: false,
            success: function(detail1) {
                $("#student_class_group").html(detail1);
            }
        });
    } else {
        $("#student_class_group").html("<option value='All'>All</option>");
    }
    for_search11();
}

function for_search11() {

    var student_class = document.getElementById('student_class').value;
    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class_group = document.getElementById('student_class_group').value;
    var student_class_section = document.getElementById('student_class_section').value;
    var student_limit = document.getElementById('student_limit').value;
    var student_order_by = document.getElementById('student_order_by').value;

    if (student_class != '' || student_class_section != '') {
        $("#for_student_list").html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "student/ajax_student_photo_update.php?student_class=" + student_class +
                "&student_class_stream=" + student_class_stream + "&student_class_group=" +
                student_class_group + "&student_class_section=" + student_class_section + "&student_limit=" +
                student_limit + "&student_order_by=" + student_order_by + "",
            success: function(detail) {
                $('#for_student_list').html(detail);
            }
        });

    } else {
        $('#for_student_list').html('');
    }
}

function for_check(id) {
    if ($('#' + id).prop("checked") == true) {
        $("." + id).each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $("." + id).each(function() {
            $(this).prop('checked', false);
        });
    }
}

function validation() {
    var add = 0;
    $(".checked1").each(function() {
        if ($(this).prop("checked") == true) {
            add = add + 1;
        }
    });
    if (add > 0) {
        return true;
    } else {
        alert_new("Please Select Atleast One Student !!!", "red");
        return false;
    }
}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    $("#get_content").html(loader_div);
    $.ajax({
        url: access_link + "student/student_photo_update_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                get_content('student/student_photo_update');
            }
        }
    });
});
</script>

<form role="form" method="post" enctype="multipart/form-data" id="my_form">
    <section class="content-header">
        <h1>
            Student Photo Update
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('/students')}}"><i class="fa fa-graduation-cap"></i> Student</a></li>
            <li class="active">Student Profile Update</li>
        </ol>
    </section>
    <!---*****************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements disabled -->
            <div class="box box-primary my_border_top">
                <div class="box-header with-border ">

                </div>
                <!-- /.box-header -->
                <!------------------------------------------------Start Registration form--------------------------------------------------->

                <div class="box-body">
                    <div class="box-body table-responsive">
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="container-fluid">

                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="col-md-3">
                                                <label>Class</label>
                                                <select name="student_class" onchange="for_section(this.value);"
                                                    id="student_class" class="form-control">
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

                                            <div class="col-md-3 " id="student_class_stream_div" style="display:none;">
                                                <label>Stream</label>
                                                <select class="form-control" name="student_class_stream"
                                                    id="student_class_stream" onchange="get_group(this.value);">
                                                    <option value="All">All</option>
                                                    <option value="SCIENCE">SCIENCE</option>
                                                    <option value="ARTS">ARTS</option>
                                                    <option value="Commerce ">Commerce </option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 " id="student_class_group_div" style="display:none;">
                                                <label>Group</label>
                                                <select class="form-control" name="student_class_group"
                                                    id="student_class_group" onchange='for_search11();'>
                                                    <option value="All">All</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Section</label>
                                                <select name="student_class_section" id="student_class_section"
                                                    style="width:100%;" class="form-control" onchange="for_search11();">
                                                    <option value="">Select Section</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Limit</label>
                                                <select name="student_limit" id="student_limit" class="form-control"
                                                    onchange="for_search11();">
                                                    <option value="0">0-20</option>
                                                    <option value="20">20-40</option>
                                                    <option value="40">40-60</option>
                                                    <option value="60">60-80</option>
                                                    <option value="80">80-100</option>
                                                    <option value="100">100-120</option>
                                                    <option value="120">120-140</option>
                                                    <option value="140">140-160</option>
                                                    <option value="160">160-180</option>
                                                    <option value="180">180-200</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Order By</label>
                                                <select name="student_order_by" id="student_order_by"
                                                    class="form-control" onchange="for_search11();">
                                                    <option value="">Select</option>
                                                    <option value=" ORDER BY student_name">Student Name</option>
                                                    <option value=" ORDER BY CAST(school_roll_no AS UNSIGNED)">Roll No.
                                                    </option>
                                                    <option
                                                        value=" ORDER BY CAST(student_admission_number AS UNSIGNED)">
                                                        Admission No.</option>
                                                    <option value=" ORDER BY CAST(student_scholar_number AS UNSIGNED)">
                                                        Scholar No.</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div id="for_student_list" class="table-responsive">

                    </div>
                </div>
                <!---------------------------------------------End Registration form--------------------------------------------------------->
                <!-- /.box-body -->
            </div>
        </div>
    </section>
</form>
@include('common.footer')