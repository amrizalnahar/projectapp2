<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
// use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        // $blogs = DB::table('Blogs')->get();
        return view('frontend.blogs', [
            "title" => "Blog",
            // "posts" => Blog::all()
            "posts" => Blog::latest()-> get()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('frontend.blog-singlepost', [
            "title" => "Blog Single Post",
            "post" => $blog
        ]);
    }
}
