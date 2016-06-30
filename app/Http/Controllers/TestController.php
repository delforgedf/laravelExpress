<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function index($nome)
    {
        return view("test.index" ,  compact('nome'));
    }

    public function notas()
    {

        $notas = [
            0=> 'anotação 1',
            1=> 'anotação 2',
            2=> 'anotação 5',
            3=> 'anotação 3',
            4=> 'anotação 4',

        ];

        return view("test.notas" , compact('notas'));
    }
}
