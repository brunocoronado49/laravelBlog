<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostsController;

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

// ROutes for unauthenticated, default
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/posts/{category}', [HomeController::class, 'postsByCategory'])->name('posts.category');
Route::get('/post/{postId}', [HomeController::class, 'post'])->name('post');

// Route for home of admin
Route::get('/home', function() {
    return view('home');
})->middleware('auth');

// Routes for categories CRUD
Route::get('/admin/categories', [CategoriesController::class, 'index'])->name('admin.categories.index');
Route::post('/admin/categories/store', [CategoriesController::class, 'store'])->name('admin.categories.store');
Route::post('/admin/categories/{categoryId}/update', [CategoriesController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories/{categoryId}/delete', [CategoriesController::class, 'delete'])->name('admin.categories.delete');

// Routes for posts CRUD
Route::get('/admin/posts', [PostsController::class, 'index'])->name('admin.posts.index');
Route::post('/admin/posts/store', [PostsController::class, 'store'])->name('admin.posts.store');
Route::post('/admin/posts/{postId}/update', [PostsController::class, 'update'])->name('admin.posts.update');
Route::delete('/admin/posts/{postId}/delete', [PostsController::class, 'delete'])->name('admin.posts.delete');

Auth::routes();
