@include('common.header')
@include('common.navbar')
<script>
function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "fees_monthly/ajax_class_section.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#student_class_section").html(detail);
        }
    });
}

function print_list() {
    $("#student_list").html(loader_div);
    var student_class = document.getElementById('student_class').value;
    var student_class_section = document.getElementById('student_class_section').value;
    var student_bus = document.getElementById('student_bus').value;

    var student_due_month = [];
    $(".month").each(function() {
        if ($(this).prop("checked") == true) {
            student_due_month.push($(this).val());
        }
    });

    var student_note = document.getElementById('student_note').value;

    var for_prev_amt = '';
    if ($("#for_prev_amt").prop("checked") == true) {
        for_prev_amt = 'Yes';
    } else {
        for_prev_amt = 'No';
    }

    if (student_class != '' && student_class_section != '' && student_due_month != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_get_student_demand_bill_list_for_print.php",
            data: {
                student_class: student_class,
                student_class_section: student_class_section,
                student_bus: student_bus,
                student_due_month: student_due_month,
                student_note: student_note,
                for_prev_amt: for_prev_amt
            },
            cache: false,
            success: function(detail) {
                $("#student_list").html(detail);
            }
        });
    } else {
        $('#student_list').html('');
    }
}

function print_list1() {
    var student_class = document.getElementById('student_class').value;
    var student_class_section = document.getElementById('student_class_section').value;
    var student_bus = document.getElementById('student_bus').value;

    var student_due_month = [];
    $(".month").each(function() {
        if ($(this).prop("checked") == true) {
            student_due_month.push($(this).val());
        }
    });

    var student_note = document.getElementById('student_note').value;

    var for_prev_amt = '';
    if ($("#for_prev_amt").prop("checked") == true) {
        for_prev_amt = 'Yes';
    } else {
        for_prev_amt = 'No';
    }

    if (student_class != '' && student_class_section != '' && student_due_month != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_get_fee_demand_bill_student_list.php",
            data: {
                student_class: student_class,
                student_class_section: student_class_section,
                student_bus: student_bus,
                student_due_month: student_due_month,
                student_note: student_note,
                for_prev_amt: for_prev_amt
            },
            cache: false,
            success: function(detail) {
                $("#prnt_stdnt_lst").html(detail);
                $("#model_button").click();
            }
        });
    }
}

function print_list2() {
    var student_roll_no = [];
    $(".selected_student").each(function() {
        if ($(this).prop("checked") == true) {
            student_roll_no.push($(this).val());
        }
    });
    if (student_roll_no != '') {
        $("#student_list").html(loader_div);
        var student_class = document.getElementById('student_class').value;
        var student_class_section = document.getElementById('student_class_section').value;
        var student_bus = document.getElementById('student_bus').value;

        var student_due_month = [];
        $(".month").each(function() {
            if ($(this).prop("checked") == true) {
                student_due_month.push($(this).val());
            }
        });

        var student_note = document.getElementById('student_note').value;

        var for_prev_amt = '';
        if ($("#for_prev_amt").prop("checked") == true) {
            for_prev_amt = 'Yes';
        } else {
            for_prev_amt = 'No';
        }

        if (student_class != '' && student_class_section != '' && student_due_month != '') {
            $.ajax({
                type: "POST",
                url: access_link + "fees_monthly/ajax_get_selected_student_demand_bill_list_for_print.php",
                cache: false,
                data: {
                    student_roll_no: student_roll_no,
                    student_class: student_class,
                    student_class_section: student_class_section,
                    student_bus: student_bus,
                    student_due_month: student_due_month,
                    student_note: student_note,
                    for_prev_amt: for_prev_amt
                },
                success: function(detail) {
                    $("#student_list").html(detail);
                }
            });
        } else {
            $('#student_list').html('');
        }
    } else {
        alert("Please Select Atleast One student !!!");
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
</script>
<script>
function for_print() {
    var divToPrint = document.getElementById("printTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
</script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Fees Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/fees')}}"><i class="fa fa-money"></i> Fees</a></li>
        <li class="active">Student Fee Add</li>
    </ol>
</section>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->


<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">

            <!-- /.box-header -->
            <div class="box-body">
                <br>
                <input type="hidden" id="school_info_school_name" value="SIMPTION TECH PVT LTD" />
                <div class="box-body  col-md-12">

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Select Student Class</label>
                            <select name="student_class" class="form-control" id="student_class"
                                onchange="for_section(this.value);" required>
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
                    <div class="col-md-1">
                        <div class="form-group">
                            <label>Section</label>
                            <select name="student_class_section" class="form-control" id="student_class_section"
                                onchange="" required>
                                <option value="All">All</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <label>Std Bus</label>
                            <select name="student_bus" class="form-control" id="student_bus" onchange="" required>
                                <option value="All">All</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label>Note :</label>
                        <input type="text" name="" id="student_note" placeholder="Please Write Dues / Paid Note Here"
                            class="form-control" />
                    </div>

                    <div class="col-md-2">
                        <center>
                            <label>Click For List Print :</label>
                            <!-- <button type="button" onclick="print_list();" class="btn btn-info">For List Print</button> -->
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">For
                                    List Print
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li style="cursor: pointer;" onclick="print_list();"><a>All</a></li>
                                    <li class="divider"></li>
                                    <li style="cursor: pointer;" onclick="print_list1();"><a>Selected</a></li>
                                </ul>
                            </div>
                        </center>
                    </div>

                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-4">
                        <h3>Select Months</h3>
                    </div>
                    <div class="col-md-4"><span style="color:red;float:right;"><input type="checkbox" id="month"
                                value="" onclick="for_check(this.id);" /> All Check / Uncheck</span></div>
                    <div class="col-md-4"><span style="color:blue;float:right;"><input type="checkbox" id="for_prev_amt"
                                value="" /> For Previous Amount</span></div>
                </div>

                <div class="col-md-10 col-md-offset-1">

                    <div class="col-md-3">
                        <input type="checkbox" name="" value="04" class="month" /> April Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="05" class="month" /> May Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="06" class="month" /> June Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="07" class="month" /> July Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="08" class="month" /> August Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="09" class="month" /> September Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="10" class="month" /> October Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="11" class="month" /> November Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="12" class="month" /> December Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="01" class="month" /> January Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="02" class="month" /> February Month
                    </div>
                    <div class="col-md-3">
                        <input type="checkbox" name="" value="03" class="month" /> March Month
                    </div>

                </div>
                <div class="col-md-12">&nbsp;</div>

                <div class="box-body col-md-12" style="border:1px solid;">
                    <center><u>
                            <h3 style="color:red;">Dues List</h3>
                        </u></center>
                    <div class="col-md-2">&nbsp;</div>
                    <div class="col-md-8" id="student_list">

                    </div>
                    <div class="col-md-2">&nbsp;</div>
                </div>


            </div>

            <div class="box-body">
                <div class="col-md-12">
                    <center>
                        <button type="button" class="btn btn-default" onclick="for_print();"><i class="fa fa-print"
                                aria-hidden="true"></i> Print In Pdf</button>
                    </center>
                </div>
            </div>

        </div>
        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->
    </div>
    </div>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->


<!------  Start Model ------->
<!-- Trigger the modal with a button -->
<button type="button" id="model_button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
    style="display:none;">Open Modal</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Student List</h4>
            </div>
            <div class="modal-body" id="prnt_stdnt_lst">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn my_background_color" onclick="print_list2();" data-dismiss="modal">Open
                    List</button>
            </div>
        </div>

    </div>
</div>
@include('common.footer')
<!------  End Model ------->