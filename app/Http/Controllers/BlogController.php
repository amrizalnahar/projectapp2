<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        return view('frontend.blog', [
            "title" => "Blog",
            "posts" => Blog::all()
        ]);
    }

    public function show(Blog $blog){
        return view('frontend.blog-singlepost', [
            "title" => "Blog Single Post",
            "post" => $blog
        ]);
    }
}
