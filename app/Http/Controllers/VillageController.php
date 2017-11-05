<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Village;

class VillageController extends Controller
{
    public function index () {

        $village_id = 1;
        $village = Village::getVillage($village_id);

        return view('home', ['village' => $village]);
    }
}
