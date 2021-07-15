@extends('layouts.app')
@section('titulo') Valores dia cama @endsection
@section('content')
<header class="content__title">
    <h1>valoreS dia cama</h1>
    <small>Acá encuentras los valores de los tipos de cama existentes</small>
</header>

<div class="row justify-content-center">
    <div class="col-md-6">
        <table class="table table-bordered table-hover table-striped data-table table-sm">
            <thead>
                <tr>
                    <th class="font-weight-bolder text-warning">ID</th>
                    {{-- <th class="font-weight-bolder text-warning">CODIGO SAP</th> --}}
                    <th class="font-weight-bolder text-warning">TIPO DE HABITACION / CAMA</th>
                    <th class="font-weight-bolder text-warning">VALOR</th>
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
          "paging": false,
          "searching":false,
          "lengthChange": false,
          "language":{"url" : "{{asset('js/Spanish.json')}}"},
          "order": [[0, "asc"]],
          "columnDefs": [
                { "visible": false, "targets": 0 },
//                { "orderable": false, "targets": 1 },
  //              { "orderable": false, "targets": 3 },

            ],
          ajax: "{{ route('DIAS_CAMA') }}",
          columns: [
              {data: 'id'},
            //   {data: 'cod_sap'},
              {data: 'descripcion'},
              {data: 'valor', render: $.fn.dataTable.render.number('.', ',', 0, '$') },
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
