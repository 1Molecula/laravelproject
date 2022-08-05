<?php
namespace App\Http\Controllers;

use App\Models\Temperature;

class ControllerTemperature extends Controller
{

    public function tableTemperature()
    {
        $temperature = Temperature::all();
        return view('weather', ['temperatures' => $temperature]);
    }

}
