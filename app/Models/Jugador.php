<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $table='jugadores';
    protected $primaryKey='id';
    protected $fillable=
        [
            'name','lastname','shirt_name','nickname','equipo_id'
        ];

}
