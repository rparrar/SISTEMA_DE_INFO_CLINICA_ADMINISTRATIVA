@extends('layouts.app')
@section('titulo')
{{ 'Inicio' }}
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8 col-md-8">
        <div class="card">
            
            <div class="card-body">
                <div class="text-center">
                    <h5>BIENVENIDO(A) AL SISTEMA DE INFORMACION RPI</h5>
                    <img class="img img-fluid img-inicio" src="img/fondo-inicio2.jpg" alt="fondo inicio">
                </div>
                <p class="text-center mt-2">En este sistema, podrás descargar formularios de seguros, ver los anexos existentes, descargar archivos varios para hospitalizar, y varias cosas más.</p>
            </div>
            <div class="card-footer">
                <p class="text-light text-center">En el menú de la izquierda, están las diversas utilidades para que las puedas revisar.</p>
                <p class="text-center text-light"><i class="fas fa-fw fa-hand-point-left fa-4x"></i></p>
            </div>
        </div>
    </div>
</div>
@endsection
