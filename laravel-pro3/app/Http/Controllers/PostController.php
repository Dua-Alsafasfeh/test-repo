<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewblog(){
        $blog2 = Post::all();
        return view('blog1',compact('blog2'));
    }
    // public function destroy($id)
    // {
    //     $data = post::find($id);
    //     $data->delete();
    //     // $blog2 = Post::all();
    //     // return view('blog1',compact('blog2'));
    //     return redirect('blog')->with('status','data Deleted Successfully');
    // }

    public function fetch(){
        $data = post::all();
        return view('data', compact('data'));
    }
    public function destroy($id)
    {
        $data = post::find($id);
        $data->delete();
        return redirect('data')->with('status','data Deleted Successfully');
    }

    public function edit($id){
        $editor= post::find($id);
        return view('update', compact('editor'));
    }

    public function update(Request $request,$id){
        $editor= post::find($id);
        $editor->title = $request->input('title');
        $editor->body = $request->input('body');
        $editor->update();
        return redirect('data')->with('status','data edited Successfully');
    }

    public function add(){
        return view('add');
    }

    public function create(Request $request){
        $dataAdd= new post();
        $dataAdd->title = $request->input('title');
        $dataAdd->body = $request->input('body');
        $dataAdd->save();
        return redirect('data')->with("status","data added successfully");
    }
}
