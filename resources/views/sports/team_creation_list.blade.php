@include('common.header')
@include('common.navbar')

<script>
function for_search11() {
    //var company_name12=document.getElementById('company_name12').value;
    var sports_name = document.getElementById('sports_name').value;
    var age_category = document.getElementById('age_category').value;
    if (sports_name != '' && age_category != '') {
        $('#for_student_list').html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "sports/ajax_team_creation_list.php?sports_name=" + sports_name +
                "&age_category=" + age_category + "",
            success: function(detail) {
                ////alert_new(detail);
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
</script>
<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        for_fee(s_no);
    } else {
        return false;
    }
}

function for_fee(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "sports/dlt_team_participants.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('sports/team_creation_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}


function valid1(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        for_fee1(s_no);
    } else {
        return false;
    }
}

function for_fee1(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "sports/dlt_team_staff.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('sports/team_creation_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Team Creation List
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/sports')}}"><i class="fa fa-futbol-o"></i> Sport Management</a></li>
        <li class="active"><i class="fa fa-list"></i>Team Creation List</li>
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

            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <form action method="post">
                <div class="box-body">
                    <div class="box-body table-responsive">
                        <div class="col-sm-12">&nbsp;</div>
                        <div class="col-sm-12">

                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="container-fluid">

                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-3">
                                                <label>Sports Name</label>
                                                <select name="sports_name" class="form-control" id="sports_name"
                                                    onchange="for_search11();" required>
                                                    <option value="All">All</option>
                                                    <option value="फूत्बल्ल">फूत्बल्ल</option>
                                                    <option value="Basket Ball">Basket Ball</option>
                                                    <option value="Bedminton">Bedminton</option>
                                                    <option value="Chess">Chess</option>
                                                    <option value="Cricket">Cricket</option>
                                                    <option value="Fancey ">Fancey </option>
                                                    <option value="football">football</option>
                                                    <option value="high jump">high jump</option>
                                                    <option value="hoky">hoky</option>
                                                    <option value="hollyboll">hollyboll</option>
                                                    <option value="Keram">Keram</option>
                                                    <option value="kho kho">kho kho</option>
                                                    <option value="long jump">long jump</option>
                                                    <option value="NADI PAHAD">NADI PAHAD</option>
                                                    <option value="Running">Running</option>
                                                    <option value="swiming">swiming</option>
                                                    <option value="teakndow">teakndow</option>
                                                    <option value="testing">testing</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Age Category</label>
                                                <select name="age_category" class="form-control" id="age_category"
                                                    onchange="for_search11();" required>
                                                    <option value="All">All</option>
                                                    <option value="Under 1 Year">Under 1 Year</option>
                                                    <option value="Under 10 Year">Under 10 Year</option>
                                                    <option value="Under 19 Year">Under 19 Year</option>
                                                    <option value="Under 2022 Year">Under 2022 Year</option>
                                                    <option value="Under 23 Year">Under 23 Year</option>
                                                    <option value="Under 4 Year">Under 4 Year</option>
                                                    <option value="Under 7 Year">Under 7 Year</option>
                                                    <option value="Under 8 Year">Under 8 Year</option>
                                                    <option value="Under 9 Year">Under 9 Year</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                            <div id="for_student_list">

                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                </div>
                <!---------------------------------------------End Registration form--------------------------------------------------------->
                <!-- /.box-body -->
        </div>
    </div>
</section>
<!-- /.content -->
<script>
for_search11();
</script>

@include('common.footer')