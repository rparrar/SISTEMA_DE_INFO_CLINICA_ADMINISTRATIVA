<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
    }

    public function index(Request $request)
    {
        if ($request->has('export')) {
            if ($request->get('export') == 'pdf') {
                $correo = $request->input('email');
                $pdf = PDF::loadView('transferenciapdf', compact('correo'));
                

                
                
                return $pdf->stream('pdf.pdf');
            }
        }
        //$correo = $request->input('email');
        //return view('pdfs', compact('correo'));
    }
}