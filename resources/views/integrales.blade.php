@extends('layouts.app')
@section('titulo') Códigos Integrales @endsection
@section('content')
<header class="content__title">
    <h1>Códigos Integrales, descripcion SAP e IMED</h1>
    <small>Acá verás los tipos de codigos, para colocar en SAP y vender bonos en IMED</small>
</header>

<div class="row justify-content-center">
    <div class="col-md-6 mt-2">
        <table class="table table-bordered table-hover table-striped data-table table-sm">
            <thead>
                <tr>
                    <th class="font-weight-bolder text-warning">Id</th>
                    <th class="font-weight-bolder text-warning">CÓDIGO SAP</th>
                    <th class="font-weight-bolder text-warning">CÓDIGO IMED</th>
                    <th class="font-weight-bolder text-warning">DESCRIPCION</th>
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
          "searching": false,
          "lengthChange": false,
          "language":{"url" : "{{asset('js/Spanish.json')}}"},
          "order": [[0, "asc"]],
          "columnDefs": [
                { "visible": false, "targets": 0 },
                { "orderable": false, "targets": 1 },
                { "orderable": false, "targets": 2 },
                { "orderable": false, "targets": 3 },

            ],
          ajax: "{{ route('CODIGOS INTEGRALES') }}",
          columns: [
              {data: 'id'},
              {data: 'cod_sap'},
              {data: 'cod_imed'},
              {data: 'descripcion'},
             // {data: 'valor', render: $.fn.dataTable.render.number('.', ',', 0, '') },
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
