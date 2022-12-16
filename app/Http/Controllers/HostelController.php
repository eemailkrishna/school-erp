<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostelController extends Controller
{
    public function hostel(){
        return view('hostel.hostel');
    }
    public function Hostel_List(){
        return view('hostel.hostel_list');
    }
    public function Room_List(){
        return view('hostel.room_list');
    }
    public function Seat_Available(){
        return view('hostel.hostel_seat_avail');
    }
    public function Hostel_Staff(){
        return view('hostel.hostel_staff');
    }
    public function Hostal_Stu_List(){
        return view('hostel.hostel_student_list');
    }
    public function Hostal_Mess(){
        return view('hostel.hostel_mess');
    }
    public function Emp_Add(){
        return view('hostel.employee_add');
    }
    public function Emp_List(){
        return view('hostel.employee_list');
    }
    public function Hostel_Mess_List(){
        return view('hostel.hostel_mess_menu_list');
    }
    public function Purchase_Detail(){
        return view('hostel.daily_mess_purchase_detail');
    }

}