<?php

use App\Http\Controllers\duaaController;
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
Route::get('/id/{id}/', function($id){
    return 'id = '.$id;
});
Route::get('/id/{id}/user/{user}', function($id,$user){
    return 'id = '.$id.'<br>'.'user is:'.$user ;
});
Route::get('/candy',function(){
    $candyList = ['Snickers','Mars','Galaxy'];
    return view('test',['List' => $candyList]);
});
// Route::get('/test2', 'App\Http\controllers\duaaController@candy');
Route::get('/test2',[duaaController::class , 'candy']);
Route::get('/test3',[duaaController::class , 'viewWelcome']);
Route::get('/id/{id}/userName/{userName}',[duaaController::class , 'user']);