<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;

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
    return view('home');
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index', [
        'posts' => Post::where('user_id', auth()->user()->id)->get()
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/categories/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware(('admin'));

Route::get('/dashboard/profile', function() {
    return view ('dashboard.profile.index');
});
