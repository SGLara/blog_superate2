<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);
        return view('blog-template.index', compact('blogs'));
    }


    /**
     * Show the blog by the id provided
     */
    public function show($id)
    {
        //find the blog with the related $id
        $blog = Blog::findOrFail($id);
        return view('blog-template.show', compact('blog'));
    }
}
