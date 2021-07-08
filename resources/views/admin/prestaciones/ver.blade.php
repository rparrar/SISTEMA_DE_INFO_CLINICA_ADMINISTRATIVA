@extends('layouts.app')
@section('titulo')
{{ 'Admin - Prestaciones - Ver' }}
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <table class="table table-bordered table-hover table-striped table-sm">
            <tbody>
                <tr>
                    <td  colspan="2" class="text-primary text-center"><h5 class="m-auto">{{$prestacion->descripcion}}</h5></td>
                </tr>
                <tr>
                    <td>Codigo SAP</td>
                    <td>{{$prestacion->cod_sap}}</td>
                </tr>

                <tr>
                    <td>Codigo IMED</td>
                    <td>{{$prestacion->cod_imed}}</td>
                </tr>

                <tr>
                    <td>Guarismo</td>
                    <td>{{$prestacion->guarismo}}</td>
                </tr>

                <tr>
                    <td>Valor Hábil</td>
                    <td>{{$prestacion->valor_habil}}</td>
                </tr>

                <tr>
                    <td>Valor Inhábil</td>
                    <td>{{$prestacion->valor_inhabil}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('prestacion.index')}}" class="btn btn-primary btn-sm float-right"><i class="fas fa-fw fa-long-arrow-alt-left"></i> Volver</a>
    </div>
</div>
@endsection
