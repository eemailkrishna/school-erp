<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
        public function library(){
            return view('library.library');
        }
        public function LibraryBook(){

            return view('library.library_add_book');
        }
        public function ViewBook(){

            return view('library.view_book_library');
        }
        public function IssueBook(){

            return view('library.issue_book');
        }
        public function ReturnBook(){

            return view('library.view_return_book_list');
        }
        public function Elibrary(){

            return view('library.e_library');
        }
        public function ExamStaffadd(){

            return view('library.exam_stuff_add');
        }
        

}