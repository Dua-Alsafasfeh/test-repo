<?php
use App\Http\Controllers\PostController;
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
Route::get('/blog',[PostController::class, 'viewblog']);
Route::get('delete-data/id/{id}', [PostController::class, 'destroy']);
Route::get('/data', [PostController::class, 'fetch']);

Route::get('delete-data/id/{id}', [PostController::class, 'destroy']);

Route::get('edit-data/id/{id}', [PostController::class, 'edit']);
Route::put('update-data/id/{id}', [PostController::class, 'update']);
Route::get('add-data', [PostController::class, 'add']);
Route::post('add-data', [PostController::class, 'create']);