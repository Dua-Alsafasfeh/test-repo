<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormValidate;
use App\Http\Controllers\StudentController;
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

Route::controller(UserController::class)->group (function(){
    Route::get('/index','createuser');
}) ;
Route::post('form', [FormValidate::class, 'form_validate']);
Route::view('show','form');
Route::get('/posts',[FormValidate::class, 'one_relation']);
Route::get('/comment',[FormValidate::class, 'viewComment']);
use App\Http\Controllers\CourseController;

Route::get('/academy', [CourseController::class, 'viewCourse']);