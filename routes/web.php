<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);

Route::get('/register',[AuthController::class,'create'])->middleware('guest');
Route::post('/register',[AuthController::class,'store'])->middleware('guest');

Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'login_post'])->middleware('guest');

Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

Route::get('/admin/blogs',[AdminBlogController::class,'index'])->middleware('mustBeAdmin');
Route::post('/admin/blogs/create',[AdminBlogController::class,'store'])->middleware('mustBeAdmin');
Route::get('/admin/blogs/create',[AdminBlogController::class,'create'])->middleware('mustBeAdmin');

Route::get('/admin/blogs/{blog:slug}/edit',[AdminBlogController::class,'edit'])->middleware('mustBeAdmin');
Route::patch('/admin/blogs/{blog:slug}/update',[AdminBlogController::class,'update'])->middleware('mustBeAdmin');

Route::delete('/admin/blogs/{blog:slug}/delete',[AdminBlogController::class,'destroy'])->middleware('mustBeAdmin');