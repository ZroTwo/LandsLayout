<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:60',
            'token' => 'required|string|max:100',
        ]);

        $device = Device::create([
            'name' => $validatedData['name'],
            'token' => $validatedData['token'],
        ]);

        return response()->json($device, 201);
    }
}
