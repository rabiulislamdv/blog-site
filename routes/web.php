<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/add-blog',[HomeController::class, 'addBlog'])->name('add.blog');
Route::post('/new-blog',[HomeController::class, 'insertNBlog'])->name('new.blog');
Route::get('/blog-details{id}',[HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/manage-blog',[HomeController::class, 'manageBlog'])->name('manage.blog');
Route::get('/delete-blog{id}',[HomeController::class, 'deleteBlog'])->name('delete.blog');
Route::get('/edit-blog{id}',[HomeController::class, 'editBlog'])->name('edit.blog');
Route::post('/update-blog{id}',[HomeController::class, 'updateBlog'])->name('update-blog');
