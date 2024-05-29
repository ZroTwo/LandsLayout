<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('temperatures/create', 'App\Http\Controllers\Api\TemperatureController@store');

Route::post('carbondioxides/create', 'App\Http\Controllers\Api\CarbondioxideController@store');

Route::post('condensities/create', 'App\Http\Controllers\Api\CondensityController@store');
