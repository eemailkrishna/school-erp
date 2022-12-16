@include('common.header')
@include('common.navbar')


<script type="text/javascript">
function for_stream_from(value2) {
    if (value2 == "11TH" || value2 == "12TH") {
        $("#student_class_stream_div").show();
        $("#student_class_group_div").show();
        $("#student_class_stream_from").attr('required', true);
        $("#student_class_group_from").attr('required', true);
    } else {
        $("#student_class_stream_div").hide();
        $("#student_class_group_div").hide();
        $("#student_class_stream_from").attr('required', false);
        $("#student_class_group_from").attr('required', false);
    }
}

function get_group_from(value1) {
    $("#student_class_group_from").html("<option value=''>Loading.....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "session/ajax_stream_group.php?stream_name=" + value1 + "",
        cache: false,
        success: function(detail1) {
            $("#student_class_group_from").html(detail1);
        }
    });
}

function for_stream_to(value2) {
    if (value2 == "11TH" || value2 == "12TH") {
        $("#student_class_stream_div1").show();
        $("#student_class_group_div1").show();
        $("#student_class_stream_to").attr('required', true);
        $("#student_class_group_to").attr('required', true);
    } else {
        $("#student_class_stream_div1").hide();
        $("#student_class_group_div1").hide();
        $("#student_class_stream_to").attr('required', false);
        $("#student_class_group_to").attr('required', false);
    }
}

function get_group_to(value1) {
    $("#student_class_group_to").html("<option value=''>Loading.....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "session/ajax_stream_group.php?stream_name=" + value1 + "",
        cache: false,
        success: function(detail1) {
            $("#student_class_group_to").html(detail1);
        }
    });
}

function for_to() {
    var to_section = document.getElementById('to_section').value;
    var to_class = document.getElementById('to_class').value;
    var to_session = document.getElementById('to_session').value;
    var student_class_stream_to = document.getElementById('student_class_stream_to').value;
    var student_class_group_to = document.getElementById('student_class_group_to').value;
    var to_medium = document.getElementById('to_medium').value;
    var to_board = document.getElementById('to_board').value;
    var to_shift = document.getElementById('to_shift').value;
    if (to_section != '' && to_class != '' && to_session != '') {
        $('#to_student_list').html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "session/ajax_get_to_student.php?to_section=" + to_section + "&to_class=" +
                to_class + "&to_session=" + to_session + "&student_class_stream_to=" + student_class_stream_to +
                "&student_class_group_to=" + student_class_group_to + "&to_medium=" + to_medium + "&to_board=" +
                to_board + "&to_shift=" + to_shift + "",
            cache: false,
            success: function(detail) {
                $('#to_student_list').html(detail);
            }
        });

    }
}

function for_section_to(value) {
    $("#to_section").html("<option value=''>Loading.....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "session/ajax_class_section_all.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#to_section").html(detail);
            for_to();
        }
    });
}

function for_from() {
    var from_section = document.getElementById('from_section').value;
    var from_class = document.getElementById('from_class').value;
    var from_session = document.getElementById('from_session').value;
    var student_class_stream_from = document.getElementById('student_class_stream_from').value;
    var student_class_group_from = document.getElementById('student_class_group_from').value;
    var from_medium = document.getElementById('from_medium').value;
    var from_board = document.getElementById('from_board').value;
    var from_shift = document.getElementById('from_shift').value;
    if (from_section != '' && from_session != '' && from_class != '') {
        $('#from_student_list').html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "session/ajax_get_from_student.php?from_section=" + from_section +
                "&from_class=" + from_class + "&from_session=" + from_session + "&student_class_stream_from=" +
                student_class_stream_from + "&student_class_group_from=" + student_class_group_from +
                "&from_medium=" + from_medium + "&from_board=" + from_board + "&from_shift=" + from_shift + "",
            cache: false,
            success: function(detail) {
                $('#from_student_list').html(detail);
            }
        });
    }
}

function for_section_from(value) {
    $("#from_section").html("<option value=''>Loading.....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "session/ajax_class_section_all.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#from_section").html(detail);
            for_from();
        }
    });
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

$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "session/move_student_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            //alert_new(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                if (res[2] != '') {
                    alert_new('Already Exists Students ' + res[2], 'green');
                }
                get_content('session/move_student');
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        Session Management
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="{{url('/session')}}"><i class="fa fa-truck"></i>Session </a></li>
        <li class="active">Add Routes</li>
    </ol>
</section>

