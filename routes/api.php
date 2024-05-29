<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('temperatures', function () {
//   return \App\Models\Temperature::all();
//});

Route::post('temperatures/create', 'App\Http\Controllers\Api\TemperatureController@store');
