<?php

use App\Models\product;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Authcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware'=>['auth:sanctum']], function () {

    Route::resource('product', Productcontroller::class);
    Route::post('/logout', [Authcontroller::class, 'logout']);


});


Route::post('/register', [Authcontroller::class, 'register']);
Route::get('/login', [Authcontroller::class, 'login'] );






// 


