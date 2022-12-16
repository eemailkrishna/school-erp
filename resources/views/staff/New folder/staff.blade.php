    @include('common.header');
    @include('common.navbar');

    <section class="content-header">
      <h1>
        Employee Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active">Employee</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div <div class="box box-success" >
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
		</div>
		<div class="box-body">

		 <a href="javascript:get_content('staff/employee_add')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Employee Add</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/add class.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('staff/employee_add')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			 	 <a href="javascript:get_content('staff/employee_list')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Employee List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/enquiry_list.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('staff/employee_list')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

		 <a href="javascript:get_content('staff/employee_drop_list')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#a9ebe9;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Dropped List</h3>
				<p style="margin-left:10px;color:#fff;">Employee</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/enquiry_list.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('staff/employee_drop_list')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>



   <!------------------------------------------------------------------------------------------------------------------->
				<a href="javascript:get_content('attendance/emp_attendance_select')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#9F2B68;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Attendance</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/attendence.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('attendance/emp_attendance_select')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

		 		<a href="javascript:get_content('staff/emp_salary_list')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#C46210;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Salary Details</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/staff_salary.png')}}" style="width:90px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('staff/emp_salary_list')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


<a href="javascript:get_content('staff/staff_id_card')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#804040;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Id Generate</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/idcard.png')}}" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('staff/staff_id_card')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 					<a href="javascript:get_content('staff/rfid_card_generate')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B3B6D;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Assign RFID Card</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/student_rfid.png')}}" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('staff/rfid_card_generate')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
				<a href="javascript:get_content('staff/emp_attendance_register')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#AAB7B8;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Attendance Register</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/enquiry_list.png')}}" style="width:60px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('staff/emp_attendance_register')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
					<a href="javascript:get_content('staff/emp_attendance_priority')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#45E8F4;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Attendance Priority</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/staff_attendance.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('staff/emp_attendance_priority')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

		</div>
      </div>

    </section>
    <div>
    @include('common.footer');
