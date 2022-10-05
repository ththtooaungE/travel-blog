<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminAdminController;
use App\Http\Controllers\AdminDistinationController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
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

Route::middleware(['guest'])->group(function () {
    //authenication
    Route::get('/register',[AuthController::class,'create']);
    Route::post('/register',[AuthController::class,'store']);
    Route::get('/login',[AuthController::class,'login']);
    Route::post('/login',[AuthController::class,'login_post']);
});
//authenication
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

Route::post('/blogs/{blog:slug}/comments',[CommentController::class,'store']);
//admin/blogs
Route::get('/admin/blogs/{blog:slug}/edit',[AdminBlogController::class,'edit'])->middleware(["mustBeAuthor","mustBeAdmin"]);

Route::middleware(['mustBeAdmin'])->group(function() {
    //admin/blogs
    Route::get('/admin/blogs',[AdminBlogController::class,'index']);
    Route::get('/admin/blogs/create',[AdminBlogController::class,'create']);
    Route::post('/admin/blogs/create',[AdminBlogController::class,'store']);
    Route::patch('/admin/blogs/{blog:slug}/update',[AdminBlogController::class,'update']);
    Route::delete('/admin/blogs/{blog:slug}/delete',[AdminBlogController::class,'destroy']);

    //admin/users
    Route::get('/admin/users',[AdminUserController::class,'index']);
    Route::get('/admin/users/{user:username}/show',[AdminUserController::class,'show']);
    Route::delete('/admin/users/{user:username}/delete',[AdminUserController::class,'destroy']);

    //admin/admins
    Route::get('/admin/admins',[AdminAdminController::class,'index']);
    Route::get('/admin/admins/add',[AdminAdminController::class,'add']);
    Route::patch('/admin/admins/{user:username}/add',[AdminAdminController::class,'add_post']);

    //admin/distinations
    Route::get('/admin/distinations',[AdminDistinationController::class,'index']);
    Route::get('/admin/distinations/create',[AdminDistinationController::class,'create']);
    Route::post('/admin/distinations/create',[AdminDistinationController::class,'store']);
    Route::delete('/admin/distinations/{distination:slug}/destroy',[AdminDistinationController::class,'destroy']);
    Route::get('/admin/distinations/{distination:slug}/edit',[AdminDistinationController::class,'edit']);
    Route::patch('/admin/distinations/{distination:slug}/edit',[AdminDistinationController::class,'update']);

    //admin/categories
    Route::get('/admin/categories',[AdminCategoryController::class,'index']);
    Route::get('/admin/categories/create',[AdminCategoryController::class,'create']);
    Route::post('/admin/categories/create',[AdminCategoryController::class,'store']);
    Route::get('/admin/categories/{category:slug}/edit',[AdminCategoryController::class,'edit']);
    Route::patch('/admin/categories/{category:slug}/edit',[AdminCategoryController::class,'update']);
    Route::delete('/admin/categories/{category:slug}/destroy',[AdminCategoryController::class,'destroy']);

});

