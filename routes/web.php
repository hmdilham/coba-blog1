<?php

namespace App;

// use App\Models\Post;
// use App\Models\User;

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\RegisterController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us",
        'active' => 'about',
        "name" => "Penulis",
        "email" => "mail@penulis.com",
        "tlp" => "081234567890",
        "image" => "Penulis.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'tampil']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Category',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get(
    '/dashboard',
    function () {
        return view('dashboard.index');
    }
)->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

// Route::get('/categories/{category:slug}', function (Category $category){
//     return view('blog', [
//         'title' => "Post By Category : $category->name",
//         'active' => 'blog',
//         'posting' => $category->posts->load('category','author'),
//     ]);
// });

// Route::get('/authors/{user:username}', function (User $user){
//     return view('blog', [
//         'title' => "Post By : $user->name",
//         'active' => 'blog',
//         'posting' => $user->posts->load('category','author'),
//     ]);
// });