<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event(){
        return view('event_management.event_management');
    }
    public function add_house(){
        return view('event_management.add_house');
    }
    public function add_event(){
        return view('event_management.add_event');
    }
    public function add_participate(){
        return view('event_management.add_participate');
    }
    public function participate_list(){
        return view('event_management.participate_list_report');
    }
    public function activity_plane(){
        return view('event_management.activity_plane');
    }
    public function activity_plane_list(){
        return view('event_management.activity_plane_list');
    }
    public function event_result(){
        return view('event_management.event_result');
    }
    public function event_result_list(){
        return view('event_management.event_result_list');
    }
    public function team_creation(){
        return view('event_management.team_creation');
    }
    public function team_creation_list(){
        return view('event_management.team_creation_list');
    }
    public function participate_list_report(){
        return view('event_management.participate_list_report');
    }
}