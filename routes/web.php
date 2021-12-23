<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;




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

// Route::get("/deleteuser/{id}",[adminControl::class,"deleteuser"]);

// Home Page
Route::get("/",[homeControl::class,"index"]);
Route::get("/redirect",[homeControl::class,"redirectFunct"]);
Route::get("/users",[adminControl::class,"user"]);

// Manager Create Project
Route::get("/createproject",[adminControl::class,"createprojectview"]);
Route::POST("/add",[adminControl::class,"saveData"]);

// Manager Edit Project
Route::get("/manageproject",[adminControl::class,'manageproject']);
Route::get("upd/{id}",[adminControl::class,'showProject']);
Route::POST("editproject",[adminControl::class,'update']);


//Manager Delete Project
Route::get("del/{project_id}",[adminControl::class,'deleteProj']);









Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

