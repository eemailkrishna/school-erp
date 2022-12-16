<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    public function TimeTable(){
        return view('time_table.time_table');
    }

    public function add_class_period(){
        return view('time_table/add_class_period');
    }

    public function subject_wise_teacher(){
        return view('time_table/subject_wise_teacher');
    }

    public function time_table_generate(){
        return view('time_table/time_table_generate');
    }

    public function time_table_list(){
        return view('time_table/time_table_list');
    }


    public function teacher_availability(){
        return view('time_table/teacher_availability');
    }

    public function teacher_assign(){
        return view('time_table/teacher_assign');
    }

    public function time_table_sheet(){
        return view('time_table/time_table_sheet');
    }

    public function diff_add_class_period(){
        return view('time_table/diff_add_class_period');
    }
    public function diff_time_table_generate(){
        return view('time_table/diff_time_table_generate');
    }
    public function diff_time_table_list(){
        return view('time_table/diff_time_table_list');
    }
}