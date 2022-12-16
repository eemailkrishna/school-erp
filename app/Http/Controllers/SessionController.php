<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function session(){
        return view('session.session');
    }

    public function AddSession(){
        return view('session.add_session');
    }

    public function MoveStudent(){
        return view('session.move_student');
    }
}