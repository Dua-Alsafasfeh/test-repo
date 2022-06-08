<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cources;
class CourseController extends Controller
{
    public function viewCourse(){
        $course = Cources::all();
        return view('/acad', compact('course'));
    }
}
