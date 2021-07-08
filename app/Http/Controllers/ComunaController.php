<?php

namespace App\Http\Controllers;

use App\Comuna;
use Illuminate\Http\Request;
use DataTables;

class ComunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Comuna::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('comunas');
    }
}
