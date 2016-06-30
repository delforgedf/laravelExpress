<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Caneca;

class PostsController extends Controller
{

    public function index()
    {
        $canecas =  \App\Caneca::all();

        return view('caneca.index' , compact('canecas'));
    }
}
