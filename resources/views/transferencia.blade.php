@extends('layouts.app')
@section('titulo') Datos transferencia @endsection
@section('content')
<header class="content__title">
    <h1>Imprimir datos Transferencia Bancaria</h1>
    <small>Acá podrás imprimir los datos, para ser entregados al paciente, para que pueda hacer la transferencia bancaria</small>
    <div class="alert alert-danger mt-3 col-md-6 mx-auto text-center">
        <i class="fas fa-fw fa-exclamation-triangle"></i>
        GENERA UN PDF CON LOS DATOS, FUERON CAMBIADOS POR PRIVACIDAD
    </div>
</header>

<div class="row justify-content-center">
    <div class="col-xl-5">
        <div class="card">
            <div class="card-header">
                DATOS PARA TRANSFERENCIA
            </div>
            <div class="card-body text-center">
                <div class="row justify-content-center">
                    <div class="col-md-10">
    <table class="table table-bordered table-sm table-stripped">
        <tbody>
            <tr>
                <td><b>TITULAR</b></td>
                <td>POSTA LO MATTA S.A.</td>
            </tr>
            <tr>
                <td><b>RUT</b></td>
                <td>72.624.369-K</td>
            </tr>
            <tr>
                <td><b>BANCO</b></td>
                <td>ESTADO</td>
            </tr>
            <tr>
                <td><b>CUENTA</b></td>
                <td>RUT</td>
            </tr>
            <tr>
                <td><b>NUMERO</b></td>
                <td>72624369</td>
            </tr>
            <tr>
                <td><b>CORREO</b></td>
                <td>{{Auth::user()->email}}<br>
                <i class="small text-warning">IDENTIFICA AL USUARIO LOGUEADO PARA QUE LE LLEGUE CORREO</i>
            </td>
            </tr>
        </tbody>
    </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ url('pdf?export=pdf') }}" class="btn btn-success float-right" target="_blank"><i class="fas fa-fw fa-print"></i> IMPRIMIR DATOS</a>
                  <a href="{{ url('/') }}" class="btn btn-danger float-left"><i class="fas fa-fw fa-undo"></i> VOLVER</a>

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script>
    @if(Session::has('message'))
      Swal.fire({
      icon: 'success',
      title: '{{Session::get('message')}}',
      showConfirmButton: true,
      timer: 5000,
      timerProgressBar: true,
    })
   @endif
</script>


@endsection
