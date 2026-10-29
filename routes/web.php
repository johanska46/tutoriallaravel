<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,'index']);
Route::get('/article', [ArticleController::class,'article']);
Route::get('/pages', [DashboardController::class,'pages']);
Route::get('/user', [ArticleController::class,'user']);
