@extends('layouts.app')
@section('titulo')
{{ 'Admin - Auditorias - Ver' }}
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        @if($auditoria->ip !="127.0.0.1")
        <table class="table table-bordered table-hover table-striped table-sm">
            <tr>
                <td>FECHA</td>
                <td>{{ \Carbon\Carbon::parse($auditoria->fecha)->format('d/m/Y')}}</td>
            </tr>
            <tr>
                <td>HORA</td>
                <td>{{ \Carbon\Carbon::parse($auditoria->fecha)->format('H:i:s')}}</td>
            </tr>
            <tr>
                <td>NOMBRE DEL USUARIO QUE INGRESO</td>
                <td>{{$auditoria->usuario->name}}</td>
            </tr>
            <tr>
                <td>USUARIO QUE INGRESO</td>
                <td>{{$auditoria->usuario->user}}</td>
            </tr>
            <tr>
                <td>CORREO DEL USUARIO</td>
                <td>{{$auditoria->usuario->email}}</td>
            </tr>
            <tr>
                <td>IP</td>
                @if ($ip_completa['ip'] == "190.196.156.242")
                    <td>{{$ip_completa['ip']}} - (IP DE CLINICA BUPA)</td>
                @else
                    <td>{{$ip_completa['ip']}}</td>
                @endif

            </tr>
            <tr>
                <td>CONTINENTE</td>
                <td>{{$ip_completa['continent']}}</td>
            </tr>
            <tr>
                <td>PAIS</td>
                <td>{{$ip_completa['country']}} <img width="30px" src="{{$ip_completa['country_flag']}}" /></td>
            </tr>
            <tr>
                <td>CAPITAL</td>
                <td>{{$ip_completa['country_capital']}}</td>
            </tr>
            <tr>
                <td>REGION</td>
                <td>{{$ip_completa['region']}}</td>
            </tr>
            <tr>
                <td>CIUDAD</td>
                <td>{{$ip_completa['city']}}</td>
            </tr>
            <tr>
                <td>ORGANIZACION</td>
                <td>{{$ip_completa['org']}}</td>
            </tr>
            <tr>
                <td>ISP</td>
                <td>{{$ip_completa['isp']}}</td>
            </tr>
        </table>
        @else
        <p class="alert alert-info text-center">INGRESO AL SISTEMA FUE POR IP LOCAL 127.0.0.1</p>
        <table class="table table-bordered table-hover table-striped table-sm">
            <tr>
                <td>FECHA</td>
                <td>{{ \Carbon\Carbon::parse($auditoria->fecha)->format('d/m/Y')}}</td>
            </tr>
            <tr>
                <td>HORA</td>
                <td>{{ \Carbon\Carbon::parse($auditoria->fecha)->format('H:i:s')}}</td>
            </tr>
            <tr>
                <td>NOMBRE DEL USUARIO QUE INGRESO</td>
                <td>{{$auditoria->usuario->name}}</td>
            </tr>
            <tr>
                <td>USUARIO QUE INGRESO</td>
                <td>{{$auditoria->usuario->user}}</td>
            </tr>
            <tr>
                <td>CORREO DEL USUARIO</td>
                <td>{{$auditoria->usuario->email}}</td>
            </tr>
        </table>
        @endif
    </div>
</div>
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <a href="{{route('auditoria.index')}}" class="btn btn-danger btn-sm float-right"><i class="fas fa-fw fa-long-arrow-alt-left"></i> Volver</a>

    </div>
</div>
@endsection
@section('scripts')
<script>
        @if(Session::has('message'))
          Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'success',
          title: '{{Session::get('message')}}',
          showConfirmButton: false,
          timer: 5000,
          timerProgressBar: true,
        })
       @endif
    </script>
@endsection
