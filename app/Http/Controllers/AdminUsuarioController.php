<?php
namespace App\Http\Controllers;
use App\User;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Redirect;

class AdminUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
      public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
        $this->middleware('admin');
    }
    
    
    public function index()
    {
        return view('admin.usuarios.index');
    }

    public function obtenerusuariosparaadministrar()
    {
        return Datatables::of(User::query())
        ->addColumn('ver' , '<center>       <a href="{{route(\'usuario.show\', $id) }}" class="btn btn-info btn-sm"><i class="fas fa-fw fa-search"></i> </a></center>')
        ->addColumn('editar' , '<center><a href="{{ route(\'usuario.edit\', $id) }}" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-edit"></i> </a></center>')
        ->addColumn('borrar', '<center><form onsubmit="return false;" id="formeli{{$id}}" name="formeli{{$id}}" action="{{route(\'usuario.destroy\', $id)}}"
        method= "POST"><input type="hidden" name="_method" value="DELETE">
        <button type="submit" onclick="confirmaBorrado({{$id}});" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i></button>
        {{csrf_field()}}
        </form></center>')
        ->rawColumns(['ver', 'editar' ,'borrar'])
        ->toJson();
    }
    
    public function reseteaClaveUsuario($id)
    {
        $usuario = User::find($id);
        $usuario->password = bcrypt('123456');
        $usuario->save();
        return Redirect::to('admin/usuario/')->with(['usuario' => $usuario->name , 'titulo' => 'CLAVE RESETEADA','message' => 'INFORMAR AL USUARIO QUE AHORA SU CLAVE TEMPORAL ES = 123456']); 
    }     
    

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'email'         => 'required|unique:users,email|email',
            'name'        => 'required',
            'area'          => 'required',
            'telefono'      => 'required|numeric',
            'user'          => 'required|alpha|unique:users,user',
            ];

            $messages = [
                'email.required'        =>  'El email es obligatorio',
                'email.unique'          =>  'Ya hay un usuario registrado con este correo',
                'email.email'           =>  'Debe ser un email tipo usuario@dominio.com/cl/etc.',
                'name.required'       =>  'Debes ingresar nombre apellido del usuario',
                'area.required'         =>  'Debes ingresar el área de trabajo del usuario',
                'telefono.required'     =>  'Debes ingresar el teléfono del usuario',
                'telefono.numeric'      =>  'El teléfono del usuario son sólo digitos',
                'user.required'         =>  'El usuario es obligatorio',
                'user.alpha'           =>  'El usuario son sólo letras',
                'user.unique'          =>   'Ya hay un usuario registrado, verifique',

            ];
            

            $this->validate($request, $rules, $messages);

            $usuario = new User(request()->all());
            $usuario->password = bcrypt('123456');
            $usuario->save();

            //return $request->all();
            
            
            
            return Redirect::to('admin/usuario/')->with(['nombre' => $request->nombre , 'titulo' => 'USUARIO AGREGADO', 'message' => 'INFORMAR AL USUARIO QUE AHORA SU CLAVE TEMPORAL ES = 123456']); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view('admin.usuarios.ver', compact('id','usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('admin.usuarios.editar', compact ('usuario'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prestacion = Prestacion::find($id);

        $prestacion->cod_sap = $request->input('cod_sap');
        $prestacion->cod_imed = $request->input('cod_imed');
        $prestacion->guarismo = $request->input('guarismo');
        $prestacion->descripcion = $request->input('descripcion');
        $prestacion->valor_habil = $request->input('valor_habil');
        $prestacion->valor_inhabil = $request->input('valor_inhabil');

        $prestacion->save();
        return Redirect::to('admin/prestacion')->with('message', 'PRESTACION EDITADA CORRECTAMENTE!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $usuario = User::find($id);
        $usuario->delete();

        return Redirect::to('admin/usuario')->with('message','Usuario eliminado correctamente');
    }
    

    
}
