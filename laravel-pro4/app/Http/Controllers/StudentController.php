<?php

namespace App\Http\Controllers;
use App\Models\student;
use App\Models\cources;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function viewStudent(){
        $student = Student::all();
        return view('/acad', compact('student'));
    }
    public function manyToMany_relation(){
        $student = student::find(2);
        $course = cources::find([3, 4]);
        $student->callCourses()->attach($course);
        return 'Success';
    }
}
