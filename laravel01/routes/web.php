<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('student/manage', function(){
//     return view('student_manage');
// });

Route::get('student', function(){
    return view('student.edit');
});

Route::get('student/getall', [StudentController::class , 'get_all_student']);

Route::get('getstudent/{id}', [StudentController::class , 'get_student_by_id']);

Route::get('student/add', [StudentController::class , 'addStudent']);

Route::get('student/edit/{id}', [StudentController::class , 'edit']);

Route::put('student/update/{id}', [StudentController::class , 'update']);






