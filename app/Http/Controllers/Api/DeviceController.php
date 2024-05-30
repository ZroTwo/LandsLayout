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


//        foreach ($device->tokens as $token) {
//            $token->delete();
//

        return response()->json($device, 201);
    }

    public function createToken(Request $request)
    {
        $device = Device::find($request->device_id);

        foreach ($device->tokens as $token) {
            $token = $request->device()->createToken($request->token_name);
        }

        return $device->createToken('token-name', ['server:update'])->plainTextToken;

    }
}
