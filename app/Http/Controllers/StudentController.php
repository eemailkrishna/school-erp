<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student(){
        return view('student.students');
    }
    public function registration(){
        return view('student.student_registration');
    }
    public function registration_list(){
        return view('student.student_registration_list_fatch');
    }
    public function admission_list(){
        return view('student.student_admission_list');
    }

    public function student_profile(){
        return view('student.student_profile_update');
    }
    public function student_mapping(){
        return view('student.student_mapping_data_update');
    }
    public function student_photo(){
        return view('student.student_photo_update');
    }
    public function student_sms(){
        return view('student.student_sms_contact_update');
    }
    public function student_sms_notification(){
        return view('student.student_sms_notification_update');
    }
    public function student_rfd(){
        return view('student.rfid_card_generate');
    }
    public function student_roll_no(){
        return view('student.student_roll_no');
    }
    public function student_id_card(){
        return view('student.student_id_card');
    }
    public function guardian_student_id_card(){
        return view('student.guardian_student_id_card');
    }
    public function father_student_id_card(){
        return view('student.father_student_id_card');
    }
    public function mother_student_id_card(){
        return view('student.mother_student_id_card');
    }  
    public function health_zone(){
        return view('student.health_zone');
    }  
    public function physical_fitness(){
        return view('student.physical_fitness');
    } 
    public function student_strength(){
        return view('student.report_student_strength_castewise');
    }
    public function student_strength_religion(){
        return view('student.report_student_strength_religionwise');
    }  
    public function student_registration_rep(){
        return view('student.student_registration_report');
    } 
}