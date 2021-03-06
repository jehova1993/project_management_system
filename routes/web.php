<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;
use App\Http\Controllers\tasksController;
use App\Http\Controllers\timeEntryController;
use App\Http\Controllers\SearchController;


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
Route::get('/manageproject',[projectController::class,'index']);
Route::get('/managetask',[tasksController::class,'index']);
Route::get('/timeentry',[timeEntryController::class,'index']);
Route::get('/reportpage',[timeEntryController::class,'display']);
Route::get('reportpage/action',[SearchController::class,'search']);



