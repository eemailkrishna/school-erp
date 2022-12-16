<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderCotroller extends Controller
{
    public function reminder(){
        return view('reminder.reminder');
    }

    public function ReminderAdd(){
        return view('reminder.reminder_add');
    }
    
    public function ReminderList(){
        return view('reminder.reminder_list');
    }

    public function ReminderTeacherAdd(){
        return view('reminder.reminder_teacher_add');
    }

    public function ReminderTeacherList(){
        return view('reminder.reminder_teacher_list');
    }
    
}