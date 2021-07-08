<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use DataTables;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Doctor::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('doctores');
    }
}
