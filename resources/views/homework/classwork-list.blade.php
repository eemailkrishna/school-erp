@include('common.header')
@include('common.navbar')

<section class="content-header">
    <h1>
        Class Work Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('homework')}}"><i class="fa fa-book"></i> Classwork</a></li>
        <li class="active"><i class="fa fa-list"></i> Classwork List</li>
    </ol>
</section>

<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_fee(s_no);
    } else {
        return false;
    }
}

function delete_fee(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "homework/classwork_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('homework/classwork_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
/*	
	function for_search(){
	    var student_class=document.getElementById('student_class').value;
	    var particular_date=document.getElementById('particular_date').value;
	    if(student_class!='' && particular_date!=''){
	        var pass_var="student_class="+student_class+"&particular_date="+particular_date;
	    }else{
	    if(student_class!=''){
	        var pass_var="student_class="+student_class;
	    }else if(particular_date!=''){
	        var pass_var="particular_date="+particular_date;
	    }else{
	        var pass_var="";
	    }
	    }
	    post_content('homework/homework_list', pass_var);
	}
	*/
</script>


<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Classwork List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">

                    <div class="col-md-8 col-md-offset-2">


                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Class</label>
                                <select name="student_class" id="student_class" class="form-control"
                                    onchange="for_search();">
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Particular Date</label>
                                <input style="size:40px;" type="date" name="particular_date" id="particular_date"
                                    class="form-control" oninput="for_search();" value="" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Updated By</label>
                                <select name="update_by" class="form-control new_student" id="update_by"
                                    onchange="for_search();">
                                    <option value="">All User</option>
                                    <option value="000@GMAIL.COM">000@GMAIL.COM</option>
                                    <option value="00@GMAIL.COM">00@GMAIL.COM</option>
                                    <option value="22188689@SJ.COM">22188689@SJ.COM</option>
                                    <option value="aashu@gmail.com">aashu@gmail.com</option>
                                    <option value="abc@gmail.com">abc@gmail.com</option>
                                    <option value="alokkumarsharma1983@gmail.com">alokkumarsharma1983@gmail.com</option>
                                    <option value="ANILNEMA17@GMAIL.COM">ANILNEMA17@GMAIL.COM</option>
                                    <option value="anitachoudhary@gmail.com">anitachoudhary@gmail.com</option>
                                    <option value="arizaktar@gmail.com">arizaktar@gmail.com</option>
                                    <option value="ASHADURMONDALL@GMAIL.COM">ASHADURMONDALL@GMAIL.COM</option>
                                    <option value="bbinakia@rocketmail.com">bbinakia@rocketmail.com</option>
                                    <option value="bbsbs@d.com">bbsbs@d.com</option>
                                    <option value="BHAN.RATHOD@GMAIL.COM">BHAN.RATHOD@GMAIL.COM</option>
                                    <option value="BHOOPENDRA081194@GMAIL.COM">BHOOPENDRA081194@GMAIL.COM</option>
                                    <option value="bhopal@gmail.com">bhopal@gmail.com</option>
                                    <option value="bonaldsangma@gmail.com">bonaldsangma@gmail.com</option>
                                    <option value="cds@gmaill.com">cds@gmaill.com</option>
                                    <option value="dec@gmail.cpm">dec@gmail.cpm</option>
                                    <option value="demo123@gmail.com">demo123@gmail.com</option>
                                    <option value="demo@gmail.com">demo@gmail.com</option>
                                    <option value="dilrubaazad357@gail.com">dilrubaazad357@gail.com</option>
                                    <option value="dummy@gmail.com">dummy@gmail.com</option>
                                    <option value="farhanashraf487@gmail.com">farhanashraf487@gmail.com</option>
                                    <option value="fkgkv@gmail.com">fkgkv@gmail.com</option>
                                    <option value="ganeshdwarapureddi1999@gmail.com">ganeshdwarapureddi1999@gmail.com
                                    </option>
                                    <option value="gunghuu10@gmail.com">gunghuu10@gmail.com</option>
                                    <option value="hansraj4384@gmail.com">hansraj4384@gmail.com</option>
                                    <option value="HARSHALI234@GMAIL.COM">HARSHALI234@GMAIL.COM</option>
                                    <option value="harshitkumars092@gmail.com">harshitkumars092@gmail.com</option>
                                    <option value="info@simption.com">info@simption.com</option>
                                    <option value="iringattirirashid@gmail.com">iringattirirashid@gmail.com</option>
                                    <option value="jay@gmail.com">jay@gmail.com</option>
                                    <option value="kailusoni99@gmail.com">kailusoni99@gmail.com</option>
                                    <option value="kaveri12@gmail.com">kaveri12@gmail.com</option>
                                    <option value="kjhatimple@gmail.com">kjhatimple@gmail.com</option>
                                    <option value="KOSAL78@GMAIL.COM">KOSAL78@GMAIL.COM</option>
                                    <option value="mahsramshamli@gmail.com">mahsramshamli@gmail.com</option>
                                    <option value="md.gjgj@gmai.com">md.gjgj@gmai.com</option>
                                    <option value="monika@gmail.com">monika@gmail.com</option>
                                    <option value="nagendra709042198@GMAIL.COM">nagendra709042198@GMAIL.COM</option>
                                    <option value="nbikaujgh@gmail.com">nbikaujgh@gmail.com</option>
                                    <option value="noranglalmanglaw@gmail.com">noranglalmanglaw@gmail.com</option>
                                    <option value="parantappublicschool@gmail.com">parantappublicschool@gmail.com
                                    </option>
                                    <option value="pdkoli82@gmail.com">pdkoli82@gmail.com</option>
                                    <option value="pfedjhnepj@gmail.com">pfedjhnepj@gmail.com</option>
                                    <option value="Pranatbhai123@gmail.com">Pranatbhai123@gmail.com</option>
                                    <option value="rahul@gmail.com">rahul@gmail.com</option>
                                    <option value="rahul@simption.com">rahul@simption.com</option>
                                    <option value="rajaak987@gmail.com">rajaak987@gmail.com</option>
                                    <option value="rajanikanta.fine@gmail.com">rajanikanta.fine@gmail.com</option>
                                    <option value="rani73@gmail.com">rani73@gmail.com</option>
                                    <option value="rashisaxena1997@gmail.com">rashisaxena1997@gmail.com</option>
                                    <option value="rathore.ayush37@gmail.com">rathore.ayush37@gmail.com</option>
                                    <option value="ravi100281@gmail.com">ravi100281@gmail.com</option>
                                    <option value="rkmps2014@gmail.com">rkmps2014@gmail.com</option>
                                    <option value="SAINIKISHAN2002@GMAIL.COM">SAINIKISHAN2002@GMAIL.COM</option>
                                    <option value="sanjaykr875762@gmail.com">sanjaykr875762@gmail.com</option>
                                    <option value="sghage@tsrd.com">sghage@tsrd.com</option>
                                    <option value="shsh@gmail.com">shsh@gmail.com</option>
                                    <option value="SIR1234@GMAIL.COM">SIR1234@GMAIL.COM</option>
                                    <option value="someone@someid.com">someone@someid.com</option>
                                    <option value="srishtigusain56@gmail.com">srishtigusain56@gmail.com</option>
                                    <option value="subairfaisy@gmail.com">subairfaisy@gmail.com</option>
                                    <option value="sunflowerpublicschool786@gmail.com">
                                        sunflowerpublicschool786@gmail.com</option>
                                    <option value="supriyasantosh1234@gmail.com">supriyasantosh1234@gmail.com</option>
                                    <option value="sureshramesh@gmail.com">sureshramesh@gmail.com</option>
                                    <option value="teacher1@gmail.com">teacher1@gmail.com</option>
                                    <option value="tushar234@gmail.com">tushar234@gmail.com</option>
                                    <option value="umeshmourya2580@gmail.com">umeshmourya2580@gmail.com</option>
                                    <option value="XYZ@GMAIL.COM">XYZ@GMAIL.COM</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Class</th>
                                <th>Student Section</th>
                                <th>Subject</th>
                                <th>Classwork</th>
                                <th>Date</th>
                                <th>Remark</th>

                                <th>File</th>
                                <th>Update By</th>
                                <th>Date</th>

                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
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
<!-- /.content -->
<script>
function for_search() {
    var student_class = document.getElementById('student_class').value;
    var particular_date = document.getElementById('particular_date').value;
    var update_by = document.getElementById('update_by').value;
    var pass_var = "?student_class=" + student_class + "&particular_date=" + particular_date + "&update_by=" +
        update_by;

    var dataTable = $('#example1').DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: access_link + "homework/classwork_list_fatch.php" + pass_var,
            type: "post"
        }
    });
}
for_search();
</script>

@include('common.footer')