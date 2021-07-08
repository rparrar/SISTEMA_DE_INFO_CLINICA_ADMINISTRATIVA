@extends('layouts.app')
@section('titulo') ADMIN AUDITORIAS
@endsection
@section('content')
@if ($errors->any())
<div class="row justify-content-center">
    <div class="alert text-center">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="row">
    <h3 class="text-primary">Auditoría a Ingresos al sistema de los usuarios</h3>
    <div class="col-md-12">
        <div class="table-responsive mt-5" style="width:100%;">
            <table class="table table-bordered table-hover table-striped table-sm" id="AdminAuditoriasTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Ip conexión</th>
                        <th class="text-center">Ver</th>
                        <th class="text-center">Borrar</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function () {
      var table = $('#AdminAuditoriasTable').DataTable({
          processing: true,
          serverSide: true,
          responsive: true,
          autoWidth: false,
           "columnDefs": [
              { "visible": false, "targets": 0 }
            ],
          "language":{"url" : "{{asset('js/Spanish.json')}}"},
          "order": [[0, "asc"]],
          "lengthChange": false,
          ajax: "{{ route('obtenerauditoriasparaadministrar') }}",
          columns: [
            {data: 'id'},
            {data: 'nombre'},
            {data: 'usuario'},
            {data: 'fecha', render: function(data, type, row)
                {
                    if(type === "sort" || type === "type")
                    {
                        return data;
                    }
                    return moment(data).format("DD-MM-YYYY / HH:mm:ss");
                }
              },
            {data: 'ip'},
            {data: 'ver'},
            {data: 'borrar'},
          ]
      });
    });
  </script>
    <script>
        function confirmaBorrado(id) {
            var formueliminar = "formeli"+ id;
            Swal.fire({
            title: 'Eliminando registro de auditoría',
            text: "Esta acción no se puede deshacer",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Si, eliminar!",
            cancelButtonText: "No, cancelar",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(formueliminar).submit()
                }
            })
        }
    </script>
    <script>
        @if(Session::has('message'))
          Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'success',
          title: '{{Session::get('message')}}',
          showConfirmButton: false,
          timer: 5000,
          timerProgressBar: true,
        })
       @endif
    </script>
@endsection
