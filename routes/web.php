<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;

Route::get("/", [HomeController::class, "index"]);
Route::get("/tools/link", [LinkController::class, "index"]);
Route::post("/tools/link", [LinkController::class, "create"]);
