<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use Redirect;
//use Image;

class PerfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */	public function verMiPerfil()
	{
        return view('mi-perfil');
	}

    public function verMiClave()
	{
        return view('mi-clave');
    }

	public function actualizaDatos(Request $request)
	{
	    $rules = [
            'email'=> 'required|email',
            'telefono' => 'required|min:9',
            'area'=> 'required|min:5',
            'name' => 'required|min:5',
            ];
        $messages = [
            'name.required'=>   'Debes ingresar un nombre',
            'name.min' => 'El nombre debe tener al menos 5 caracteres',
            'telefono.required'=>   'Debes ingresar un telefono',
            'telefono.min' => 'El telefono debe tener al menos 9 números',
            'area.min' => 'El area de trabajo debe tener al menos 5 caracteres',
            'area.required'=>   'Debes ingresar un area de trabajo',

            ];

        $this->validate($request, $rules, $messages);

                        /*if($request->hasFile('avatar')){
                    		$avatar = $request->file('avatar');
                    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
                    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
                
                    		$user = Auth::user();
                    		$user->avatar = $filename;
                    		$user->save();
                    	}*/
    	
        $usuario = auth()->user();
        $usuario->area = $request->area;
        $usuario->name = $request->name;
        $usuario->telefono = $request->telefono;
        $usuario->save();
        return Redirect::to('mi-perfil')->with('message', 'DATOS ACTUALIZADOS!');
    }

    public function actualizaClave(Request $request)
	{
	    $request->validate([
        'password' => 'confirmed|min:6',
        ]);

        $usuario = auth()->user();
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        return Redirect::to('mi-perfil')->with('message', 'TU CLAVE HA SIDO ACTUALIZADA!');
    }
    
    public function verMiConfiguracion()
    {
        return view('mi-configuracion');
    }
}
