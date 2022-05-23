<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EquipmentType;

class EquipmenttypeController extends Controller
{
    //Listázás
    public function index()
    {
        return view('types.index', [
            'types' => EquipmentType::Paginate(5)
        ]);
    }
}
