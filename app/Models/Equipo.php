<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table='equipos';
    protected $primaryKey='id';
    protected $fillable=
        [
          'team_name','logo','localidad_id'
         ];

}
