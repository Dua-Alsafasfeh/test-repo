<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\midlController;

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
Route::get('/check/{age}',[midlController::class,'check_age']);
Route::view("users","users");
Route::view("home","home");
Route::view("noaccess","noaccess");
 
