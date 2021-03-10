<?php

use App\Http\Controllers\Postcontroller;
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

Route::view('/', 'home')->name('home');
Route::get('/post',[Postcontroller::class, 'index'])->name('post/index');
Route::get('/post/create', [Postcontroller::class,'create'])->name('post/create');
Route::post('/post/store', [Postcontroller::class,'store'])->name('post/store');
Route::get('/post/{post:slug}',[Postcontroller::class,'show'])->name('post/show');
Route::get('/post/edit/{post:slug}', [Postcontroller::class,'edit'])->name('post/edit');
Route::patch('/post/update/{post:slug}',[Postcontroller::class,'update'])->name('post/update');
Route::delete('post/delete/{post:slug}',[Postcontroller::class,'delete'])->name('post/delete');
