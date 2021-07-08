<?php

namespace App\Http\Controllers;

use App\PrestacionImagen;
use App\User;

use Illuminate\Http\Request;
use DataTables;
use Redirect;
class PrestacionImagenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = PrestacionImagen::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()                      
                    ->make(true);
        }
        $prestacionesimagen = PrestacionImagen::all();
        
        return view('prestaciones_imagen',compact('prestacionesimagen'));
    }
}
