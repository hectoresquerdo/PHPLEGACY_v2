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

//NO BORRAR, MUY IMPORTANTE, REDIRECCIÓN AL CALENDAR YA CONFIGURADO!!
//Route::get('/', [App\Http\Controllers\EventosController::class, 'index'])->middleware('auth');
//use App\Http\Controllers\EventosController;
//Route::resource('eventos',EventosController::class)->middleware('auth');

//Auth::routes(['reset'=>false, 'verify'=>false]);

//Rutas Admin
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');
Route::resource('admin/courses', App\Http\Controllers\CoursesController::class)->middleware('auth');
Route::resource('admin/students', App\Http\Controllers\StudentsController::class)->middleware('auth');
Route::resource('admin/schedules', App\Http\Controllers\SchedulesController::class)->middleware('auth');
Route::resource('admin/works', App\Http\Controllers\WorksController::class)->middleware('auth');
Route::resource('admin/exams', App\Http\Controllers\ExamsController::class)->middleware('auth');


//Roles de usuario

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('soloadmin');
Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'getTeacher'])->name('teacher');
Route::get('/userDAM', [App\Http\Controllers\UserDAMController::class, 'getUserDAM'])->name('userDAM');
Route::get('/userDAW', [App\Http\Controllers\UserDAWController::class, 'getUserDAW'])->name('userDAW');

//Crud ADMIN



Auth::routes();

