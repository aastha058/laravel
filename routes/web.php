<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get("/",[StudentController::class ,"home"]);
Route::get("/",[StudentController::class ,"home"]);

Route::post("/store",[StudentController::class,"store"]);