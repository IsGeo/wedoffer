<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Village;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $village_id = 1;
        $village = Village::getVillage($village_id);

        return view('home', ['village' => $village]);
    }
}
