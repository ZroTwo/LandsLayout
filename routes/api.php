<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

<<<<<<< Updated upstream
//Route::get('temperatures', function () {
//   return \App\Models\Temperature::all();
//});

Route::post('temperatures/create', 'App\Http\Controllers\Api\TemperatureController@store');
=======
Route::post('carbondioxides/create', 'App\Http\Controllers\Api\CarbondioxideController@store');

>>>>>>> Stashed changes
