<?php

namespace App\Http\Controllers;

use App\Models\Temperature;
use App\Models\Carbondioxide;
use App\Models\Condensity;
use App\Models\Device;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $temperatures = Temperature::all();
        $carbondioxides = Carbondioxide::all();
        $condensities = Condensity::all();
        $devices = Device::all();

        return Inertia::render('Home/Show', ['temperatures' => $temperatures, 'carbondioxides' => $carbondioxides, 'condensities' => $condensities, 'devices' => $devices]);
    }
}
