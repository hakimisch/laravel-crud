<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; 
use App\Http\Controllers\LecturerController; //add ControllerNameSpace
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

Route::get('/ok', function () {
    return view('welcome');
});


Route::resource("/student", StudentController::class);
Route::resource("/lecturer", LecturerController::class);