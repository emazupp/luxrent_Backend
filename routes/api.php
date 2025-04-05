<?php

use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/cars", [CarController::class, "index"]);
Route::get("/cars/{car}", [CarController::class, "show"]);

Route::get("/brands", [BrandController::class, "index"]);

