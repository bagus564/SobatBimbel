<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//    return view('welcome');
// });

route::get('/', [HomeController::class, 'index']);
route::get('/contact', [HomeController::class, 'contact']);