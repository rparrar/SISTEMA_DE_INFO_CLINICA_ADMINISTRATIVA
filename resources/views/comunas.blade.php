@extends('layouts.app')
@section('titulo') Comunas @endsection
@section('css-propios')
<style>
    .tabla-con-mayusculas{
        text-transform: uppercase !important;
    }
</style>
@endsection
@section('content')
<header class="content__title">
    <h1>detalle de Comunas con codigo</h1>
    <small>Esta parte tiene en detalle de las comunas, junto a su código, para ingresar en SAP</small>
</header>
<div class="row">
    <div class="col">
        <table class="table table-sm table-bordered table-hover table-striped tabla-con-mayusculas data-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Codigo</th>
                    <th>Comuna</th>
                    <th>Provincia</th>
                    <th>Region</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(function () {
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          responsive: true,
          autoWidth: false,
          "lengthChange": false,
         "language":{"url" : "{{asset('js/Spanish.json')}}"},
          "order": [[0, "asc"]],
          "columnDefs": [
                { "visible": false, "targets": 0 },
            ],
          ajax: "{{ route('COMUNAS') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'codigo', name: 'codigo'},
              {data: 'comuna', name: 'comuna'},
              {data: 'provincia', name: 'provincia'},
              {data: 'region', name: 'region'},
          ]
      });
    });
  </script>
@endsection
