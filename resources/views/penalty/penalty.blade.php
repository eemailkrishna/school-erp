 @include('common.header')
 @include('common.navbar')

 <script>
window.scrollTo(0, 0);
 </script>
 <section class="content-header">
     <h1>
         Penalty Management <small>Control Panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Penalty Management</li>
     </ol>
 </section>
 <!-- Main content -->
 <section class="content">
     <div <div class="box box-success">
         <div class="box-header with-border">

             <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b>
             </h3>
         </div>
         <div class="box-body">

             <a href="{{url('penalty_form')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#E32636;">
                         <div class="inner"><br>
                             <h3 style="font-size:22px;margin-left:10px;color:#fff;">Penalty Form</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"><img src="{{url('images/penalty_form.PNG')}}"
                                     style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                     title="School Management System" class="image1"></i>
                         </div>
                         <a href="{{url('penalty_form')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('penalty_list')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#3B7A57;">
                         <div class="inner"><br>
                             <h3 style="font-size:22px;margin-left:10px;color:#fff;">Penalty List</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"><img src="{{url('images/attendance_list.png')}}"
                                     style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                     title="School Management System" class="image1"></i>
                         </div>
                         <a href="{{url('penalty_list')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>


         </div>
     </div>
     <!-- <div <div class="box box-success" > -->
     <!--<div class="box-header with-border">-->

     <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>-->
     <!--</div>-->
     <!--<div class="box-body">-->




     <!--</div>-->
     <!-- </div>-->
     <!-- <div <div class="box box-success" >-->
     <!--<div class="box-header with-border">-->

     <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
     <!--</div>-->
     <!--<div class="box-body">-->

     <!--<a href="../school_software_v1_old/userhelp/penality  Panel.pdf" target="_blank">-->
     <!--			<div class="col-lg-3 col-xs-6">-->
     <!--				<div class="small-box" style="background-color:red;">-->
     <!--					<div class="inner"><br>-->
     <!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp English</h3>-->
     <!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
     <!--				</div>-->
     <!--				<div class="icon">-->
     <!--					<i class="ion"><img src="../../school_software_v1_old/images/userhelp.png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>-->
     <!--				</div>-->
     <!--					<a href="../school_software_v1_old/userhelp/penality  Panel.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
     <!--				</div>-->
     <!--			</div>-->
     <!--			</a>-->


     <!--			<a href="../school_software_v1_old/userhelp/PANELTY PANEL hindi.pdf" target="_blank"">-->
     <!--			<div class="col-lg-3 col-xs-6">-->
     <!--				<div class="small-box" style="background-color:green;">-->
     <!--					<div class="inner"><br>-->
     <!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp Hindi</h3>-->
     <!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
     <!--				</div>-->
     <!--				<div class="icon">-->
     <!--					<i class="ion"><img src="../../school_software_v1_old/images/userhelp.png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>-->
     <!--				</div>-->
     <!--					<a href="../school_software_v1_old/userhelp/PANELTY PANEL hindi.pdf" target="_blank"" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
     <!--				</div>-->
     <!--			</div>-->
     </a>

     </div>
     </div>
 </section>

 @include('common.footer')