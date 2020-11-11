<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refaccionaria extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'numPiezas', 'costoPieza'];
}
