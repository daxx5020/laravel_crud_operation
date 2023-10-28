<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\examcontroller;
 



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


Route::get("/",[examcontroller::class,"register"]);
Route::post("/register",[examcontroller::class,"store"]);

Route::get("/view",[examcontroller::class,"view"]);

Route::get("/delete/{id}",[examcontroller::class,"delete"]);
Route::get("/update/{id}",[examcontroller::class,"update"]);


Route::post("/update/{id}",[examcontroller::class,"edit"]);
