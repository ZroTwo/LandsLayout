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
            'name' => 'required|string|max:60'
        ]);

        $device = Device::create([
            'name' => $validatedData['name']
        ]);

        return response()->json($device, 201);
    }

    public function createToken(Request $request)
    {
        $device = Device::find($request->device_id);

        if ($device) {

            $token = $device->createToken($request->token_name);

            return response()->json(['token' => $token->plainTextToken], 200);
        } else {
            return response()->json(['message' => 'Device not found'], 404);
        }
    }
}
