<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenalityController extends Controller
{
    public function penality(){
    
        return view('penalty.penalty');

    }

    public function penalityForm(){
       
        return view('penalty.penalty_form');
    }
    public function penalityList(){
       
        return view('penalty.penalty_list');
    }
}