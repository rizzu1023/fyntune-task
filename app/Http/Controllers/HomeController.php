<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $blogs = Blog::query();

        $selected_category = 'ALL';
        if(request()->has('category')){
            if(request('category') != 'All') {
                $blogs->where('category', request('category'));
                $selected_category = request('category');
            }
        }
        $blogs = $blogs->paginate(3);
        $categories = Blog::select('category')->distinct()->get();
        return view('welcome',compact('blogs','categories','selected_category'));
    }


}
