@extends('layouts.app')
@section('titulo')
{{ 'Admin - Usuarios - Editar' }}
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="card">
        <div class="card-header">
            Editando prestación {{$usuario->descripcion}}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('prestacion.update', $usuario->id) }}">
                 @csrf
                 @method('PUT')
                <div class="row">
                    <div class="form-group col-md-5"><label for="cod_sap">CODIGO SAP</label>
                        <input type="text" name ="cod_sap" id = "cod_sap" class="form-control form-control-sm text-right" autofocus value="{{$usuario->cod_sap}}" onkeyup="mayusculasCod()">
                    </div>
                    
                    <div class="form-group col-md-5"><label for="cod_imed">CODIGO IMED</label>
                        <input type="text" name ="cod_imed" id = "cod_imed" class="form-control form-control-sm text-right" autofocus value="{{$usuario->cod_imed}}" onkeyup="mayusculasCod()">
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label for="guarismo">GUARISMO</label>
                        <input type="number" name ="guarismo" class="form-control form-control-sm text-center" value="{{$usuario->guarismo}}">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-12">                
                        <label for="descripcion">DESCRIPCION</label>
                        <input type="text" name = "descripcion" id ="descripcion" class="form-control form-control-sm text-center" onkeyup="mayusculas()" value="{{$usuario->descripcion}}">
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">    
                        <label for="valor_habil">VALOR HABIL ($)</label>
                        <input type="text" name = "valor_habil" id = "valor_habil" class="form-control form-control-sm text-right" onkeyup="multiplicar()" value="{{$usuario->valor_habil}}">
                    </div>
                    <div class="form-group col-md-6">    
                        <label for="valor_inhabil">VALOR INHABIL ($)</label>
                        <input type="text" name = "valor_inhabil" id = "valor_inhabil" class="form-control form-control-sm text-right" value="{{$usuario->valor_inhabil}}">
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <a href="{{route('prestacion.index')}}" class="btn btn-danger btn-sm float-left"><i class="fas fa-fw fa-arrow-left"></i> CANCELAR</a>
            <button class="btn btn-success btn-sm float-right" type="submit"><i class="fas fa-fw fa-edit"></i> GUARDAR CAMBIOS</button>
        </div>
          </form>
    </div>
</div>            
@endsection
@section('scripts')
<script>
        function multiplicar(){
          habil = document.getElementById("valor_habil").value;
          recargo = 1.5;
          inhabil = habil * recargo;
          document.getElementById("valor_inhabil").value = inhabil;
        }

        function mayusculas() {
            var x = document.getElementById("descripcion");
            x.value = x.value.toUpperCase();
        }

         function mayusculasCod() {
            var xcod = document.getElementById("cod_sap");
            xcod.value = xcod.value.toUpperCase();
        }
    </script>
@endsection