<!---********************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <form role="form" id="my_form" method="post" enctype="multipart/form-data">
        <div class="row">
            <!-- general form elements disabled -->
            <div class="box box-primary my_border_top">
                <div class="box-header with-border ">
                    <h3 class="box-title">Add Session</h3>
                </div>
                <!-- /.box-header -->
                <!------------------------------------------------Start Registration form--------------------------------------------------->

                <div class="box-body">

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-2">
                            </div>

                            <div class="col-md-8">
                                <label>From Select Session</label>
                                <select name="from_session" id="from_session" class="form-control"
                                    onchange="for_from();" required>
                                    <option selected value="2022_23"> 2022-23</option>
                                    <option value="2023_24"> 2023-24</option>
                                    <option value="2024_25"> 2024-25</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <label>To Select Session</label>
                                <select name="to_session" id="to_session" class="form-control" onchange="for_to();"
                                    required>
                                    <option selected value="2022_23"> 2022-23</option>
                                    <option value="2023_24"> 2023-24</option>
                                    <option value="2024_25"> 2024-25</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-4">
                                <label>From Select Class</label>
                                <select name="from_class" id="from_class" class="form-control"
                                    onchange='for_stream_from(this.value);for_section_from(this.value);for_from();'
                                    required>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Section</label>
                                    <select class="form-control" name="from_section" onchange='for_from();'
                                        id="from_section" required>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-2">
                            </div>

                            <div class="col-md-4">
                                <label>To Select Class</label>
                                <select name="to_class" id="to_class" class="form-control"
                                    onchange='for_stream_to(this.value);for_section_to(this.value);for_to();' required>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Section</label>
                                    <select class="form-control" name="to_section" onchange='for_to();' id="to_section"
                                        required>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-4 " id="student_class_stream_div" style="display:none;">
                                <div class="form-group">
                                    <label>Stream</label>
                                    <select class="form-control" name="student_class_stream_from"
                                        id="student_class_stream_from"
                                        onchange="get_group_from(this.value);for_from();">
                                        <option value="">Select Stream</option>
                                        <option value="SCIENCE">SCIENCE</option>
                                        <option value="ARTS">ARTS</option>
                                        <option value="Commerce ">Commerce </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 " id="student_class_group_div" style="display:none;">
                                <div class="form-group">
                                    <label>Group</label>
                                    <select class="form-control" name="student_class_group_from"
                                        id="student_class_group_from" onchange="for_from();">
                                        <option value="">Select Group</option>
                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-4 " id="student_class_stream_div1" style="display:none;">
                                <div class="form-group">
                                    <label>Stream</label>
                                    <select class="form-control" name="student_class_stream_to"
                                        id="student_class_stream_to" onchange="get_group_to(this.value);for_to();">
                                        <option value="">Select Stream</option>
                                        <option value="SCIENCE">SCIENCE</option>
                                        <option value="ARTS">ARTS</option>
                                        <option value="Commerce ">Commerce </option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-4 " id="student_class_group_div1" style="display:none;">
                                <div class="form-group">
                                    <label>Group</label>
                                    <select class="form-control" name="student_class_group_to"
                                        id="student_class_group_to" onchange="for_to();">
                                        <option value="">Select Group</option>
                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-2">
                            </div>

                            <div class="col-md-3" style="display:none;">
                                <div class="form-group">
                                    <label>Medium</label>
                                    <select class="form-control" name="from_student_medium" id="from_medium"
                                        onchange="for_from();">
                                        <option value="">Select</option>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3" style="display:none;">
                                <div class="form-group">
                                    <label>Board</label>
                                    <select class="form-control" name="from_student_board" id="from_board"
                                        onchange="for_from();">
                                        <option value="">Select</option>
                                        <option value="CBSE">CBSE</option>
                                        <option value="MP Board">MP Board</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3" style="display:none;">
                                <div class="form-group">
                                    <label>Shift</label>
                                    <select class="form-control" name="from_student_shift" id="from_shift"
                                        onchange="for_from();">
                                        <option value="">Select</option>
                                        <option value="Shift1">Shift1</option>
                                        <option value="Shift2">Shift2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-2">
                            </div>

                            <div class="col-md-3" style="display:none;">
                                <div class="form-group">
                                    <label>Medium</label>
                                    <select class="form-control" name="to_student_medium" id="to_medium"
                                        onchange="for_to();">
                                        <option value="">Select</option>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3" style="display:none;">
                                <div class="form-group">
                                    <label>Board</label>
                                    <select class="form-control" name="to_student_board" id="to_board"
                                        onchange="for_to();">
                                        <option value="">Select</option>
                                        <option value="CBSE">CBSE</option>
                                        <option value="MP Board">MP Board</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3" style="display:none;">
                                <div class="form-group">
                                    <label>Shift</label>
                                    <select class="form-control" name="to_student_shift" id="to_shift"
                                        onchange="for_to();">
                                        <option value="">Select</option>
                                        <option value="Shift1">Shift1</option>
                                        <option value="Shift2">Shift2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-2">
                            </div>

                            <div class="col-md-8 " id="from_student_list">
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-2">
                            </div>

                            <div class="col-md-8 " id="to_student_list">
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <center><input type="submit" name="submit" value="Submit" class="btn btn-success" /></center>
            </div>

        </div>
    </form>
    <!---------------------------------------------End Registration form--------------------------------------------------------->
    <!-- /.box-body -->
    </div>
    </div>
</section>

@include('common.footer')