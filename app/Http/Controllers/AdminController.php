<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
        $this->middleware('admin');
    }
    
    
    public function index()
    {
        return view('admin.inicio');
    }

}



