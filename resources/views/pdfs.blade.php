@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <p class="text-center"><strong>DATOS PARA TRANSFERENCIA</strong></p>
            <table class="table table-bordered mb-5">
                <tbody>
                    <tr>
                        <td><b>TITULAR</b></td>
                        <td>CLINICA BUPA SANTIAGO S.A.</td>
                    </tr>
                    <tr>
                        <td><b>RUT</b></td>
                        <td>76.242.774-5</td>
                    </tr>
                    <tr>
                        <td><b>BANCO</b></td>
                        <td>ITAU</td>
                    </tr>
                    <tr>
                        <td><b>CUENTA</b></td>
                        <td>CORRIENTE</td>
                    </tr>
                    <tr>
                        <td><b>NUMERO</b></td>
                        <td>206590304</td>
                    </tr>
                    <tr>
                        <td><b>CORREO</b></td>
                        <td>{{$correo}}</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between mb-2">
                <a class="btn btn-success btn-block" href="{{ url('pdf?export=pdf') }}"><i class="fas fa-fw fa-print"></i> Imprimir</a>
            </div>
        </div>
    </div>
</div>
@endsection
