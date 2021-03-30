<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\MajorController;
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
    return view('layouts.sidebar');
});
//Route::get('/student', [StudentController::class, 'index']); 
Route::resource('students','StudentController');
// Route::get('/', [RombelController::class, 'index']); 
Route::resource('rombels','RombelController');
// Route::get('/', [MajorController::class, 'index']); 
Route::resource('majors','MajorController');