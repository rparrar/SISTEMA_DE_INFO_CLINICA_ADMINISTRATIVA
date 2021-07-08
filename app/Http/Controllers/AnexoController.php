<?php

namespace App\Http\Controllers;

use App\Anexo;
use Illuminate\Http\Request;
use DataTables;

class AnexoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Anexo::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('anexos');
    }
}
