 @include('common.header')
 @include('common.navbar')

 <script type="text/javascript">
$(function() {
    $("#table-data").on('click', 'input.addButton', function() {
        var $tr = $(this).closest('tr');
        var allTrs = $tr.closest('table').find('tr');
        var lastTr = allTrs[allTrs.length - 1];
        var $clone = $(lastTr).clone();
        $clone.find('td').each(function() {
            var el = $(this).find(':first-child');
            var id = el.attr('id') || null;
            if (id) {
                var i = id.substr(id.length - 1);
                var prefix = id.substr(0, (id.length - 1));
            }
        });
        $clone.find('input:text').val('');
        $tr.closest('table').append($clone);
    });
});
 </script>
 <script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_account(s_no);
    } else {
        return false;
    }
}

function delete_account(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "session/delete_session.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            //alert_new(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('session/add_session');
            } else {
                alert_new(detail);
            }
        }
    });
}
 </script>
 <script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "session/add_session_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                //alert_new('Successfully Complete');
                get_content('session/add_session');
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
     </ol>
 </section>

 <!---********************************************************************************************************************************************************************************************************************************************************-->
 <!-- Main content -->
 <section class="content">
     <!-- Small boxes (Stat box) -->
     <div class="row">
         <!-- general form elements disabled -->
         <div class="box box-primary my_border_top">
             <div class="box-header with-border ">
                 <h3 class="box-title">Add Session</h3>
             </div>
             <!-- /.box-header -->
             <!------------------------------------------------Start Registration form--------------------------------------------------->

             <div class="box-body">
                 <form role="form" method="post" id="my_form" enctype="multipart/form-data">
                     <div class="col-md-12">
                         <div class="col-md-6">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label>Add Session<font style="color:red"><b>*</b></font></label>
                                     <center><input type="text" name="add_session" placeholder="Add session"
                                             value="2025_26" class="form-control" readonly></center>
                                 </div>
                                 <input type="hidden" name="last_session" value="2026">
                             </div>
                             <div class="col-md-6 ">
                                 <div class="form-group">
                                     <label>Creation Date<font style="color:red"><b>*</b></font></label>
                                     <center><input type="date" name="creation_date" placeholder="" value="2022-12-05"
                                             class="form-control" readonly></center>
                                 </div>
                             </div>

                         </div>


                         <div class="col-md-6">
                             <div class="col-md-2"></div>


                             <div class="col-md-8 box-body table-responsive">
                                 <table id="table-data" class="table table-bordered table-striped">
                                     <thead>
                                         <tr>
                                             <th>S No</th>
                                             <th>Session</th>
                                             <th>Creation Date</th>
                                             <th>Last Session</th>
                                             <th>Delete</th>
                                         </tr>
                                     </thead>



                                     <tbody>
                                         <tr>
                                             <td>1</td>
                                             <td>2022_23</td>
                                             <td>2022-01-18</td>
                                             <td>2022</td>
                                             <th><button type="button" class="btn btn-danger"
                                                     onclick="return valid('6');">Delete</button></th>
                                         </tr>



                                     <tbody>
                                         <tr>
                                             <td>2</td>
                                             <td>2023_24</td>
                                             <td>2022-11-22</td>
                                             <td>2023</td>
                                             <th><button type="button" class="btn btn-danger"
                                                     onclick="return valid('22');">Delete</button></th>
                                         </tr>



                                     <tbody>
                                         <tr>
                                             <td>3</td>
                                             <td>2024_25</td>
                                             <td>2022-12-01</td>
                                             <td>2024</td>
                                             <th><button type="button" class="btn btn-danger"
                                                     onclick="return valid('25');">Delete</button></th>
                                         </tr>
                                     </tbody>

                                 </table>

                             </div>
                             <div class="col-md-2"></div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
                     </div>

                 </form>

             </div>
             <!---------------------------------------------End Registration form--------------------------------------------------------->
             <!-- /.box-body -->
         </div>
     </div>
 </section>

 @include('common.footer')