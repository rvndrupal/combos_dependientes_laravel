<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public static function munObtener($id)
    {
        return Municipios::where('estados_id','=', $id)->get();
    }
}
