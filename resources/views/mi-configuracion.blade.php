@extends('layouts.app')
@section('titulo')
{{ 'Mi Configuración' }}
@endsection
@section('content')
<header class="content__title">
    <h1>Pagina CONFIGURACION Sistema de Información</h1>
    <small>Esta parte se agregará a todas las páginas!</small>
</header>
<div class="row justify-content-center">
    <div class="col-xl-10">
        <div class="card mb-4 border-left-info border-bottom-info shadow">
            <div class="card-header"><h6 class="m-0 font-weight-bold"><i class="fas fa-fw fa-2x fa-user-cog"></i></h6></div>
            <div class="card-body">
                <i class="fas fa-2x fa-palette"></i> ELEGIR UN FONDO DE PANTALLA
                <div class="row mt-3">
                    <div class="text-center col-lg-2 col-md-3 col-6">
                        <a href="#" data-toggle="modal" data-target="#modalcolor1"><img class="img rounded img-fluid img-config" src="{{asset('tema/img/bg/config/1.jpg')}}" /></a>
                    </div>
                    <div class="text-center col-lg-2 col-md-3 col-6">
                        <a href="#" data-toggle="modal" data-target="#modalcolor2"><img class="img rounded img-fluid img-config" src="{{asset('tema/img/bg/config/2.jpg')}}" /></a>
                    </div>
                    <div class="text-center col-lg-2 col-md-3 col-6">
                        <a href="#" data-toggle="modal" data-target="#modalcolor3"><img class="img rounded img-fluid img-config" src="{{asset('tema/img/bg/config/3.jpg')}}" /></a>
                    </div>
                    <div class="text-center col-lg-2 col-md-3 col-6">
                        <a href="#" data-toggle="modal" data-target="#modalcolor4"><img class="img rounded img-fluid img-config" src="{{asset('tema/img/bg/config/4.jpg')}}" /></a>
                    </div>
                    <div class="text-center col-lg-2 col-md-3 col-6">
                        <a href="#" data-toggle="modal" data-target="#modalcolor5"><img class="img rounded img-fluid img-config" src="{{asset('tema/img/bg/config/5.jpg')}}" /></a>
                    </div>
                    <div class="text-center col-lg-2 col-md-3 col-6">
                        <a href="#" data-toggle="modal" data-target="#modalcolor6"><img class="img rounded img-fluid img-config" src="{{asset('tema/img/bg/config/6.jpg')}}" /></a>
                    </div>
                    <div class="text-center col-lg-2 col-md-3 col-6">
                        <a href="#" data-toggle="modal" data-target="#modalcolor7"><img class="img rounded img-fluid img-config" src="{{asset('tema/img/bg/config/7.jpg')}}" /></a>
                    </div>
                    <div class="text-center col-lg-2 col-md-3 col-6">
                        <a href="#" data-toggle="modal" data-target="#modalcolor8"><img class="img rounded img-fluid img-config" src="{{asset('tema/img/bg/config/8.jpg')}}" /></a>
                    </div>
                    <div class="text-center col-lg-2 col-md-3 col-6">
                        <a href="#" data-toggle="modal" data-target="#modalcolor9"><img class="img rounded img-fluid img-config" src="{{asset('tema/img/bg/config/9.jpg')}}" /></a>
                    </div>
                    <div class="text-center col-lg-2 col-md-3 col-6">
                        <a href="#" data-toggle="modal" data-target="#modalcolor10"><img class="img rounded img-fluid img-config" src="{{asset('tema/img/bg/config/10.jpg')}}" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>

@for ($i = 1; $i <=10; $i++)
    <div class="modal fade" id="modalcolor{{$i}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-body">
            <img style="width:100%;" src="{{asset('tema/img/bg/config/mini/'. $i . '.jpg')}}" />
          </div>
          
          <div class="modal-footer justify-content-center">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="far fa-fw fa-window-close"></i> CERRAR</button>
                    </div>
                    <div class="col-md-6">
                        <a href="fondo/{{$i}}/elegido" class="btn btn-success"><i class="fas fa-fw fa-save"></i> USAR FONDO</a>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
@endfor
@endsection

@section ('scripts')
<script>
    @if(Session::has('message'))
      Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: '{{Session::get('message')}}',
      showConfirmButton: false,
      timer: 2000,
      position:'center',
      timerProgressBar: true,
    })
    @endif

     @if(Session::has('error'))
      Swal.fire({
      icon: 'error',
      title: '{{Session::get('error')}}',
      text: 'Haz sido dirigido al cambio de clave',
      footer: 'No podrar seguir en el sistema mientras no cambies tu clave inicial',
      showCancelButton: true,
      cancelButtonColor: '#d33',
      confirmButtonText: 'OK',
      showCancelButton: false,

      timer: 5000,
      position:'center',
      timerProgressBar: true,
    })
    @endif
</script>
@endsection
