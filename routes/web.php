<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\http\Controllers\tasksController;


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
    return view('welcome');
});

Route::get('/tasks', [tasksController::class, 'index']);
Route::post('/tasks', [tasksController::class, 'store']);
Route::get('/tasks/{task}', [tasksController::class, 'show']);
Route::put('/tasks/{task}', [tasksController::class, 'update']);
Route::delete('/tasks', [tasksController::class, 'destroy']);