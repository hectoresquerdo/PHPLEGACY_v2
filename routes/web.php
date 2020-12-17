<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\StudentsController;



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

Auth::routes();
//Admin views

Route::get('admin', [HomeController::class, 'index'])->name('admin.index');
Route::get('admin/index', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('admin/courses', App\Http\Controllers\CoursesController::class);
Route::resource('admin/students', App\Http\Controllers\StudentsController::class);
Route::resource('admin/schedules', App\Http\Controllers\SchedulesController::class);
Route::resource('admin/works', App\Http\Controllers\WorksController::class);
Route::resource('admin/exams', App\Http\Controllers\ExamsController::class);

//teacherDAM views
Route::get('teacherDAM', [HomeController::class, 'getTeacherDAM'])->name('teacherDAM.index');
Route::get('teacherDAM/exams', [ExamsController::class, 'create'])->name('teacherDAM.exams.create');
Route::get('teacherDAM/exams/edit', [ExamsController::class, 'edit'])->name('teacherDAM.exams.edit');
Route::get('teacherDAM/works', [WorksController::class, 'create'])->name('teacherDAM.works.index');
Route::get('teacherDAM/works/edit', [WorksController::class, 'edit'])->name('teacherDAM.works.edit');
Route::get('teacherDAM/schedules', [SchedulesController::class, 'create'])->name('teacherDAM.schedules.index');
Route::get('teacherDAM/students', [StudentsController::class, 'create'])->name('teacherDAM.students.index');



//teacherDAW views
Route::get('teacherDAW', [HomeController::class, 'getTeacherDAW'])->name('teacherDAW.index');
Route::get('teacherDAW/exams', [ExamsController::class, 'create'])->name('teacherDAW.exams.index');
Route::get('teacherDAW/exams/edit', [ExamsController::class, 'edit'])->name('teacherDAW.exams.edit');
Route::get('teacherDAW/works', [WorksController::class, 'create'])->name('teacherDAW.works.index');
Route::get('teacherDAW/works/edit', [WorksController::class, 'edit'])->name('teacherDAW.works.edit');
Route::get('teacherDAW/schedules', [SchedulesController::class, 'create'])->name('teacherDAW.schedules.index');
Route::get('teacherDAW/students', [StudentsController::class, 'create'])->name('teacherDAW.students.index');


//userDAM views
Route::get('userDAM', [HomeController::class, 'getUserDAM'])->name('userDAM.index');
Route::get('userDAM/exams', [ExamsController::class, 'create'])->name('userDAM.exams.index');
Route::get('userDAM/works', [WorksController::class, 'create'])->name('userDAM.works.index');
Route::get('userDAM/evaluation', [EvaluationController::class, 'viewDAM'])->name('userDAM.evaluation.view');


//userDAW views
Route::get('userDAW', [HomeController::class, 'getUserDAW'])->name('userDAW.index');
Route::get('userDAW/exams', [ExamsController::class, 'create'])->name('userDAW.exams.index');
Route::get('userDAW/works', [WorksController::class, 'create'])->name('userDAW.works.index');
Route::get('userDAW/evaluation', [EvaluationController::class, 'viewDAW'])->name('userDAW.evaluation.view');

//Eventos
Route::resource('eventos', EventosController::class);

//UserProfile

//Logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
