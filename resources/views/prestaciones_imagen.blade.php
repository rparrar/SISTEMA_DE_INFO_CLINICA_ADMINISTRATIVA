@extends('layouts.app')
@section('titulo') Prestaciones Imageonología @endsection
@section('content')
<header class="content__title">
    <h1>PRESTACIONES y valores IMAGEONOLOGÍA</h1>
    <small>Acá, encuentras las prestaciones de Imageonología, Scanner, Rayos, Ecografías, con sus precios</small>
</header>

<div class="row">
    <div class="col mt-2">
        <table class="table table-bordered table-hover table-striped data-table table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    {{-- <th class="font-weight-bolder text-warning">CODIGO SAP</th> --}}
                    <th class="font-weight-bolder text-warning">CODIGO IMED</th>
                    <th class="font-weight-bolder text-warning">NOMBRE PRESTACION</th>
                    <th class="font-weight-bolder text-warning">$ PRECIO HABIL</th>
                    <th class="font-weight-bolder text-warning">$ PRECIO INHABIL</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
</body>
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
          "language":{"searchPlaceholder": "Escriba un nombre o un código para buscar",
            "url" : "{{asset('js/Spanish.json')}}"},
          "order": [[0, "asc"]],
          "columnDefs": [
                { "visible": false, "targets": 0 },
            ],
          ajax: "{{ route('PRESTACIONES IMAGEN') }}",
          columns: [
              {data: 'id'},
            //   {data: 'cod_sap'},
              {data: 'cod_imed'},
              {data: 'descripcion'},
              {data: 'valor_habil', render: $.fn.dataTable.render.number('.', ',', 0, '$') },
              {data: 'valor_inhabil', render: $.fn.dataTable.render.number('.', ',', 0, '$') },
          ]
      });
    });

</script>
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
