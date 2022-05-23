<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{
    //Listázás

    public function index()
    {
        return view('equipment.index', [
            'equipments' => equipment::Paginate(5)
        ]);
    }
}
