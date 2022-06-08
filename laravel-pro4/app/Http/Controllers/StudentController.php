<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function viewStudent(){
        $student = Student::all();
        return view('/acad', compact('student'));
    }
}
