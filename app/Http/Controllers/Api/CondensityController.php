<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Condensity;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CondensityController extends Controller
{
    public function store(Request $request)
    {
        if (!$request->condensity) {
            return response()->json([
                'message' => 'condensity is required',
            ], 422);
        }

        if (!is_numeric($request->condensity)) {
            return response()->json([
                'message' => 'condensity must be a number',
            ], 422);
        }

        carbondioxide::create([
            'carbondioxide' => $request->carbondioxide,
        ]);

        return response()->json(null, 204);
    }

    public function show(Carbondioxide $carbondioxide)
    {
        return Inertia::render('Carbondioxide/Show', [
            'carbondioxide' => $carbondioxide->only('id', 'carbondioxide', 'created_at'),
        ]);
    }
}
