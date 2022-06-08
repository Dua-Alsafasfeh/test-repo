<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Newpost;
use App\Models\Comment;
use Illuminate\Http\Request;

class FormValidate extends Controller
{
    public function form_validate(Request $request ){
        $request->validate([
            'firstname'=>'required|alpha',
            'email'=>'required|email',
            'password'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
            'phonenumber'=>'numeric|digits_between:9,11'
        ]);
        return $request->input();//to show data in json format
    }
    public function one_relation(){
        dd (User::find(1)->post);
    }
    public function viewComment(){
        return newpost::find(1)->comment;
    }
}
