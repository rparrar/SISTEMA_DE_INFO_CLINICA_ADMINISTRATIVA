<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1,user-scalable=0">
    <link rel="stylesheet" href="{{asset('tema/css/app.min.css')}}">
</head>
    <body data-sa-theme="7">
        <div class="login">
            <div class="login__block active" id="l-login" style="max-width:400px;background-color: rgba(0,0,0,.35);">
                <div class="bg-dark">
                    <img class="img-fluid my-3" src="https://www.rpi.cl/imagenes/logo.png" />
                </div>
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Bienvenido al Sistema de infomación RPI en su Version 4.0<br>Ingrese su correo y contraseña
                </div>

                <div class="login__block__body">
                <form id="formulario-login" class="user" method="POST" action="{{route('login') }}">
                      {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <input style="border-radius: 5px;padding: 10px;" id="email" name="email" type="email" class="form-control form-control-user" placeholder="Correo..." value="{{Request::old('email')}}">
                        @if ($errors->has('email'))
                        <small class="text-yellow"><strong>{{ $errors->first('email') }}</strong></small>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <input style="border-radius: 5px;padding: 10px;" type="password" name="password"id="password" class="form-control form-control-user" placeholder="Clave">
                        @if ($errors->has('password'))
                            <small class="text-yellow"><strong>{{ $errors->first('password') }}</strong></small>
                        @endif
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                      </div>
                    </div>
                     <div>
                        <button type="submit" class="boton-login btn btn-block btn-success mb-3" style="cursor:pointer;">
                            <i class="fas fa-fw fa-sign-in-alt"></i> INGRESAR
                        </button>
                     </div>

                     <div>
                        <a href="{{url('password/reset')}}" class="mb-3 btn btn-block btn-danger"><i class="fas fa-fw fa-unlock-alt"></i> OLVIDASTE TU CLAVE?</a>
                     </div>
                     <div>
                        <button type="button" class="mb-3 btn btn-block btn-primary" style="cursor:pointer;" data-toggle="modal" data-target="#modalSolicitaClave"><i class="fas fa-fw fa-lock"></i> SOLICITAR ACCESO AL SISTEMA</button>
                     </div>

                  </form>
                </div>
            </div>
        </div>


        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->
        <div class="modal fade" id="modalSolicitaClave" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-fw fa-lock"></i> SOLICITANDO ACCESO AL SISTEMA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <span class="text-light">Para solicitar una clave de acceso, debes escribir un correo con los siguientes datos :</span>
                <hr>
                <span class="text-light">
                    <li><i class="fas fa-fw fa-at"></i> Correo (idealmente correo corporativo)</li>
                    <li><i class="fas fa-fw fa-id-card"></i> Nombre</li>
                    <li><i class="fas fa-fw fa-phone"></i> Teléfono (puede ser celular o anexo)</li>
                    <li><i class="fas fa-fw fa-building"></i> Unidad donde te desempeñas</li>
                </span>
                <hr>
                <center>a los correos<br>  <a href="mailto:roberto@rpi.cl">roberto@rpi.cl</a> </center>
                <span class="text-light"><hr>Luego de esto, la cuenta será creada, y serán enviados los detalles de acceso, más una clave provisoria, al correo indicado<br></span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal"><i class="fas fa-check"></i> OK, entiendo</button>

              </div>
            </div>
          </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/239c4e9305.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
       $("#formulario-login").submit(function () {
           $(".boton-login").attr("disabled", true);
           return true;
       });
    });
</script>
</body>
</html>

