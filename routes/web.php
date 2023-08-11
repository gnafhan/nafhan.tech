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

Route::get("/register", [UserController::class, "index"]);
Route::post("/register", [UserController::class, "store"]);
Route::post("/logout", [UserController::class, "logout"]);

Route::get("/login", [UserLoginController::class, "index"])->middleware('guest');
Route::post("/login", [UserLoginController::class, "auth"]);



