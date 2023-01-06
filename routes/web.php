<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
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
    return view('homepage');
});
Route::get('/home', [HomeController::class, 'teacherHome']);
Route::get('/teacher_register', [NewController::class, 'teacherRegister']);

Route::post('/Register', [NewController::class, 'register']);

Auth::routes();
Route::middleware(['auth', 'user-access:student'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/studentportal', [StudentController::class, 'index']);
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'adminHome']);
});

Route::middleware(['auth', 'user-access:teacher'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'teacherHome']);
    Route::get('/teacher_dashboard', [TeacherController::class, 'index']);
});



