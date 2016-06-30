<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dono extends Model
{
    protected  $fillable = [
        'canecas_id',
        'nome',
        'idade'

    ];
}
