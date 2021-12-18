<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentLessonController extends Controller
{
    public function index(){
        return view('student_lessons');
    }
}
