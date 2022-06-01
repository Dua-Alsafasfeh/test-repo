<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class duaaController extends Controller
{
    public function candy(){
     $candy =['snichers','mars','bounty'];
     return $candy;
    }
    public function viewWelcome(){
        return view('welcome');
    }
    public function user($id , $userName){
        return "id = " .$id."<br>" ."userName is: " .$userName;
    }
}
