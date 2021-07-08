@extends('layouts.app')
@section('titulo') Descargar cualquier plan Cruz Blanca @endsection
@section('content')
<header class="content__title">
    <h1>Descargar cualquier plan de Cruz Blanca</h1>
    <small>Acá podras descargar cualquier plan, teniendo el código de este</small>
</header>

<div class="row justify-content-center">
    <div class="col-xl-5">
        <div class="card">
            <div class="card-body text-center">
                    @if(Session::has('urlplan'))
                        <h4 class="text-warning">PLAN {{Session::get('codigoplan')}} ENCONTRADO!!</h4>
                        <a href="{{Session::get('urlplan')}}" class="btn btn-success"><i class="fas fa-fw fa-cloud-download-alt"></i> DESCARGAR PDF DEL PLAN</a><br>
                        <a href="{{route('DESCARGAR UN PLAN CRUZ BLANCA')}}" class="btn btn-danger my-3"><i class="fas fa-fw fa-hand-point-left"></i> VOLVER</a>
                    @else    
                        <p>Ejemplos de códigos de plan (imed - cuenta medica electrónica)</p>
                        <img class="img img-fluid my-2" src="{{('img/ejemplo11.jpg')}}" />
                        <img class="img img-fluid" src="{{('img/ejemplo22.jpg')}}" />
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <form action="{{route('DESCARGAR PLAN CRUZ BLANCA')}}">
                                  <div class="form-group">
                                    <label for="codigoplan"><h5 class="mt-4">Ingrese el código del plan</h5></label>
                                    <input type="text" required class="form-control text-center" id="codigoplan" name="codigoplan" placeholder="CODIGO DEL PLAN EJ. 2CB5C00A20">
                                    <small id="codigoayuda" class="form-text text-muted">Debe ingresar el código del plan de la isapre, ej. 2CB5C00A20</small>
                                  </div>
                                  <button type="submit" class="btn btn-primary my-3" style="cursor:pointer;"><i class="fas fa-search"></i> BUSCAR PLAN</button>
                                </form>
                            </div>
                        </div>
                    @endif
            </div>
            <div class="card-footer">
                <h6 class="text-center"><i class="fas fa-fw fa-info-circle"></i> EL ARCHIVO SERÁ DESCARGADO COMO PDF, DIRECTAMENTE AL COMPUTADOR</h6>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
@section('scripts')

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
