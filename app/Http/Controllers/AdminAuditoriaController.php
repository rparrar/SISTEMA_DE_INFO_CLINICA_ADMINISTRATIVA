<?php
namespace App\Http\Controllers;
use App\Auditoria;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Redirect;

class AdminAuditoriaController extends Controller
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
        return view('admin.auditorias.index');
    }

    public function obtenerauditoriasparaadministrar()
    {
        return Datatables::of(Auditoria::query())
        //->addColumn('botones' , 'admin.prestaciones.botones')
        ->addColumn('nombre',function($data){
            return $data->usuario->name;
        })
        ->addColumn('usuario',function($data){
            return $data->usuario->user;
        })
        ->addColumn('ver' , '<center>       <a href="{{route(\'auditoria.show\', $id) }}" class="btn btn-info btn-sm"><i class="fas fa-fw fa-search"></i> </a></center>')
        ->addColumn('borrar', '<center><form onsubmit="return false;" id="formeli{{$id}}" name="formeli{{$id}}" action="{{route(\'auditoria.destroy\', $id)}}"
        method= "POST"><input type="hidden" name="_method" value="DELETE">
        <button type="submit" onclick="confirmaBorrado({{$id}});" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash-alt"></i></button>
        {{csrf_field()}}
        </form></center>')
        ->rawColumns(['nombre','usuario','ver','borrar'])
        ->toJson();
    }

    public function show($id)
    {
        $auditoria = Auditoria::find($id);
        $ipabuscar =  $auditoria->ip;
        $ch = curl_init('http://ipwhois.app/json/'.$ipabuscar .'?lang=es');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);
        $ip_completa = json_decode($json, true);
        return view('admin.auditorias.ver', compact('auditoria','ip_completa'));
    }




    public function destroy($id)
    {

        $auditoria = Auditoria::find($id);
        $auditoria->delete();

        return Redirect::to('admin/auditoria')->with('message','Registro de auditoría eliminado correctamente');
    }
}
