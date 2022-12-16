<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function enquiry(){
        return view('enquiry.enquiry');
    }

    public function NewEnquiry(){
        
        return view('enquiry.add_enquiry');

    }
    public function ListEnquiry(){
        
        return view('enquiry.enquiry_list');
        
    }
    public function EnquirySms(){
        
        return view('enquiry.enquiry_sms_list');
        
    }
    public function  CallList(){
        
        return view('enquiry.call_student_list');
        
    }
    public function  EnquiryReport(){
        
        return view('enquiry.enquiry_daily_report');
        
    }
}