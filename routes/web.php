<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
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

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);


Route::get('student', [StudentController::class, 'index']);

Route::get('student/create', [StudentController::class, 'create']);

Route::post('student', [StudentController::class, 'store']);

Route::delete('student/{id}', [StudentController::class, 'destroy']);

Route::get('student/{id}/edit', [StudentController::class, 'edit']);

Route::patch('student/{id}', [StudentController::class, 'update']);


