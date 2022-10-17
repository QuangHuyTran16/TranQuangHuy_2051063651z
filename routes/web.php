<?php

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
Route::get('/students', [StudentController::class, 'index'],);
Route::get('/students/{id}/edit', [StudentController::class, 'get_student_by_id']);
Route::post('/students/{id}/edit', [StudentController::class, 'update']);
Route::get('/students/add', [StudentController::class, 'create']);
Route::post('/students/add', [StudentController::class, 'store']);
Route::get('/students/{id}/delete', [StudentController::class, 'destroy']);
