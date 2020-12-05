<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\scheduleController;
use App\Http\Controllers\admin\coursesController;

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

//NO BORRAR, MUY IMPORTANTE, REDIRECCIÓN AL CALENDAR YA CONFIGURADO!!
//Route::get('/', [App\Http\Controllers\EventosController::class, 'index'])->middleware('auth');
//use App\Http\Controllers\EventosController;
//Route::resource('eventos',EventosController::class)->middleware('auth');

//Auth::routes(['reset'=>false, 'verify'=>false]);

//Base
Route::get('/', function(){
    return view('welcome');
})->middleware('auth');


//Roles de usuario


Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'getTeacher'])->name('teacher');
Route::get('/userDAM', [App\Http\Controllers\UserDAMController::class, 'getUserDAM'])->name('userDAM');
Route::get('/userDAW', [App\Http\Controllers\UserDAWController::class, 'getUserDAW'])->name('userDAW');

//Crud ADMIN

//Courses
Route::resource('admin', App\Http\Controllers\CoursesController::class)->middleware('auth');


Auth::routes();

