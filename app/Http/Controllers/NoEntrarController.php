<?php

namespace App\Http\Controllers;
use App\User;

use Auth;

class NoEntrarController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return redirect()->route('PAGINA DE INICIO');
    }

}
