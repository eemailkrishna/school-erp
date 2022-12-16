<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function index(){
        return view('holiday.holiday');
    }

    public function holidayAddHoliday()
    {
        return view('holiday.add_holiday');
    }
    public function holidayEditHoliday()
    {
        return view('holiday.edit_holiday');
    }
    public function holidayHolidayList()
    {
        return view('holiday.holiday_list');
    }
}