<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Blog, User};
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
        $blogs = Blog::get();
        $totalBlogs = Blog::get()->count();
        $lastBlog = Blog::orderBy('created_at', 'desc')->first();
        $users = User::get()->count();

        return view('admin.index', compact(['blogs', 'totalBlogs', 'lastBlog', 'users']));
    }
}
