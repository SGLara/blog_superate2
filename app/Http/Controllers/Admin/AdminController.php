<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::all();
        $totalBlogs = Blog::all()->count();
        $lastBlog = Blog::orderBy('created_at', 'desc')->first();

        return view('admin.index', compact(['blogs', 'totalBlogs', 'lastBlog']));
    }
}
