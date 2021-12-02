<?php

use Illuminate\Support\Facades\Route;

Route::get('/test1' , [\App\Http\Controllers\TestController::class , 'index']);
