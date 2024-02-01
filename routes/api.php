<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\department;
use App\Http\Controllers\departmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("list",[departmentController::class,"list"]);
Route::POST("add",[departmentController::class,"add"]);
Route::put("updated",[departmentController::class,"updated"]);

