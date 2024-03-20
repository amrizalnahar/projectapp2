<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home', [
        "title" => "Home"
    ]);
});

Route::get('/login', function () {
    return view('frontend.login', [
        "title" => "Login",
    ]);
});
Route::get('/register', function () {
    return view('frontend.register', [
        "title" => "Register",
    ]);
});

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::get('/category/{category:slug}', function (Category $category) {
    return view('frontend.categories', [
        'title' => $category->jenis_kategori,
        'blogs' => $category->blogs,
        'category' => $category->jenis_kategori,
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('frontend.blogs', [
        'title' => 'Authors Blogs',
        'posts' => $author->blogs,
    ]);
});



Route::get('/portfolio', function () {
    return view('frontend.portfolio', [
        "title" => "Portfolio",
    ]);
});


Route::get('/pricelist', function () {
    return view('frontend.pricelist', [
        "title" => "Pricelist"
    ]);
});

Route::get('/about', function () {
    return view('frontend.about', [
        "title" => "About Me"
    ]);
});

Route::get('/contact', function () {
    return view('frontend.contact', [
        "title" => "Contact Us"
    ]);
});



Route::get('/test', function () {
    return view('test', [
        "title" => "Test"
    ]);
});
