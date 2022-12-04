<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

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
    return view('welcome');
});

Route::GET('posts',[Postcontroller::class,'index'])->name('posts');
Route::GET('postcreate',[Postcontroller::class,'create'])->name('postcreate');
Route::POST('poststore',[Postcontroller::class,'store'])->name('poststore');
