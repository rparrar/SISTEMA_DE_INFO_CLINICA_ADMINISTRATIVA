<?php

namespace App\Http\Controllers;

use App\Plan;
use App\User;
use Illuminate\Http\Request;
use DataTables;
use Redirect;


class PlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('clave');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Plan::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()                      
                    ->addColumn('usuario',function($data){return $data->usuario->user;})
                    ->addColumn('planenpdf',function($data){
                            if ($data->pdf)
                            {
                                $rutaarchivo = url('archivos/planes_integrales'). "/". $data->pdf . ".pdf"; 
                                $enlace = "<center><a href='#' id class='btn btn-primary btn-sm'><i class='fas fa-fw fa-search'></i><i class='far fa-fw fa-file-pdf'></i></a></center>";
                            }
                            else
                            {
                                $rutaarchivo ="";
                                $enlace="";
                            }
                            

                            return $enlace;
                        })
                    ->addColumn('esintegral',function($data)
                    {
                        if($data->integral == "SI")
                            {
                                $esintegral= "<center><i class='far fa-fw fa-check-circle text-info' style='font-size:1.7em;'></i></center>";
                            }
                            else
                            {
                                $esintegral= "<center><i class='far fa-fw fa-times-circle text-warning' style='font-size:1.7em;'></i></center>";
                            }
                        return $esintegral;
                        
                    })
                    ->rawColumns(['usuario','planenpdf','esintegral'])
                    ->make(true);
        }
        $planes = Plan::all();
        


       
        return view('planes',compact('planes'));
    }
    
    
    
    
    public function descargar_cualquier_plan()
    {
        return view('descargar_cualquier_plan');
    }
    
    public function descargar_el_plan(Request $request)
    {
        $urlplan = "https://cotizadorplanesweb.cruzblanca.cl/Resultado.aspx?TipoArchivo=PLAN&CodArch=";
        $codigoplan = $request->input('codigoplan');
        return redirect('descarga_planes')->with(['urlplan' => $urlplan.$codigoplan , 'codigoplan' =>$codigoplan]);

        
        
        
        
    }
    
}
