@extends('layouts.app')
@section('titulo')
Descargas de Documentos
@endsection
@section('content')
<header class="content__title">
        <h1>descarga de documentos</h1>
        <small>Acá podras visualizar y descargar los distintos archivos que se utilizan en el área.</small>
    </header>
<div class="row justify-content-center">
    <div class="col-xl-5">

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ARCHIVOS EDITABLES ( PARA RELLENAR ACA MISMO Y DESPUES IMPRIMIR )
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="list-group">
                            @foreach ($descargas as $item)
                                @if ($item->tipo == 'EDITABLE')
                                    <a href="#" rel="archivos/{{$item->url}}" class="list-group-item">{{$item->nombre}}</a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ARCHIVOS TRADICIONALES (VER-IMPRIMIR)
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="list-group">
                            @foreach ($descargas as $item)
                                @if ($item->tipo == 'NORMAL')
                                    <a href="#" rel="archivos/{{$item->url}}" class="list-group-item">{{$item->nombre}} </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xl-7">
        <div class="embed-responsive embed-responsive-1by1"><iframe id="iframe" class="embed-responsive-item" src="archivos/base.html" allowfullscreen></iframe></div>
    </div>

</div>
@endsection
@section ('scripts')
<script>
$(document).ready(function() {
    $('a').click(function () {
        var url = $(this).attr('rel');
        $('#iframe').attr('src', url);

    });
});
</script>
@endsection
