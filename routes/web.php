<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('app');
});

Route::get('/show', function () {
   return Inertia::render('Home/Show');
});
