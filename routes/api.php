<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tasksController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});   
Route::get('/tasks', [tasksController::class, 'index']);
Route::post('/tasks', [tasksController::class, 'create']);
Route::get('/tasks/{id}', [tasksController::class, 'show']);
Route::put('/tasks/{id}', [tasksController::class, 'update']);
Route::delete('/tasks/{id}', [tasksController::class, 'destroy']);

