<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.blogs.index', compact(['blogs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        $user = auth()->user();

        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->blog_content,
            'image_url' => $newFileName,
            'created_by' => $user->id,
        ]);

        return redirect()->route('blogs.index');
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
        return view('admin.blogs.edit', ['blog' => $blog]);
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

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->blog_content;
        $blog->image_url = $newFileName;
        $blog->save();

        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $oldImage = public_path() . '/storage/img/blogs_images/' . $blog->image_url;

        if (file_exists($oldImage)) {
            unlink($oldImage);
        }
        $blog->delete();

        return redirect()->route('blogs.index');
    }
}
