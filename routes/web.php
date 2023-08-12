<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\Task1Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLoginController;



Route::get("/", [HomeController::class, "index"]);
Route::get("/tools/link", [LinkController::class, "index"]);
Route::post("/tools/link", [LinkController::class, "create"]);
Route::delete("/tools/link", [LinkController::class, "delete"]);

Route::get("/task/task1", [Task1Controller::class, "index"]);
Route::get("/task/task1/reason", [Task1Controller::class, "reason"]);
Route::get("/task/task1/popularity", [Task1Controller::class, "popularity"]);
Route::get("/task/task1/learn", [Task1Controller::class, "learn"]);
Route::get("/task/task1/author", [Task1Controller::class, "author"]);




Route::get("/register", [UserController::class, "index"])->middleware('guest');
Route::post("/register", [UserController::class, "store"])->middleware('guest');
Route::post("/logout", [UserController::class, "logout"])->middleware('auth');


Route::get("/login", [UserLoginController::class, "index"])->middleware('guest');
Route::post("/login", [UserLoginController::class, "auth"])->middleware('guest');



