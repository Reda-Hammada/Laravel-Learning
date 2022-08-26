<?php

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


Route::get('/', function () {
    return view('welcome');
});

// making route and naming them 
// return view and blade template
Route::get('/route', function () {

    return view('route');

})->name('route page');

Route::get('/contact', function(){

    return 'contanct';
})->name('contact page');


// optional parameteres 
//  Constraining Route parameters values

Route::get('/posts/{id?}', function($singlePost = 20){

        return "the post id number". $singlePost;

})->where(['id'=>'[0-9]+'])->name('postbyid');

// view & template 
Route::get('/home', function(){

    return view('home.index');
});