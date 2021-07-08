@extends('layouts.app')
@section('titulo')
Mi Perfil - {{Auth::user()->name}}
@endsection
@section('content')
<div class="row">
    <div class="col-xl-4 mb-2">
        <!-- Profile picture card-->
        <div class="card">
            <div class="card-header"><h6 class="m-0 font-weight-bold text-light"><i class="fas fa-fw fa-camera-retro"></i> MI IMAGEN</h6></div>
            <div class="card-body text-center">
                @if (Auth::user()->sexo == "F")
                    <img class="img img-fluid rounded-circle mb-2" src="{{asset('tema/demo/img/profile-pics/1.jpg')}}" alt="Imagen del perfil">                                
                @else
                    <img class="img img-fluid rounded-circle mb-2" src="{{asset('tema/demo/img/profile-pics/2.jpg')}}" alt="Imagen del perfil">                                
                @endif
                <form enctype="multipart/form-data" method="POST" action="{{ url('actualizardatos') }}">
                {{--<input type="file" name="avatar">---}}
                
                
                <div class="small font-italic text-muted mb-4">JPG o PNG de no mas de 5 MB</div>
                <button class="btn btn-success" style="cursor:pointer;border-radius:5px;" type="button" onclick="alert('En Desarrollo')"><i class="fas fa-fw fa-file-upload"></i> SUBIR IMAGEN</button>
            </div>
        </div>
    </div>
    <div class="col-xl-8 mb-2">
        <div class="card border-left-info border-bottom-info shadow">
            <div class="card-header"><h6 class="m-0 font-weight-bold text-light"><i class="fas fa-fw fa-user-cog"></i> MIS DETALLES</h6></div>
            <div class="card-body">
                
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="small mb-1" for="email"><i class="text-light fas fa-fw fa-envelope"></i> Correo electrónico</label>
                            <input style="cursor:not-allowed;" class="form-control" id="email" name="email" type="email" value="{{Auth::user()->email}}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="small mb-1" for="telefono"><i class="text-light fas fa-fw fa-phone-alt"></i> Celular - Teléfono(s) - Anexo(s)</label>
                            <input class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" type="text" placeholder="Ingrese anexo, teléfono, o celular" value="{{ old('telefono') ? old('telefono') : Auth::user()->telefono }}">
                        @if ($errors->has('telefono'))
                            <div class="invalid-feedback">{{ $errors->first('telefono') }}</div>
                        @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="small mb-1" for="name"><i class="text-light fas fa-fw fa-id-card"></i> Nombre completo</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Ingrese su nombre completo" value="{{ old('name') ? old('name') : Auth::user()->name }}">
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label class="small mb-1" for="area"><i class="text-light fas fa-fw fa-briefcase"></i> Area de Trabajo</label>
                            <input class="form-control @error('area') is-invalid @enderror" id="area" name="area" type="text" placeholder="Ingrese el area donde trabaja" value="{{ old('area') ? old('area') : Auth::user()->area }}">
                             @if ($errors->has('area'))
                                <div class="invalid-feedback">{{ $errors->first('area') }}</div>
                            @endif
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <a href="{{url('/')}}" class="btn btn-danger btn-block" style="border-radius:5px;"><i class="fas fa-fw fa-times"></i> CANCELAR</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <button style="cursor:pointer;border-radius:5px" class="btn btn-success btn-block" type="submit"><i class="fas fa-fw fa-save"></i>GRABA CAMBIOS</button>
                </form>
                 </div>
                    <div class="col-md-4 text-center">
                        <a href="{{url('mi-clave')}}" class="btn btn-primary btn-block" style="border-radius:5px;"><i class="fas fa-fw fa-key"></i> CAMBIAR MI CLAVE</a>
                    </div>
                </div>
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
      showConfirmButton: true,
      timer: 5000,
      position:'center',
      timerProgressBar: true,
    })
    @endif
</script>

@endsection
