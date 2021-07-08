@extends('layouts.app')
@section('titulo')
{{ 'Seguros Médicos' }}
@endsection
@section('content')
<header class="content__title">
    <a class="btn btn-danger btn-sm float-right my-2" href="#" data-toggle="modal" data-target="#info-seguro-malo"><i class="fas fa-exclamation-circle"></i> Informar formulario con error</a>
    <h1>Formularios seguros de salud</h1>
    <small>Acá puedes visualizar, imprimir, y descargar, formularios de las distintas aseguradoras.</small>

</header>
<div class="card">
    <div class="row justify-content-center">
    
        <div class="col-xl-6">
            <div class="list-group">
                @foreach ($seguros as $item)
                    @if ($item->tipo == "ARCHIVO")
                        <a href="#" rel="https://www.rpi.cl/cbs/archivos/seguros/{{$item->url}}" class="list-group-item" data-toggle="tooltip" title="<img class='rounded mx-auto d-block img-thumbnail' src='{{$item->foto}}' />">{{$item->nombre}}</a>
                    @else
                        <a href="#" logo = "{{$item->foto}}" nombre = "{{$item->nombre}}" tipo="{{$item->tipo}}" rel2="{{$item->url}}" class="list-group-item"
                        data-toggle="tooltip" title="<img class='rounded mx-auto d-block img-thumbnail' src='{{$item->foto}}' />">{{$item->nombre}} - <i class="fas fa-external-link-alt"></i> (ENLACE EXTERNO - FORMULARIO CON FOLIO)</a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-xl-6">
            <div class="embed-responsive embed-responsive-1by1"><iframe id="iframe" class="embed-responsive-item" width="100px" src="archivos/base.html" allowfullscreen></iframe></div>
        </div>
    </div>
</div>
<div class="modal fade" id="info-seguro-malo" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Informar acceso a seguro con problemas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Acá podrás informar cuando haya problema con un enlace a un Seguro, para que sea reparado.
        </p>
        <h4 class="text-danger text-center">En desarrollo</h4>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-success" data-dismiss="modal"><i class="fas fa-thumbs-up fa-2x"></i></a>
        <!--<button type="button" class="btn btn-success">Enviar error</button>-->
      </div>
    </div>
  </div>
</div>

@endsection
@section ('scripts')
<script>
    $('a[data-toggle="tooltip"]').tooltip({
    placement: 'auto',
    trigger : 'hover',
    html: true
    });

    $(document).ready(function() {
        $('a').click(function () {
            var url = $(this).attr('rel');
            var tipo = $(this).attr('tipo');
            var nombre = $(this).attr('nombre');
            var logo = $(this).attr('logo');
            $('#iframe').attr('src', url);

        if (tipo == "URL")
        {
            var url2 = $(this).attr('rel2');
            Swal.fire({
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'NO',
                cancelButtonColor: '#dc3545',
                confirmButtonColor: '#28a745',
                footer: '<center>CLICK EN OK <br>' + ' Y EL SEGURO ELEGIDO = ' + nombre + ' <br>SE ABRIRA EN UNA NUEVA VENTANA</center>',
                imageUrl: logo,
                allowOutsideClick : false,
                allowEscapeKey : false,
                reverseButtons :true,

            }).then((result) => {
              if (result.value) {window.open(url2 , '_blank')}
    })
    }
    });
    });
</script>
@endsection
