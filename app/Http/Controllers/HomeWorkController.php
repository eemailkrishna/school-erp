<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeWorkController extends Controller
{
    public function Homework(){
        return view('homework.homework');
    }

    public function HomeworkAdd(){
        return view('homework.homework-add');
    }

    public function HomeworkList(){
        return view('homework.homework-list');
    }

    public function AddClasswork(){
        return view('homework.add-classwork');
    }

    public function ClassworkList(){
        return view('homework.classwork-list');
    }
}