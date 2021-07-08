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
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mt-5">
                    <a href="{{route('PAGINA DE INICIO')}}"><img class="img img-fluid" src="https://www.rpi.cl/imagenes/logo.png" /></a>
                </div>
            </div>
            
        <div class="row justify-content-center my-3">
            <div class="col-md-6">
                <div class="card" style="background-color: rgb(0,0,0,.65);">
                <div class="card-header"><i class="fas fa-fw fa-unlock-alt"></i> RESETEAR PASSWORD POR OLVIDO</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Dirección de correo</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required readonly>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nueva clave</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autofocus autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar nueva clave</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-success float-right" style="cursor:pointer;">
                                    <i class="fas fa-fw fa-unlock"></i> RESETEAR LA CLAVE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>