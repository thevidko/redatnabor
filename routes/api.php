<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\TaskController;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/tasks', TaskController::class);
Route::apiResource('/categories', CategoryController::class);
