<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caneca extends Model
{
    protected  $fillable = [
        'marca',
        'modelo'

    ];


    public function donos()
    {
        return $this->hasMany('App\Cores');
    }
}
