<?php
namespace App\Http\Controllers;
use App\Prestacion;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Redirect;

class AdminPrestacionController extends Controller
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
        return view('admin.prestaciones.index');
    }

    public function obtenerprestacionesparaadministrar()
    {
        return Datatables::of(Prestacion::query())
        //->addColumn('botones' , 'admin.prestaciones.botones')
        ->addColumn('ver' , '<center><a href="{{ route(\'prestacion.show\', $id) }}" class="btn btn-info btn-sm"><i class="fas fa-fw fa-search"></i> </a></center>')
        ->addColumn('editar' , '<center><a href="{{ route(\'prestacion.edit\', $id) }}" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-edit"></i> </a></center>')
        ->addColumn('borrar', '<center><form onsubmit="return false;" id="formeli{{$id}}" name="formeli{{$id}}" action="{{route(\'prestacion.destroy\', $id)}}"
        method= "POST"><input type="hidden" name="_method" value="DELETE">
        <button type="submit" onclick="confirmaBorrado({{$id}});" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i></button>
        {{csrf_field()}}
        </form></center>')
        ->rawColumns(['ver', 'editar' ,'borrar'])
        ->toJson();
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
        //  cod_sap - cod_imed - guarismo - descripcion - valor_habil - valor_inhabil
        // 'email' => 'unique:users,email_address'
        $rules = [
            'cod_sap'           => 'required|unique:prestaciones,cod_sap',
            'cod_imed'           => 'required|unique:prestaciones,cod_imed',
            'guarismo'      => 'required|integer|min:0|max:13',
            'descripcion'   => 'required|min:5',
            'valor_habil'   => 'required|integer',
            'valor_inhabil' => 'required|integer',

            ];

            $messages = [
                'cod_sap.required'          =>  'El codigo SAP es obligatorio',
                'cod_sap.unique'            =>  'El codigo SAP ya existe asociado a una prestacion',
                'cod_imed.required'          =>  'El codigo IMED es obligatorio',
                'cod_imed.unique'            =>  'El codigo IMED ya existe asociado a una prestacion',
                'guarismo.required'     =>  'El guarismo es obligatorio, y debe ser un numero entre 0 y 13',
                'guarismo.digits'       =>  'El guarismo es obligatorio, y debe ser un numero entre 0 y 13',
                'guarismo.max'          =>  'El guarismo es obligatorio, y debe ser un numero entre 0 y 13',
                'guarismo.min'          =>  'El guarismo es obligatorio, y debe ser un numero entre 0 y 13',
                'descripcion.required'  =>  'La descripcion es obligatoria',
                'descripcion.min'       =>  'La descripcion debe tener al menos :min caracteres.',
                'valor_habil.integer'   =>  'El valor habil debe ser un numero sin decimales, puede ser 0',
                'valor_inhabil.integer'   =>  'El valor inhabil debe ser un numero sin decimales, puede ser 0',
            ];

            $this->validate($request, $rules, $messages);



            $prestacion = new Prestacion(request()->all());
            $prestacion->save();

            return Redirect::to('admin/prestacion')->with('message', 'PRESTACION AGREGADA CORRECTAMENTE!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestacion = Prestacion::find($id);
        return view('admin.prestaciones.ver', compact('id','prestacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestacion = Prestacion::find($id);
        return view('admin.prestaciones.editar', compact ('prestacion'));

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

        $prestacion = Prestacion::find($id);
        $prestacion->delete();

        return Redirect::to('admin/prestacion')->with('message','Prestación eliminada correctamente');
    }
}
