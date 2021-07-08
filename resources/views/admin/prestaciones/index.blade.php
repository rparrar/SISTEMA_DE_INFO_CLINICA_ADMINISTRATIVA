@extends('layouts.app')
@section('titulo') ADMIN PRESTACIONES
@endsection
@section('css-propios')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
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

<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <a class="btn btn-primary mb-3 btn-sm" data-toggle="collapse" href="#formulario-agrega" role="button" aria-expanded="false">
            <i class="fas fa-fw fa-plus"></i> Agregar una prestación
        </a>
    </div>
</div>

<div class="row justify-content-center">
    <div class="collapse" id="formulario-agrega">
        <div class="card">
            <div class="card-body border border-primary rounded p-2">
                <div class="col-lg-12">
                    <form method="post" class="formulario-agrega-prestacion" action ="{{route('prestacion.store')}}">
                        {{ csrf_field() }}
                        <div class="row">
                          <!-- cod - guarismo - descripcion - valor_habil - valor_inhabil -->
                        <div class="form-group col-lg-3"><label for="cod_sap">                 CODIGO SAP</label>               <input type="text" name ="cod_sap" id = "cod_sap" class="form-control form-control-sm text-right" autofocus value="{{old('cod_sap')}}" onkeyup="mayusculasCod()"></div>
                        <div class="form-group col-lg-3"><label for="cod_imed">                 CODIGO IMED</label>               <input type="text" name ="cod_imed" id = "cod_imed" class="form-control form-control-sm text-right" autofocus value="{{old('cod_imed')}}" onkeyup="mayusculasCod()"></div>
                        <div class="form-group col-lg-2"><label for="guarismo">            GUARISMO</label>             <input type="number" name ="guarismo" class="form-control form-control-sm text-center" value="{{old('guarismo')}}"></div>
                        <div class="form-group col-lg-4"><label for="descripcion">         DESCRIPCION</label>          <input type="text" name = "descripcion" id ="descripcion" class="form-control form-control-sm text-center" onkeyup="mayusculas()" value="{{old('descripcion')}}"></div>
                        <div class="form-group col-lg-3"><label for="valor_habil">         VALOR HABIL ($)</label>      <input type="text" name = "valor_habil" id = "valor_habil" class="form-control form-control-sm text-right" onkeyup="multiplicar()" value="{{old('valor_habil')}}"></div>
                        <div class="form-group col-lg-3"><label for="valor_inhabil">       VALOR INHABIL ($)</label>    <input type="text" name = "valor_inhabil" id = "valor_inhabil" class="form-control form-control-sm text-right" value="{{old('valor_inhabil')}}"></div>
                        <div class="form-group col-lg-3"><button class="btn btn-success btn-sm" type="submit" style="margin-top: 32px;"><i class="fas fa-plus"></i> AGREGAR</button></div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col">
        <div class="table-responsive mt-5" style="width:100%;">
            <table class="table table-bordered table-hover table-striped" id="AdminPrestacionesTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cod. SAP</th>
                        <th>Cod. IMED</th>
                        <th>Guar.</th>
                        <th>Descripcion</th>
                        <th>$ Habil</th>
                        <th>$ Inhabil</th>
                        <th class="text-center">Ver</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Borrar</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
      var table = $('#AdminPrestacionesTable').DataTable({
          processing: true,
          serverSide: true,
          responsive: true,
          autoWidth: false,
          "columnDefs": [
                { "orderable": false, "targets": 7 },
                { "orderable": false, "targets": 8 },
                { "orderable": false, "targets": 9 },

                { "visible": false, "targets": 0 }
            ],
          "language":{"url" : "{{asset('js/Spanish.json')}}"},
          "order": [[0, "asc"]],
          ajax: "{{ route('obtenerprestacionesparaadministrar') }}",
          columns: [
            {data: 'id'},
            {data: 'cod_sap'},
            {data: 'cod_imed'},
            {data: 'guarismo'},
            {data: 'descripcion'},
            {data: 'valor_habil'},
            {data: 'valor_inhabil'},
            {data: 'ver'},
            {data: 'editar'},
            {data: 'borrar'},
          ]
      });
    });
  </script>
    <script>
        function confirmaBorrado(id) {
            var formueliminar = "formeli"+ id;
            Swal.fire({
            title: 'Eliminando prestación',
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
        function multiplicar(){
          habil = document.getElementById("valor_habil").value;
          recargo = 1.5;
          inhabil = habil * recargo;
          document.getElementById("valor_inhabil").value = inhabil;
        }

        function mayusculas() {
            var x = document.getElementById("descripcion");
            x.value = x.value.toUpperCase();
        }

         function mayusculasCod() {
            var xcod = document.getElementById("cod_sap");
            xcod.value = xcod.value.toUpperCase();
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
