<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusController extends Controller
{
    public function bus(){
        return view('bus.bus');
    }
    public function bus_add_bus(){
        return view('bus.add_bus');
    }
    public function bus_bus_list(){
        return view('bus.bus_list');
    }
    public function bus_route_add(){
        return view('bus.bus_route_add');
    }
    public function bus_bus_route_list(){
        return view('bus.bus_route_list');
    }
    public function bus_asigned_bus_route(){
        return view('bus.asigned_bus_route');
    }
    public function bus_bus_student_list(){
        return view('bus.bus_student_list');
    }
    public function bus_bus_staff(){
        return view('bus.bus_staff');
    }


    public function bus_employee_add(){
      return view('bus.employee_add');
    }
    public function bus_purchase_list(){
      return view('bus.purchase_list');
    }
    public function bus_add_bus_expance(){
      return view('bus.add_bus_expance');
    }
    public function bus_bus_expense_report(){
      return view('bus.bus_expense_report');
    }
    public function bus_student_list_bus_wise(){
      return view('bus.student_list_bus_wise');
    }
    public function route_add(){
      return view('bus.route_add');
    }

    
}
