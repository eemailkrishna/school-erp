  @include('common.header')
  @include('common.navbar')
  <script>
function for_section(value) {
    $("#student_class_section").html("<option value=''>Loading.....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "govt_requirement/ajax_class_section.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#student_class_section").html(detail);
        }
    });
}

function form_submit() {

    $.ajax({
        type: "POST",
        url: access_link + "govt_requirement/student_contact_list_downloads.php",
        data: $("#my_form1").serialize(),
        success: function(data1) {

            $('#get_content').html(data1);

        }
    });
}
  </script>


  <section class="content-header">
      <h1>
          Goverment Requirement <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{url('/govt_requirement')}}"><i class="fa fa-stack-overflow"></i> Govt. Requir.</a></li>
          <li class="active">Mapping List</li>
      </ol>
  </section>



  <!---*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
  <!-- Main content -->
  <section class="content">
      <!-- Small boxes (Stat box) -->

      <div class="row">
          <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
              <div class="box-header with-border ">
                  <h3 class="box-title">Contact List</h3>
              </div>
              <!-- /.box-header -->
              <!------------------------------------------------Start Registration form--------------------------------------------------->

              <div class="box-body">
                  <form role="form" method="post" id="my_form1" enctype="multipart/form-data">
                      <div class="col-md-12">

                          <div class="col-md-2">
                          </div>
                          <div class="col-md-8">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <th><b style="font-size:15px">Choose Class</b></th>
                                      <select name="std_class" class="form-control new_student" id="std_class"
                                          onchange="for_section(this.value);">
                                          <option value="All">All</option>
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

                              <div class="col-md-6">
                                  <div class="form-group">
                                      <th><b style="font-size:15px">Section</b></th>
                                      <select class="form-control" name="student_class_section"
                                          id="student_class_section">
                                          <option value="All">All</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-2">
                          </div>

                      </div>
                      </br></br></br>
                      <hr>

                      <div class="col-md-12">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="checkbox" value="" id="check_all" onclick="for_check(this.id);" checked>
                                  <th><b style="color:red;">Check All Field/Unchecked All</b></th>
                              </div>
                          </div>

                          <div class="col-md-2">
                              <div class="form-group">
                                  <input type="checkbox" checked name="student_data[]"
                                      value="student_name|?|Student Name" class="check_all">
                                  <th><b>Student Name</b></th>
                              </div>
                          </div>

                          <div class="col-md-2 ">
                              <div class="form-group">
                                  <input type="checkbox" checked name="student_data[]"
                                      value="student_father_name|?|Student Father Name" class="check_all">
                                  <th><b>Student Father Name</b></th>
                              </div>
                          </div>
                          <div class="col-md-2 ">
                              <div class="form-group">
                                  <input type="checkbox" checked name="student_data[]"
                                      value="student_class|?|Student Class" class="check_all">
                                  <th><b>Student Class</b></th>
                              </div>
                          </div>
                          <div class="col-md-2 ">
                              <div class="form-group">
                                  <input type="checkbox" checked name="student_data[]"
                                      value="student_class_section|?|Student Class Section" class="check_all">
                                  <th><b>Student Class Section</b></th>
                              </div>
                          </div>

                          <div class="col-md-2 ">
                              <div class="form-group">
                                  <input type="checkbox" checked name="student_data[]"
                                      value="student_contact_number|?|Student Contact Number" class="check_all">
                                  <th><b>Student Contact Number</b></th>
                              </div>
                          </div>
                          <div class="col-md-2 ">
                              <div class="form-group">
                                  <input type="checkbox" checked name="student_data[]"
                                      value="student_father_contact_number|?|Student Father Contact Number"
                                      class="check_all">
                                  <th><b>Student Father Contact Number1</b></th>
                              </div>
                          </div>
                          <div class="col-md-2 ">
                              <div class="form-group">
                                  <input type="checkbox" checked name="student_data[]"
                                      value="student_father_contact_number2|?|Student Father Contact Number2"
                                      class="check_all">
                                  <th><b>Student Father Contact Number2</b></th>
                              </div>
                          </div>
                          <div class="col-md-2 ">
                              <div class="form-group">
                                  <input type="checkbox" checked name="student_data[]"
                                      value="student_mother_contact_number|?|Student Mother Contact Number"
                                      class="check_all">
                                  <th><b>Student Mother Contact Number</b></th>
                              </div>
                          </div>
                          <div class="col-md-2 ">
                              <div class="form-group">
                                  <input type="checkbox" checked name="student_data[]"
                                      value="student_guardian_contact_number|?|Student Guardian Contact Number"
                                      class="check_all">
                                  <th><b>Student Guardian Contact Number</b></th>
                              </div>
                          </div>

                      </div>
              </div>
              <br><br>
              <div class="col-md-12">
                  <center><input type="submit" name="submit" value="Submit" class="btn btn-primary"
                          onclick="return for_validity();" /></center>
              </div>

              </form>
          </div>
          <!---------------------------------------------End Registration form--------------------------------------------------------->
          <!-- /.box-body -->
      </div>
      </div>

  </section>


  <script>
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

function for_validity() {
    var num2 = 0;
    $(".check_all").each(function() {
        if ($(this).prop('checked') == true) {
            num2 += Number(parseInt(num2) + 1);
        }
    });
    if (num2 < 1) {
        alert_new('Please Select Atleast One Field !!!', 'red');
        return false;
    } else {
        form_submit();
        return true;
    }
}
  </script>
  @include('common.footer')