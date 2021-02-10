<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $blogs = Blog::query();

        $selected_category = 'All';
        if(request()->has('category')){
            if(request('category') != 'All') {
                $blogs->where('category', request('category'));
                $selected_category = request('category');
            }
        }
        $blogs = $blogs->latest()->paginate(3);
        $categories = Blog::select('category')->distinct()->get();
        return view('blog-index',compact('blogs','categories','selected_category'));
    }

    public function show($blog_id){
        $blog = Blog::find($blog_id);
        return view('blog-show',compact('blog'));
    }


}
