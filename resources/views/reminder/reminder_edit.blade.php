 <script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "reminder/reminder_edit_api.php",
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
                get_content('reminder/reminder_list');
            }
        }
    });
});
 </script>
 <section class="content-header">
     <h1>
         Reminder Management <small> Control Panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="javascript:get_content('reminder/reminder')"><i class="fa fa-history"></i> Reminder</a></li>
         <li><a href="javascript:get_content('reminder/reminder_list')"><i class="fa fa-list"></i> Reminder List</a>
         </li>
         <li class="active"><i class="fa fa-edit"></i> Reminder Edit</li>
     </ol>
 </section>

 <!-- Main content -->
 <section class="content">
     <!-- Small boxes (Stat box) -->
     <div class="row">
         <!-- general form elements disabled -->
         <div class="box box-warning  ">
             <div class="box-header with-border ">
                 <h3 class="box-title">Reminder Edit</h3>
             </div>

             <!-- /.box-header -->
             <!------------------------------------------------Start Registration form--------------------------------------------------->

             <div class="box-body ">
                 <form role="form" method="post" enctype="multipart/form-data" id="my_form">

                     <input type="hidden" name="s_no1" value="28">
                     <div class="col-md-4 ">
                         <div class="form-group" id="for_task_1">
                             <label for="reminder_task_1">Reminder Task1</label>
                             <input type="text" name="reminder_task_1" class="form-control bordder-color" id=""
                                 placeholder="Write Task" value="a">
                         </div>
                     </div>
                     <div class="col-md-4 ">
                         <div class="form-group" id="for_task_2">
                             <label for="reminder_task_2">Reminder Task2</label>
                             <input type="text" name="reminder_task_2" class="form-control bordder-color" id=""
                                 placeholder="Write Task" value="a">
                         </div>
                     </div>
                     <div class="col-md-4 ">
                         <div class="form-group" id="for_task_3">
                             <label for="reminder_task_3">Reminder Task3</label>
                             <input type="text" name="reminder_task_3" class="form-control bordder-color" id=""
                                 placeholder="Write Task" value="a">
                         </div>
                     </div>
                     <div class="col-md-4 ">
                         <div class="form-group" id="for_task_4">
                             <label for="reminder_task_4">Reminder Task4</label>
                             <input type="text" name="reminder_task_4" class="form-control bordder-color" id=""
                                 placeholder="Write Task" value="a">
                         </div>
                     </div>
                     <div class="col-md-4 ">
                         <div class="form-group" id="for_task_5">
                             <label for="reminder_task_5"> Reminder Task5</label>
                             <input type="text" name="reminder_task_5" class="form-control bordder-color" id=""
                                 placeholder="Write Task" value="a">
                         </div>
                     </div>
                     <div class="col-md-4 ">
                         <div class="form-group">
                             <label>Allocated Date</label>
                             <input type="date" name="reminder_allocated_date" placeholder="Date" value="2022-12-01"
                                 class="form-control">
                         </div>
                     </div>
                     <div class="col-md-4 ">
                         <div class="form-group">
                             <label>Finsih Date</label>
                             <input type="date" name="reminder_finish_date" placeholder="Date" value="2022-12-31"
                                 class="form-control">
                         </div>
                     </div>
                     <div class="col-md-4 ">
                         <div class="form-group">
                             <label>Remark</label>
                             <input type="text" name="reminder_remark" placeholder="Enquiry Remark 2" value="a"
                                 class="form-control">
                         </div>
                     </div>


                     <div class="col-md-12">
                         <center><input type="submit" name="submit" value="Update Details" class="btn btn-primary" />
                         </center>
                     </div>
                 </form>
             </div>
             <!---------------------------------------------End Registration form--------------------------------------------------------->
             <!-- /.box-body -->
         </div>
     </div>
 </section>