<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs', function () {
    $title = 'Available man';
    $jobs = [
        'Web Developer',
        'Database admin',
        'Software Engineer',
        'System analyst'
    ];
    return view('/jobs/index', compact('title', 'jobs'));
});
