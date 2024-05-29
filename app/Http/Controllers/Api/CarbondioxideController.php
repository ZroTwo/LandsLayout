<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carbondioxide;
use Illuminate\Http\Request;

class CarbondioxideController extends Controller
{
    public function store(Request $request)
    {
        if (!$request->carbondioxide) {
            return response()->json([
                'message' => 'Carbondioxide is required',
            ], 422);
        }

        if (!is_numeric($request->carbondioxide)) {
            return response()->json([
                'message' => 'Carbondioxide must be a number',
            ], 422);
        }

        Carbondioxide::create([
            'carbondioxide' => $request->carbondioxide,
        ]);

        return response()->json(null, 204);
    }
}
