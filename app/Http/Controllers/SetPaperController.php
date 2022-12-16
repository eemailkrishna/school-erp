<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetPaperController extends Controller
{
    public function SetPaper(){
        return view('exam_paper_setter.exam_paper_setter');
    }

    public function AddQuestion(){
        return view('exam_paper_setter.add_question');
    }

    public function ViewQuestion(){
        return view('exam_paper_setter.View_question');
    }

    public function InstantGoToPaperSetter(){
        return view('exam_paper_setter.instant_go_to_paper_setter');
    }

    public function GoToPaperSetter(){
        return view('exam_paper_setter.go_to_paper_setter');
    }

    public function TotalPaperList(){
        return view('exam_paper_setter.total_paper_list');
    }
}