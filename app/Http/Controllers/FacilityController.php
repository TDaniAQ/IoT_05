<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;

class FacilityController extends Controller
{
    //Listázás
    public function index()
    {
        return view('facility.index', [
            'factories' => factory::Paginate(5)
        ]);
    }
}
