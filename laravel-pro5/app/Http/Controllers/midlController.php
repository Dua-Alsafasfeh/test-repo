<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class midlController extends Controller
{
    public function check_age($age){
        return view('home');
    }
}
