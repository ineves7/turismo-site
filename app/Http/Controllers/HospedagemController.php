<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospedagemController extends Controller
{
    public function hospedagem(){
        return view('web.hospedagem');
    }
}
