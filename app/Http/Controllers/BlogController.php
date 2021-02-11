<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $blogs = Blog::paginate(3);
        return view('Admin.Blog.blog-index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('Admin.Blog.blog-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $this->validate_data($request);

        if($request->hasFile('image_path')){
            $imageNameWithExt = $request->file('image_path')->getClientOriginalName();
            $imageName = time() . '_' .$imageNameWithExt;
            $request->image_path->move(public_path('blog/images'), $imageName);
        }
        else $imageName = 'default.jpg';

        $blog = new Blog;
        $blog->title = $data['title'];
        $blog->image_path = $imageName;
        $blog->category = $data['category'];
        $blog->description = $data['description'];
        $blog->save();

        return redirect()->route('blogs.index')->with('message','Blog Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Blog $blog)
    {
        return view('Admin.Blog.blog-show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Blog $blog)
    {
        return view('Admin.Blog.blog-edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $this->validate_data($request);
        if($request->hasFile('image_path')){
            $imageNameWithExt = $request->file('image_path')->getClientOriginalName();
            $imageName = time() . '_' .$imageNameWithExt;
            $request->image_path->move(public_path('blog/images'), $imageName);

            $blog->image_path = $imageName;
        }

        $blog->title = $data['title'];
        $blog->category = $data['category'];
        $blog->description = $data['description'];
        $blog->save();
        return redirect()->route('blogs.index')->with('message','Blog Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back()->with('message','Blog Successfully Deleted');
    }

    public function validate_data(Request $request){
        return $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'image_path' => '',
        ]);
    }
}
