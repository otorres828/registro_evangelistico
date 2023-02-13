<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class CelulasOficiale extends Model
{
    use HasFactory,Searchable;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function toSearchableArray()
    {
       return[
            'anfitrion'=>$this->anfitrion,
            'ubicacion'=>$this->ubicacion,
            'telefono'=>$this->telefono,
            'dia'=>$this->dia
       ];
    }
}
