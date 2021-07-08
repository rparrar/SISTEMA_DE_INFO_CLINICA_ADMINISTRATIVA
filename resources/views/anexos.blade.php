@extends('layouts.app')
@section('titulo') Anexos @endsection
@section('content')
    <header class="content__title">
        <h1>Anexos telefonicos</h1>
        <small>Acá podras ver los anexos existentes, y en algunos la torre el piso donde correspondan</small>
    </header>

<div class="row">
    <div class="col mt-2">
        <table class="table table-bordered table-hover table-striped data-table table-sm">
            <thead>
                <tr>
                    <th>Torre</th>
                    <th>Piso</th>
                    <th>Anexo</th>
                    <th>Telefono</th>
                    <th>Nombres</th>
                    <th>Area</th>
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
          "lengthChange": false,
          "language":{"url" : "{{asset('js/Spanish.json')}}"},
          "order": [[0, "asc"]],
          ajax: "{{ route('ANEXOS') }}",
          columns: [
              {data: 'torre', name: 'torre'},
              {data: 'piso', name: 'piso'},
              {data: 'anexo', name: 'anexo'},
              {data: 'telefono', name: 'telefono'},
              {data: 'nombres', name: 'nombres'},
              {data: 'area', name: 'area'},
          ]
      });
    });
  </script>
@endsection


