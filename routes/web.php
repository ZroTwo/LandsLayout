<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

<<<<<<< Updated upstream
=======
Route::get('/show', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('token/create', function () {
    $device = \App\Models\Device::find(1);

    $token = $device->createToken('api');

    return ['token' => $token->plainTextToken];
});
>>>>>>> Stashed changes
