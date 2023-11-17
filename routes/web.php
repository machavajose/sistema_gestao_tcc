<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
    
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('start.home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/start', [HomeController::class, 'index'])->name('start.home');


Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create',[ StudentController::class,'create'])->name('student.create');
Route::post('/student',[ StudentController::class,'store'])->name('student.store');
Route::get('/student/{id}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::post('/student/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('/student/{id}',[StudentController::class,'show'])->name('student.show ');
Route::get('/student/{id}',[StudentController::class,'destroy'])->name('student.destroy');



Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');
Route::get('/department/create',[ DepartmentController::class,'create'])->name('department.create');
Route::post('/department',[ DepartmentController::class,'store'])->name('department.store');
Route::get('/department/{id}/edit',[DepartmentController::class,'edit'])->name('department.edit');
Route::post('/department/{id}',[DepartmentController::class,'update'])->name('department.update');
Route::get('/department/{id}',[DepartmentController::class,'show'])->name('department.show ');
Route::get('/department/{id}',[DepartmentController::class,'destroy'])->name('department.destroy');

Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/create',[ CourseController::class,'create'])->name('course.create');
Route::post('/course',[ CourseController::class,'store'])->name('course.store');
Route::get('/course/{id}/edit',[CourseController::class,'edit'])->name('course.edit');
Route::post('/course/{id}',[CourseController::class,'update'])->name('course.update');
Route::get('/course/{id}',[CourseController::class,'show'])->name('course.show ');
Route::get('/course/{id}',[CourseController::class,'destroy'])->name('course.destroy');




