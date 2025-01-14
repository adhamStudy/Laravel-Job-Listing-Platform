<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/jobs/saved', [JobController::class, 'saved']);

Route::resource('jobs', JobController::class);
Route::get('/test', function () {
    return "Test route is working";
});
