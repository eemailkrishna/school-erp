@include('common.header')
@include('common.navbar')


<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "reminder/reminder_teacher_add_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('reminder/reminder_teacher_list');
            }
        }
    });
});
</script>
<script type="text/javascript">
function for_section(value) {

    $.ajax({
        type: "POST",
        url: access_link + "downloads/ajax_class_section.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#student_class_section").html("<option value='All'>All</option>" + detail);
        }
    });

}

function for_subject() {
    $('#subject_name').html("<option value='' >Loading....</option>");
    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class_group = document.getElementById('student_class_group').value;
    var student_class = document.getElementById('std_class').value;
    $.ajax({
        address: "POST",
        url: access_link + "homework/ajax_get_subject_1.php?value=" + student_class + "&student_class_stream=" +
            student_class_stream + "&student_class_group=" + student_class_group + "&student_class_stream=" +
            student_class_stream + "&student_class_group=" + student_class_group + "",
        cache: false,
        success: function(detail) {

            console.log(detail)
            $("#subject_name").html(detail);

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
        url: access_link + "homework/ajax_stream_group.php?stream_name=" + value1 + "",
        cache: false,
        success: function(detail1) {
            $("#student_class_group").html(detail1);
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
        <li class="active"><i class="fa fa-user-plus"></i> Add Teacher Reminder</li>
    </ol>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning  ">
            <div class="box-header with-border ">
                <h3 class="box-title">Reminder Teacher Form</h3>
            </div>

            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Teacher Name<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="reminder_teacher_name" required>

                                <option value="kailash soni">kailash soni</option>


                                <option value="kailash soni">kailash soni</option>


                                <option value="jay kishan">jay kishan</option>


                                <option value="Abhul Rjaak ">Abhul Rjaak </option>


                                <option value="suresh soni">suresh soni</option>


                                <option value="rohan">rohan</option>


                                <option value="DEMO">DEMO</option>


                                <option value="shreya sharma">shreya sharma</option>


                                <option value="pravin">pravin</option>


                                <option value="sanjay">sanjay</option>


                                <option value="Rashi Saxena">Rashi Saxena</option>


                                <option value="Pankajini Patra">Pankajini Patra</option>


                                <option value="Jyoti Ranjan Patra">Jyoti Ranjan Patra</option>


                                <option value="Goutam Kumar Das">Goutam Kumar Das</option>


                                <option value="Human Ram Bhati">Human Ram Bhati</option>


                                <option value="Premshankar Yadav">Premshankar Yadav</option>


                                <option value="Amit Kumar Patra">Amit Kumar Patra</option>


                                <option value="Sibdutta Negi">Sibdutta Negi</option>


                                <option value="Brahmarao">Brahmarao</option>


                                <option value="srishti gusain">srishti gusain</option>


                                <option value="HARSHALI SHAH">HARSHALI SHAH</option>


                                <option value="tushar modi ">tushar modi </option>


                                <option value="DS SALUJA">DS SALUJA</option>


                                <option value="AYUSH">AYUSH</option>


                                <option value="TUSHAR IYRE ">TUSHAR IYRE </option>


                                <option value="Rajanikanta Mund">Rajanikanta Mund</option>


                                <option value="kunal mourya">kunal mourya</option>


                                <option value="MR. SANTOSH KUMAR SAHU">MR. SANTOSH KUMAR SAHU</option>


                                <option value="MR. BHOOPENDRA LODHI ">MR. BHOOPENDRA LODHI </option>


                                <option value="Anjali ojha">Anjali ojha</option>


                                <option value="atul singh thakur ">atul singh thakur </option>


                                <option value="SANTOSH KUMAR SINGH">SANTOSH KUMAR SINGH</option>


                                <option value="rani">rani</option>


                                <option value="KUMAR RAVIKANT">KUMAR RAVIKANT</option>


                                <option value="nikhil advin">nikhil advin</option>


                                <option value="sadab">sadab</option>


                                <option value="Ravi">Ravi</option>


                                <option value="Samir harle">Samir harle</option>


                                <option value="umesh mourya">umesh mourya</option>


                                <option value="Neelam jharbade">Neelam jharbade</option>


                                <option value="anand sharma">anand sharma</option>


                                <option value="jitendra shriwash">jitendra shriwash</option>


                                <option value="demo faculty">demo faculty</option>


                                <option value="VATAN VERMA">VATAN VERMA</option>


                                <option value="user1">user1</option>


                                <option value="Pawan malviya">Pawan malviya</option>


                                <option value=" teacher"> teacher</option>


                                <option value="ABHISHEK SINGH THAKUR">ABHISHEK SINGH THAKUR</option>


                                <option value="MONU KUMAR">MONU KUMAR</option>


                                <option value="abhushek">abhushek</option>


                                <option value="Teacher">Teacher</option>


                                <option value="Supriya tiwari">Supriya tiwari</option>


                                <option value="Yashpal Kr">Yashpal Kr</option>


                                <option value="VAISHNAVI AGRWAL">VAISHNAVI AGRWAL</option>


                                <option value="KAREEM RANA">KAREEM RANA</option>


                                <option value="PALWINDER KAUR">PALWINDER KAUR</option>


                                <option value="Supriya Santosh">Supriya Santosh</option>


                                <option value="MD JAHIR KHAN">MD JAHIR KHAN</option>


                                <option value="Supriya Santosh">Supriya Santosh</option>


                                <option value="Mr Daya Nand Tiwari">Mr Daya Nand Tiwari</option>


                                <option value="satyaprakash yadav">satyaprakash yadav</option>


                                <option value="praveen">praveen</option>


                                <option value="Neelam jharbade">Neelam jharbade</option>


                                <option value="Tribhuwan Kumar">Tribhuwan Kumar</option>


                                <option value="SURAJ KUMAR SINGH">SURAJ KUMAR SINGH</option>


                                <option value="Rohit ">Rohit </option>


                                <option value="umesh">umesh</option>


                                <option value="Shiwanand Tiwari">Shiwanand Tiwari</option>


                                <option value="suresh soni">suresh soni</option>


                                <option value="RAYEES">RAYEES</option>


                                <option value="ANAYAT ULLAH">ANAYAT ULLAH</option>


                                <option value="xxx">xxx</option>


                                <option value="AAA">AAA</option>


                                <option value="AA">AA</option>


                                <option value=""></option>


                                <option value="JAVID">JAVID</option>


                                <option value="Hansraj">Hansraj</option>


                                <option value="Mohit nagar">Mohit nagar</option>


                                <option value="PRAKASH KUMAWAT">PRAKASH KUMAWAT</option>


                                <option value="Sunita Bai">Sunita Bai</option>


                                <option value="Rati ">Rati </option>


                                <option value="Priyanka kaushik">Priyanka kaushik</option>


                                <option value="JAGMAL YADAV">JAGMAL YADAV</option>


                                <option value="RAMKISHAN JI">RAMKISHAN JI</option>


                                <option value="rima d">rima d</option>


                                <option value="nidhi">nidhi</option>


                                <option value="pooja ">pooja </option>


                                <option value="ufgv">ufgv</option>


                                <option value="Moniika">Moniika</option>


                                <option value="Monika">Monika</option>


                                <option value="shamli ">shamli </option>


                                <option value="kundan kumar jha">kundan kumar jha</option>


                                <option value="JAGMAL YADAV">JAGMAL YADAV</option>


                                <option value="rahul ">rahul </option>


                                <option value="eswari">eswari</option>


                                <option value="JAGMAL YADAV">JAGMAL YADAV</option>


                                <option value="JAGMAL YADAV">JAGMAL YADAV</option>


                                <option value="ABJISHEK LAND">ABJISHEK LAND</option>


                                <option value="TUSHAR SULTANE">TUSHAR SULTANE</option>


                                <option value="PARVATI PATIL">PARVATI PATIL</option>


                                <option value="ASHADUR RAHMAN MONDAL">ASHADUR RAHMAN MONDAL</option>


                                <option value="TUSHAR">TUSHAR</option>


                                <option value="VIVEK KUMAR">VIVEK KUMAR</option>


                                <option value="suresh Devashi">suresh Devashi</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <th><b style="font-size:15px">Choose Class</b></th>
                            <select name="std_class" class="form-control new_student" id="std_class"
                                onchange="for_section(this.value);for_subject();for_stream(this.value)">
                                <option value="">All</option>
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
                                onchange="get_group(this.value);for_subject();">
                                <option value="">Select Stream</option>
                                <option value="SCIENCE">SCIENCE</option>
                                <option value="ARTS">ARTS</option>
                                <option value="Commerce ">Commerce </option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_div" style="display:none;">
                        <div class="form-group">
                            <label>Group<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_group" id="student_class_group"
                                onchange="for_subject();">
                                <option value="">Select Group</option>
                            </select>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <th><b style="font-size:15px">Section</b></th>
                            <select class="form-control" name="student_class_section" id="student_class_section">
                                <option value="All">All</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Subject Name<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="subject_name" id="subject_name">
                                <option value="">Select Subject</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="reminder_teacher_task_1">Task 1<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="reminder_teacher_task_1" class="form-control bordder-color" id=""
                                required>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="reminder_teacher_task_2">Task 2</label>
                            <input type="text" name="reminder_teacher_task_2" class="form-control bordder-color" id="">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="reminder_teacher_task_3">Task 3</label>
                            <input type="text" name="reminder_teacher_task_3" class="form-control bordder-color" id="">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="reminder_teacher_task_4">Task 4</label>
                            <input type="text" name="reminder_teacher_task_4" class="form-control bordder-color" id="">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="reminder_teacher_task_5">Task 5</label>
                            <input type="text" name="reminder_teacher_task_5" class="form-control bordder-color" id="">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Allocated Date<font style="color:red"><b>*</b></font></label>
                            <input type="date" value="2022-12-05" name="reminder_allocated_date" id="myLocalDate"
                                placeholder="Date" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Finsih Date</label>
                            <input type="date" name="reminder_finish_date" placeholder="Date" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Remark<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="reminder_teacher_remark" placeholder="Remark" value=""
                                class="form-control">
                        </div>
                    </div>



                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
                    </div>
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')