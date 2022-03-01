<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
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
Route::get('createe', [blogcontroller::class,'create']);//url, METHOD
Route::post('storke', [blogcontroller::class,'storee']);
Route::post('profile', [blogcontroller::class,'loadData']);
Route::view('test','testSession');
//Route::get('/', [blogcontroller::class,'index']);
