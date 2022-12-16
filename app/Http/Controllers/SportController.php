<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportController extends Controller
{
    public function sport(){
        return  view('sports.sports');
    }

    public function AddSport(){
        return  view('sports.add_sports');
    }

    public function SportType(){
        return  view('sports.sports_type');
    }
    
    public function AgeCategory(){
        return  view('sports.age_category');
    }

    public function AddParticipate(){
        return  view('sports.add_participate');
    }

    public function ParticipateList(){
        return  view('sports.participate_list');
    }

    public function TeamCreation(){
        return  view('sports.team_creation');
    }

    public function TeamCreationList(){
        return  view('sports.team_creation_list');
    }
}