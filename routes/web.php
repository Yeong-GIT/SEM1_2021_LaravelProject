<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\homeControl;
use App\Http\Controllers\homeControl;
//use App\Http\Controllers\homeControls;
use App\Http\Controllers\adminControl;
//use App\Http\Controllers\adminControls;


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


Route::get("/",[homeControl::class,"index"]);
Route::get("/users",[adminControl::class,"user"]);
Route::get("/deleteuser/{id}",[adminControl::class,"deleteuser"]);

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

