<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contadores;
use App\Seguro;
use App\Documento;
use App\Turno;
use App\Comuna;
use Auth;
use App\Programas;
use App\Colores;
use Validator;
Use App\User;
use Redirect;
use Hash;
class PanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


	public function verTurnos()
    {
        $turnos = Turno::all();
        return view('turnos', compact ('turnos'));

	}

	public function verAnexos()
    {
        /*$anexos = Anexos::where('id','<>','0')
        ->orderBy('torre','asc')
        ->orderBy('piso','asc')
        ->orderBy('nombres','asc')
        ->orderBy('area','asc')
        ->get();*/

        $anexos = Anexos::all();
        return view('anexos', compact('anexos'));

	}

	public function verDescargas()
	{
        $descargas = Documento::all();
	    return view('descargas', compact('descargas'));
	}

	public function verSeguros()
	{
        $seguros = Seguro::all();
	    return view('seguros', compact('seguros'));
	}

	public function verPrestaciones()
    {
        $prestaciones = Prestacion::all();
        return view('prestaciones',compact ('prestaciones'));
	}
	
	public function elijeFondo($id)
	{
	    $idUsuario = Auth::user()->id;
	    $usuario = User::find($idUsuario);
	    $usuario->tema = $id;
        $usuario->save();
	    
       return Redirect::to('/')->with('message', 'FONDO ACTUALIZADO CORRECTAMENTE!');
	}

	public function tests()
	{
	    $seguros = Seguros::all();
        $programas = Programas::all();
        $descargas = Descargas::all();
        $anexos = Anexos::all();




        //return view('tests', compact ('seguros' , 'programas', 'descargas', 'anexos'));

	}

	public function todo()
	{
    	$descargas = Descargas::all();
        $prestaciones = Prestacion::all();
        $doctores = Doctores::all();
        $seguros = Seguros::all();
        $anexos = Anexos::all();
        $comunas = Comunas::all();
        $turnos = Turnos::all();

        return view('todo', compact('descargas','prestaciones','doctores','seguros','anexos','comunas','turnos'));
	}


}



