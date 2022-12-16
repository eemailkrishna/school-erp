@include('common.header')
@include('common.navbar')
<script>
function for_list() {

    var student_class = document.getElementById('student_class').value;
    var student_class_section = document.getElementById('student_class_section').value;
    var exam_type = document.getElementById('exam_type').value;
    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class_group = document.getElementById('student_class_group').value;
    var subject_type = document.getElementById('subject_type').value;
    var sheet_type = document.getElementById('sheet_type').value;
    var order_by = document.getElementById('order_by').value;
    if (student_class_section != '' && student_class != '' && sheet_type != '') {
        if (sheet_type == 'all') {
            $('#marks_download').html(loader_div);
            $.ajax({
                type: "POST",
                url: access_link + "examination/ajax_marks_download_state_board1.php?id=" + student_class +
                    "&student_section=" + student_class_section + "&student_class_stream=" +
                    student_class_stream + "&student_class_group=" + student_class_group + "&subject_type=" +
                    subject_type + "&order_by=" + order_by + "",
                cache: false,
                success: function(detail) {
                    $('#marks_download').html(detail);

                }
            });
        } else {
            if (exam_type != '') {
                $('#marks_download').html(loader_div);
                $.ajax({
                    type: "POST",
                    url: access_link + "examination/ajax_marks_download_state_board.php?id=" + student_class +
                        "&student_section=" + student_class_section + "&student_exam_type=" + exam_type +
                        "&student_class_stream=" + student_class_stream + "&student_class_group=" +
                        student_class_group + "&subject_type=" + subject_type + "&order_by=" + order_by + "",
                    cache: false,
                    success: function(detail) {
                        $('#marks_download').html(detail);

                    }
                });
            } else {
                $('#marks_download').html('');
            }
        }
    }

}

function for_exam() {
    $('#exam_type').html("<option value='' >Loading....</option>");
    var student_class = document.getElementById('student_class').value;
    $.ajax({
        type: "POST",
        url: access_link + "examination/ajax_get_exam_type.php?class_name=" + student_class + "",
        cache: false,
        success: function($detail) {
            var str = $detail;
            $("#exam_type").html(str);

        }
    });

}

function for_stream(value2) {
    if (value2 == "11TH" || value2 == "12TH") {
        $("#student_class_stream_div").show();
        $("#student_class_group_div").show();
        $("#student_class_stream").attr('required', true);
        $("#student_class_group").attr('required', true);
    } else {
        $("#student_class_stream_div").hide();
        $("#student_class_group_div").hide();
        $("#student_class_stream").attr('required', false);
        $("#student_class_group").attr('required', false);
    }
}

function get_group(value1) {
    $('#student_class_group').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "examination/ajax_stream_group.php?stream_name=" + value1 + "",
        cache: false,
        success: function(detail1) {
            $("#student_class_group").html(detail1);
        }
    });
    for_list();
}
</script>
<script type="text/javascript">
function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "examination/ajax_class_section_code_marks.php?class_name=" + value + "",
        cache: false,
        success: function($detail) {
            var str = $detail;

            $("#student_class_section").html(str);
            for_exam();
            for_list();
        }
    });

}
</script>
<script>
function exam_sheet(value) {
    if (value == 'exam_wise') {
        $('#for_exam_wise').show();
    } else {
        $('#for_exam_wise').hide();
    }
}
</script>

<section class="content-header">
    <h1>
        Examination Management <small> Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/examination')}}"><i class="fa fa-id-card-o"></i> Examination</a></li>
        <li class="active">Marksheet View</li>
    </ol>
</section>



<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Exam Mark List</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">

                <div class="col-md-3 ">
                    <div class="form-group">
                        <label>Class</label>
                        <select name="student_class" onchange="for_section(this.value);for_stream(this.value);"
                            id="student_class" class="form-control" required>
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
                <div class="col-md-3 " id="student_class_stream_div" style="display:none;">
                    <div class="form-group">
                        <label>Stream<font style="color:red"><b>*</b></font></label>
                        <select class="form-control" name="student_class_stream" id="student_class_stream"
                            onchange="get_group(this.value);">
                            <option value="">Select Stream</option>
                            <option value="LLB">LLB</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-3" id="student_class_group_div" style="display:none;">
                    <div class="form-group">
                        <label>Group<font style="color:red"><b>*</b></font></label>
                        <select class="form-control" name="student_class_group" id="student_class_group"
                            onchange='for_list();'>
                            <option value="">Select Group</option>
                        </select>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="form-group">
                        <label>Section</label>
                        <select class="form-control" name="student_class_section" id="student_class_section"
                            onchange='for_list();' required>
                            <option value="">Select Section</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="form-group">
                        <label>Sheet Type</label>
                        <select class="form-control" name="sheet_type" id="sheet_type"
                            onchange='for_list(),exam_sheet(this.value);' required>
                            <option value="">Select</option>
                            <option value="all">Final Sheet</option>
                            <option value="exam_wise">Exam Wise Sheet</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-3 " id="for_exam_wise" ; style="display:none" ;>
                    <div class="form-group">
                        <label>Exam Type</label>
                        <select class="form-control" name="exam_type" id="exam_type" onchange='for_list();'>
                            <option value="">Select Exam Type</option>

                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Subject Type</label>
                        <select class="form-control" id="subject_type" onchange='for_list();'>
                            <option value="All">All</option>
                            <option value="subject">Main Subject</option>
                            <option value="practical">Practical Subject</option>
                            <option value="other_subject">Other Subject</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Order By</label>
                        <select class="form-control" name="order_by" id="order_by" onchange='for_list();'>
                            <option value="">Select</option>
                            <option value=" ORDER BY student_name ASC">By Name</option>
                            <option value=" ORDER BY student_father_name ASC">By Father Name</option>
                            <option value=" ORDER BY student_admission_number ASC">By Admission No.</option>
                            <option value=" ORDER BY student_scholar_number ASC">By Scholar No.</option>
                            <option value=" ORDER BY CAST(school_roll_no AS UNSIGNED) ASC">By School Roll No.</option>
                            <option value=" ORDER BY student_roll_no ASC">By Student Roll No.</option>
                        </select>
                    </div>
                </div>



            </div>
            <div class="box-body " id="marks_download">

            </div>
        </div>
    </div>
</section>

@include('common.footer')