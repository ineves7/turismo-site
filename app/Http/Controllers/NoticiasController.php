<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function noticias(){
        return view('site.noticias');
    }
}
