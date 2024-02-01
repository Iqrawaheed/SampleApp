<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\employee;

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
Route::get('index','HomeController@Index')->name('index');
Route::post('show','HomeController@showdata')->name('show');
Route::get('sample','HomeController@sample')->name('sample');
Route::Resource('/department','departmentController');
Route::get('/getdata','employeeController@getdata');

