<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index()
    {
        return view('leave.leave');
    }
    public function studentleaveform()
    {
        return view('leave.leave_form');
    }
    public function studentleavelist()
    {
        return view('leave.leave_list');
    }
}
