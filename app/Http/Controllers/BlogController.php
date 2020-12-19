<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index(){
        //do something here...
        /* >> fetching data from database using model << */

        //$blogs = Blog::all();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
         
        return view('blog.index', [
            'blogs' => $blogs
        ]);
    }

    public function create(){
        //do something here...
        return view('blog.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
         'blog_img' => 'required|image|mimes:jpg,png,jpeg|max:2048',
 
        ]);
 
        //$path = $request->file('blog_img')->store('public/images');

        

        //do something here...
        $title = $request->title;
        $description = $request->description;
        $imageName = time().'.'.$request->blog_img->getClientOriginalExtension();

        $request->blog_img->move(public_path('/images/blog_images'), $imageName);

        $blog = new Blog();
        $blog->title = $title;
        $blog->description = $description;
        $blog->image = $imageName;
        $blog->save();

        return redirect('/articles')->with('msgSaved', 'Blog Added Successfully');
    }

    public function show($id){
        //do something here...
        $blog = Blog::findOrFail($id);
        return view('blog.show', ['blog' => $blog]);
    }

    public function destroy($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/articles')->with('msgDeleted', 'Blog Deleted!');
    }

    public function edit($id){
        //do something here...
        $blog = Blog::findOrFail($id);
        return view('blog.edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id){
        //do something here...
        $title = $request->input('title');
        $description = $request->description;

        $blog = Blog::findOrFail($id);
        $blog->title = $title;
        $blog->description = $description;
        $blog->save();

        return redirect('/articles')->with('msgSaved', 'Blog Updated Successfully');
    }
}
