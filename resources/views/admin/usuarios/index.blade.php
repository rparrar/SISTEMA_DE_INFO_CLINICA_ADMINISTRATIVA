@extends('layouts.app')
@section('titulo') ADMIN USUARIOS
@endsection
@section('css-propios')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
@endsection
@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="text-center mb-3">  
            <a class="btn btn-success" data-toggle="collapse" href="#agregausuario" role="button"><i class="fas fa-fw fa-plus"></i> Agrega usuario</a>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5">      
                <div class="collapse multi-collapse collapse {{ ($errors->any()) ? 'show' : '' }}" id="agregausuario">
                    <div class="card card-body">
                        @if ($errors->any())
                        <div class="row justify-content-center">
                            <h5 class="text-danger"><i class="fas fa-exclamation-triangle"></i> EXISTEN ERRORES! VERIFIQUE!</h5>
                        </div>
                        @endif

                        <div class="col-md-12">
                            <form method="POST" action="{{route('usuario.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value={{old('email')}}>
                                        @error('email')
                                            <div class="invalid-feedback text-center">
                                                {{ $errors->first('email') }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value={{old('name')}}>
                                        @error('name')
                                            <div class="invalid-feedback text-center">
                                                {{ $errors->first('name') }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="area">Area de Trabajo</label>
                                        <input type="text" class="form-control @error('area') is-invalid @enderror" name="area" id="area" value={{old('area')}}>
                                        @error('area')
                                            <div class="invalid-feedback text-center">
                                                {{ $errors->first('area') }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="telefono">Teléfono</label>
                                        <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" id="telefono" value={{old('telefono')}}>
                                        @error('telefono')
                                            <div class="invalid-feedback text-center">
                                                {{ $errors->first('telefono') }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="user">Usuario</label>
                                        <input type="text" name="user" class="form-control @error('user') is-invalid @enderror" id="user" value={{old('user')}}>
                                        @error('user')
                                            <div class="invalid-feedback text-center">
                                                {{ $errors->first('user') }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2 text-center">
                                        <label for="option1">Permisos del Usuario</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" checked type="radio" name="seleccionapermisos" id="usuario" value="USUARIO">
                                            <label class="form-check-label" for="usuario">USUARIO</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="seleccionapermisos" id="administrador" value="ADMINISTRADOR">
                                            <label class="form-check-label" for="administrador">ADMINISTRADOR</label>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-fw fa-save"></i> Grabar datos nuevo usuario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col">
        <div class="table-responsive mt-5" style="width:100%;">
            <table class="table table-bordered table-hover table-striped" id="AdminUsuariosTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Area</th>
                        <th>Permisos</th>
                        <th>Activo?</th>
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
      var table = $('#AdminUsuariosTable').DataTable({
          processing: true,
          serverSide: true,
          responsive: true,
          autoWidth: false,
          "columnDefs": [
                { "visible": false, "targets": 0 },
                { "orderable": false, "targets": 8 },
                { "orderable": false, "targets": 9 },
                { "orderable": false, "targets": 10 }
            ],
          "language":{"url" : "{{asset('js/Spanish.json')}}"},
          "order": [[0, "asc"]],
          ajax: "{{ route('obtenerusuariosparaadministrar') }}",
          columns: [
            {data: 'id'},
            {data: 'name'},
            {data: 'user'},
            {data: 'email'},
            {data: 'telefono'},
            {data: 'area'},
            {data: 'permisos'},
            {data: 'activo'},
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
            title: 'Eliminando usuario',
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
        function mayusculas() {
            var x = document.getElementById("descripcion");
            x.value = x.value.toUpperCase();
        }
    </script>
    <script>
        @if(Session::has('message'))
          Swal.fire({
          icon: 'success',
          title: '{{Session::get('nombre')}}',
          text : '{{Session::get('titulo')}} - {{Session::get('message')}}',
          showConfirmButton: true,
          
        })
       @endif
    </script>
@endsection
