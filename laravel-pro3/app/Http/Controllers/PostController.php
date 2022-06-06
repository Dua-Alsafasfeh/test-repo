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
    public function destroy($id)
    {
        $data = post::find($id);
        $data->delete();
        // $blog2 = Post::all();
        // return view('blog1',compact('blog2'));
        return redirect('blog')->with('status','data Deleted Successfully');
    }
}
