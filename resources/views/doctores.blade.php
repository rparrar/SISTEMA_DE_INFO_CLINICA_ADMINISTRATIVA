@extends('layouts.app')
@section('titulo') Doctores @endsection
@section('css-propios')
<style>
    .paginate_button
    {
        width: 3rem;
        height: 3rem;
        line-height: 3rem;
    }
</style>
@endsection
@section('content')
<header class="content__title">
    <h1>Doctores - Rut - Especialidad</h1>
    <small>Acá encuentras, los doctores existentes, su rut y especialidad</small>
    <div class="alert alert-danger mt-3 col-md-6 mx-auto text-center">
        <i class="fas fa-fw fa-exclamation-triangle"></i>
        Se reemplazaron todos los rut de los doctores, por privacidad de datos sensibles
    </div>
</header>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-sm table-bordered table-hover table-striped data-table">
                <thead>
                    <tr>
                        <th class="font-weight-bolder text-warning">Id</th>
                        <th class="font-weight-bolder text-warning">NOMBRE</th>
                        <th class="font-weight-bolder text-warning">RUT</th>
                        <th class="font-weight-bolder text-warning">ESPECIALIDAD</th>
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
          "columnDefs": [
                { "visible": false, "targets": 0 }
            ],
            "language":{"searchPlaceholder": "Escriba un nombre, rut, o especialidad para buscar",
            "url" : "{{asset('js/Spanish.json')}}"},          "order": [[0, "asc"]],
          ajax: "{{ route('DOCTORES') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'nombre', name: 'nombre'},
              {data: 'rut', name: 'rut'},
              {data: 'especialidad', name: 'especialidad'},
          ]
      });
    });
  </script>
@endsection
