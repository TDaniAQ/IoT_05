<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;

class SensorController extends Controller
{
    //Listázás
    //Listázás
    public function index()
    {
        return view('sensor.index', [
            'sensors' => sensor::Paginate(5)
        ]);
    }
}
