<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->is_admin) {
            $blogs = Blog::withTrashed()->get();
        } else {
            $blogs = Blog::where('created_by', auth()->user()->id)->get();
        }

        $lastBlog = Blog::orderBy('created_at', 'desc')->first();

        return view('blogs.index', compact(['blogs', 'lastBlog']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $blog = new Blog();
        $this->prepareToSave($blog, $request);
        $blog->created_by = $user->id;
        $blog->save();

        $request->session()->flash('blog_stored', true);
        return redirect()->route('blog.blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get the post with the id $post
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $this->prepareToSave($blog, $request);

        $blog->save();

        $request->session()->flash('blog_updated', true);
        return redirect()->route('blog.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $blog = Blog::findOrFail($request->blog_id);

        $oldImage = public_path() . '/storage/img/blogs_images/' . $blog->image_url;

        /**
         * This line deletes any image from a blog
         */
        // if (file_exists($oldImage)) {
        //     unlink($oldImage);
        // }

        $blog->delete();

        $request->session()->flash('blog_deleted', true);
        return redirect()->route('blog.blogs.index');
    }

    public function restore(Request $request)
    {
        Blog::withTrashed()->find($request->blog_id)->restore();

        $request->session()->flash('blog_restored', true);
        return redirect()->route('blog.blogs.index');
    }

    private function prepareToSave(Blog $blog, Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:191',
            'image' => 'required|image',
            'blog_content' => 'required',
        ]);

        //get the image from the form
        $fileNameWithTheExtension = $request->image->getClientOriginalName();

        //get the file's name
        $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);

        //get the extension's file
        $extension = $request->image->getClientOriginalExtension();

        //new file name with timestamp
        $newFileName = $fileName . '_' . time() . '.' . $extension;

        //save the image in public/img folder
        $saveImage = $request->image->storeAs('public/img/blogs_images', $newFileName);

        $blog->title = $request->title;
        $blog->content = $request->blog_content;
        $blog->image_url = $newFileName;
    }
}
