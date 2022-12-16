<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff(){
        return view('staff.staff');
    }

    public function StaffAdd(){
        return view('staff.employee_add');
    }
    public function EmpList(){
        return view ('staff.employee_list');
    }
    public function EmpDrop(){
        return view ('staff.employee_drop_list');
    }
    public function EmpAttendance(){
        return view ('staff.emp_attendance_priority');
    }
    public function AssignCard(){
        return view ('staff.assign_RFID_card');
    }
    public function AttendRegister(){
        return view('staff.emp_attendance_register');
    }
    public function IdGenrator(){
        return view('staff.id_generate');
    }
    public function Salary_Generate(){
        return view('staff.emp_salary_generate');
    }
}