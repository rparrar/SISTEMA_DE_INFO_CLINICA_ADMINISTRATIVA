@extends('layouts.app')
@section('titulo') Planes Cruz Blanca @endsection
@section('content')
<header class="content__title">
    <h1>Planes CRUZ BLANCA integrales, copago fijo, y planes normales</h1>
    <small>En esta sección, encontrarás los planes Cruz Blanca integrales, o de copago fijo, y los planes sin este convenio, si haces click en cada linea, podrás ver el pdf, para imprimir o descargar a tu pc.
    <br>Los pdf, tendrán la zona demarcada donde se refiere al copago de plan integral.</small>
</header>
<div class="row">
    <div class="table-responsive col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
        <table class="table table-bordered table-hover table-striped data-table table-sm" style="cursor:pointer";>
            <thead>
                <tr>
                    <th class="text-warning">ID</th>
                    <th class="text-warning">CODIGO</th>
                    <th class="text-warning">NOMBRE</th>
                    <th class="text-warning">ISAPRE</th>
                    <th class="text-warning">INTEGRAL BUPA?</th>
                    <th class="text-warning">VER PDF</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <div class="col-md-6 my-5">
        <div class="embed-responsive embed-responsive-1by1"><iframe id="iframe" class="embed-responsive-item" width="100px" src="archivos/base.html" allowfullscreen></iframe></div>
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
          "language":{"searchPlaceholder": "Escriba un nombre, código, o isapre para buscar",
          "url" : "{{asset('js/Spanish.json')}}"},
          "order": [[2, "asc"]],
          "columnDefs": [
                { "visible": false, "targets": 0 },
                { "orderable": false, "targets": 4 },
            ],
          ajax: "{{ route('PLANES INTEGRALES') }}",
          columns: [
              {data: 'id'},
              {data: 'codigo_plan'},
              {data: 'nombre_plan'},              
              {data: 'isapre'},
              {data: 'esintegral'},
              {data: 'planenpdf'},
          ]
      });
        $('.data-table').on('click', 'tr', function () {
            var data = table.row( this ).data();
            $('#iframe').attr('src', '{{asset('archivos/planes_cruzblanca')}}'+ '/' + data['codigo_plan'] +'.pdf');
            return false;
        } );
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


