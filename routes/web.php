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

/*Route::get('/', function () {
    return view('eventos/index');
});*/
Route::get('/', [App\Http\Controllers\EventosController::class, 'index'])->middleware('auth');

//Auth::routes(['register'=>false, 'reset'=>false, 'verify'=>false]);
Auth::routes(['reset'=>false, 'verify'=>false]);

use App\Http\Controllers\EventosController;

Route::resource('eventos',EventosController::class)->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'getTeacher'])->name('teacher');
Route::get('/userDAM', [App\Http\Controllers\UserDAMController::class, 'getUserDAM'])->name('userDAM');
Route::get('/userDAW', [App\Http\Controllers\UserDAWController::class, 'getUserDAW'])->name('userDAW');
