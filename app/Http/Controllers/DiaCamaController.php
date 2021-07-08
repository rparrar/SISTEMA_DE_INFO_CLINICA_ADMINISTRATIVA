<?php

namespace App\Http\Controllers;

use App\Diacama;
use Illuminate\Http\Request;
use DataTables;
use Redirect;
class DiaCamaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
    }

    public function index_diascama(Request $request)
    {
        if ($request->ajax()) {
            $data = Diacama::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()                      
                    ->make(true);
        }
        $diascama = Diacama::all();
        return view ('valores-dia-cama');

    }
}
