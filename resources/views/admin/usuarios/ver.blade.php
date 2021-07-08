@extends('layouts.app')
@section('titulo')
{{ 'Admin - Usuarios - Ver' }}
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <table class="table table-bordered table-hover table-striped table-sm">
            <tbody>
                <tr>
                    <td  colspan="2" class="text-primary text-center"><h5 class="m-auto"> VIENDO USUARIO => {{$usuario->name}}</h5></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td>{{$usuario->email}}</td>
                </tr>

                <tr>
                    <td>Teléfono</td>
                    <td>{{$usuario->telefono}}</td>
                </tr>

                <tr>
                    <td>Area</td>
                    <td>{{$usuario->area}}</td>
                </tr>

                <tr>
                    <td>Permisos</td>
                    <td>{{$usuario->permisos}}</td>
                </tr>

                <tr>
                    <td>Activo?</td>
                    <td>
                        @if ($usuario->activo == "SI")
                            <i class="fas fa-fw fa-check text-success"></i>
                        @else
                            <i class="fas fa-fw fa-times text-danger"></i>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <a href="{{route('usuario.index')}}" class="btn btn-primary btn-sm float-right"><i class="fas fa-fw fa-long-arrow-alt-left"></i> Volver</a>
        <a href="{{route('reseteaClaveUsuario', $id)}}" class="btn- btn-danger btn-sm float-left"><i class="fas fa-fw fa-key"></i> Resetear Clave</a>
        
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