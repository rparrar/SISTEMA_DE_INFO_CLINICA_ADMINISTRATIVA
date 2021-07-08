@extends('layouts.app')
@section('titulo')
{{ 'Admin - Inicio' }} 
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col mb-4">
        <div class="card shadow mb-4 border-left-primary">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-cog"></i> PANEL DE CONTROL ADMINISTRADOR</h6>
            </div>
            <div class="card-body">
                
                <div class="col badge badge-danger text-wrap text-center">
                        <p class="my-1" style="font-family: 'Comfortaa', cursive;"><i class="fas fa-fw fa-exclamation-circle"></i> PANEL ADMIN</p>
                </div>
                
                
                
                
            </div>
        </div>
        <div class="card shadow mb-4 border-left-primary">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><i class="far fa-fw fa-comment-alt"></i> PANEL ADMIN</h6>
            </div>
            <div class="card-body">
                <p>PANEL ADMIN</p>
                
                <p class="firma">Roberto Parra R.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section ('scripts-propios')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
      text: 'Estas siendo dirigido a la zona de tu perfil, para que hagas el cambio, esto es obligatorio',
      footer: 'No tendrás acceso full al sistema mientras no cambies la clave',
      showCancelButton: true,
      cancelButtonColor: '#d33',
      confirmButtonText: 'OK, la cambio de inmediato',
      cancelButtonText: 'No, no quiero',
      
      timer: 5000,
      position:'center',
      timerProgressBar: true,
    })
    @endif
    
</script>

@endsection