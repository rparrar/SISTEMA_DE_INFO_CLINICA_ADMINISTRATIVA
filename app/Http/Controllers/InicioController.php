<?php

namespace App\Http\Controllers;
use App\User;

use Auth;

class InicioController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('activo');
        $this->middleware('clave');
    }

    public function index()
    {
        
            return view('inicio');
        
    }

}



