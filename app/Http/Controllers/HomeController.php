<?php

namespace App\Http\Controllers;

use App\Models\Temperature;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $temperature = Temperature::first();

        return Inertia::render('Home/Show', ['temperature' => $temperature]);
    }
}
