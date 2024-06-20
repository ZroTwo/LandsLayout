<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Temperature;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TemperatureController extends Controller
{
    public function store(Request $request)
    {
        if (!$request->temperature) {
            return response()->json([
                'message' => 'Temperature is required',
            ], 422);
        }

        if (!is_numeric($request->temperature)) {
            return response()->json([
                'message' => 'Temperature must be a number',
            ], 422);
        }

        Temperature::create([
            'temperature' => $request->temperature,
            'device_id' => $request->user()->id,
        ]);

        return response()->json(null, 204);
    }

    public function show(Temperature $temperature)
        {
            return Inertia::render('Temperature/Show', [
                'temperature' => $temperature->only('id', 'temperature', 'created_at'),
            ]);
        }
}
