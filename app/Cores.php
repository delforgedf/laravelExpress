<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cores extends Model
{
    protected $fillable = [
        'canecas_id',
        'cor',
        'tonalidade'
    ];
}
