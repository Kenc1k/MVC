<?php

use App\routes\Route;
use App\Controllers\CategoryController;

Route::get('/' , [CategoryController::class, 'index']);
Route::get('/test' , [CategoryController::class, 'test']);
Route::post('/show' , [CategoryController::class, 'test']);
?>