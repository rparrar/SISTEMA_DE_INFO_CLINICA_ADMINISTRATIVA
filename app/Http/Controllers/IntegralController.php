<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Redirect;
use App\Integral;


class IntegralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
    }

    public function index_integrales(Request $request)
    {
        if ($request->ajax()) {
            $data = Integral::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()                      
                    ->make(true);
        }
        $diascama = Integral::all();
        return view ('integrales');

    }
}


