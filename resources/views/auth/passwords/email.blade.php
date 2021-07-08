<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('tema/css/app.min.css')}}">
    <script src="https://kit.fontawesome.com/239c4e9305.js" crossorigin="anonymous"></script>

</head>

    <body data-sa-theme="2">
    <div class="container">


        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-center">

                    <a href="{{route('PAGINA DE INICIO')}}"><img class="img img-fluid mt-3" src="https://www.rpi.cl/imagenes/logo.png" /></a>

                        <h5><i class="fas fa-unlock-alt mt-2"></i> OLVIDO DE CLAVE, INGRESAR CORREO </h5>
                        <div class="alert alert-info mt-2">Configurado en driver LOG, el email con el enlace quedará en storage/logs/laravel.log</div>

            </div>
                        </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form id ="formulario_olvido" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Dirección de correo</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <a class="btn btn-danger float-left" href="{{route('PAGINA DE INICIO')}}"><i class="fas fa-fw fa-undo-alt"></i> CANCELAR</a>
                                    <button type="submit" class="boton_olvido btn btn-primary float-right" style="cursor:pointer;">
                                        <i class="fas fa-fw fa-envelope"></i> Enviar enlace de recuperación al correo
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
           $("#formulario_olvido").submit(function () {
               $(".boton_olvido").attr("disabled", true);
               return true;
           });
        });
    </script>
    </body>
</html>
