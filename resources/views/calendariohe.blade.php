@extends('layouts.app')
@section('titulo') Calendario corte Horas Extra @endsection
@section('content')
<header class="content__title">
    <h1>Calendario con fechas de corte de Horas Extra</h1>
    <small>Acá podrás revisar las distintas fechas de corte de horas extra, durante el año 2021</small>
</header>

<div class="row justify-content-center">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                FECHAS DE CORTE HORAS EXTRA
            </div>
            <div class="card-body text-center">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <table class="table table-bordered table-hover table-striped table-sm text-center">
                            <thead>
                                <tr>
                                    <th class="text-center"><b><h5>MES</b></h5></th>
                                    <th class="text-center"><b><h5>DESDE</b></h5></th>
                                    <th class="text-center"><b><h5>HASTA</b></h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ENERO</td>
                                    <td>14-12-2020</td>
                                    <td>10-01-2021</td>
                                </tr>
                                <tr>
                                    <td>FEBRERO</td>
                                    <td>11-01-2021</td>
                                    <td>14-02-2021</td>
                                </tr>
                                <tr>
                                    <td>MARZO</td>
                                    <td>15-02-2021</td>
                                    <td>14-03-2021</td>
                                </tr>
                                <tr>
                                    <td>ABRIL</td>
                                    <td>15-03-2021</td>
                                    <td>11-04-2021</td>
                                </tr>
                                <tr>
                                    <td>MAYO</td>
                                    <td>12-04-2021</td>
                                    <td>09-05-2021</td>
                                </tr>
                                <tr>
                                    <td>JUNIO</td>
                                    <td>10-05-2021</td>
                                    <td>13-06-2021</td>
                                </tr>
                                <tr>
                                    <td>JULIO</td>
                                    <td>14-06-2021</td>
                                    <td>11-07-2021</td>
                                </tr>
                                <tr>
                                    <td>AGOSTO</td>
                                    <td>12-07-2021</td>
                                    <td>08-08-2021</td>
                                </tr>
                                <tr>
                                    <td>SEPTIEMBRE</td>
                                    <td>09-08-2021</td>
                                    <td>12-09-2021</td>
                                </tr>
                                <tr>
                                    <td>OCTUBRE</td>
                                    <td>13-09-2021</td>
                                    <td>10-10-2021</td>
                                </tr>
                                <tr>
                                    <td>NOVIEMBRE</td>
                                    <td>11-10-2021</td>
                                    <td>14-11-2021</td>
                                </tr>
                                <tr>
                                    <td>DICIEMBRE</td>
                                    <td>15-11-2021</td>
                                    <td>12-12-2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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