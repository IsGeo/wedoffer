<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class Village extends Model
{
    protected $table = 'villages';

    protected $filled = ['name', 'description'];


    public static function getVillage($id)
    {
        return self::where('id', $id)->first();
        //return self::orderBy('village_id', 'desc')->get();
    }
}
