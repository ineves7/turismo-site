<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PontosTuristicosController extends Controller
{
    public function pontosTuristicos(){
        return view('site.pontos-turisticos');
    }
}
