<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $fillable = [
        'nombre',
    ];

    // public function municipio(){
    //     return $this->belongsTo(Municipios::class);
    // }
}
