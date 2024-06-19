<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DeviceController;

Route::get('temperatures', function () {
   return \App\Models\Temperature::all();
});

Route::post('temperatures/create', 'App\Http\Controllers\Api\TemperatureController@store');

Route::post('devices/create', 'App\Http\Controllers\Api\DeviceController@store');

Route::post('/devices', [DeviceController::class, 'store']);

Route::post('/devices/token', [DeviceController::class, 'createToken']);

Route::post('/test', function (Request $request) {

//    $request->user()->id;
    dd($request->get('temp'));

})->middleware(['auth:sanctum']);
