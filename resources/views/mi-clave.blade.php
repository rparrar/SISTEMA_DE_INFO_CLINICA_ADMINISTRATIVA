@extends('layouts.app')
@section('titulo')
{{ 'Mi Clave' }}
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-xl-8">
        <div class="card mb-4 border-left-info border-bottom-info shadow">
            <div class="card-header"><h6 class="m-0 font-weight-bold"><i class="fas fa-fw fa-user-cog"></i> CAMBIAR MI CLAVE DE ACCESO</h6></div>
            <div class="card-body">
                <form method="POST" action="{{ url('actualizarclave') }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="small mb-1" for="password"><i class="fas fa-fw fa-key"></i> NUEVA CLAVE<span class="text-danger"></span></label>
                            <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" value= "{{old('password')}}">
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="form-group col-md-12">
                            <label class="small mb-1" for="password_confirm"><i class="fas fa-fw fa-check-double"></i><i class="fas fa-fw fa-lock"></i> CONFIRMACION DE NUEVA CLAVE</label>
                            <input class="form-control @error('password') is-invalid @enderror" id="password-confirm" name="password_confirmation" type="password" value="{{old('password_confirmation')}}">
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                    </div>
                    <button class="btn btn-success float-right" type="submit" style="cursor:pointer;"><i class="fas fa-fw fa-save"></i> CAMBIAR MI CLAVE</button>
                    <a href="{{url('mi-perfil')}}"><button class="btn btn-danger float-left" type="button" style="cursor:pointer;"><i class="fas fa-fw fa-times"></i> CANCELAR</button></a>

                </form>
            </div>
        </div>
    </div>
</div>
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
      footer: 'No podrar seguir en el sistema mientras no cambies tu clave',
      showCancelButton: true,
      cancelButtonColor: '#d33',
      confirmButtonText: 'OK',
      showCancelButton: false,
      position:'center',
      
    })
    @endif

</script>

@endsection
