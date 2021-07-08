<?php

namespace App\Http\Controllers;

use App\PrestacionLaboratorio;
use App\User;

use Illuminate\Http\Request;
use DataTables;
use Redirect;
class PrestacionLaboratorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = PrestacionLaboratorio::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()                      
                    ->make(true);
        }
        $prestacioneslaboratorio = PrestacionLaboratorio::all();
        
        return view('prestaciones_laboratorio',compact('prestacioneslaboratorio'));
    }
}
