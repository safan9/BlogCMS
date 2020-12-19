<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class UsersideController extends Controller
{
    //
    public function index(){
        //do something here...
        /* >> fetching data from database using model << */

        //$blogs = Blog::all();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
         
        return view('user_side.index', [
            'blogs' => $blogs
        ]);
    }

    public function blog(){
    	$blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
         
        return view('user_side.blog', [
            'blogs' => $blogs
        ]);
    }

    public function contact(){
    	return view('user_side.contact');
    }
    
    public function about(){
    	return view('user_side.about');
    }
    
    public function show($id){
        //do something here...
        $blog = Blog::findOrFail($id);
        return view('user_side.show', ['blog' => $blog]);
    }
}
