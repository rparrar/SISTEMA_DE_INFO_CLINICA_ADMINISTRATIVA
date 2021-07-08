<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('tema/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('tema/vendors/bower_components/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('tema/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('tema/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('tema/css/app.min.css')}}">
    <script src="https://kit.fontawesome.com/239c4e9305.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('tema/css/estilos.css')}}">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    @yield('css-propios')
</head>
    <body data-sa-theme="{{Auth::user()->tema}}">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down text-center">
                    <a href="{{route('PAGINA DE INICIO')}}"><img src="https://www.rpi.cl/imagenes/logo.png" class="img img-fluid" style="width: 370px;"></a>
                </div>

                <form class="search">
                    <h4 class="text-center text-warning">SISTEMA DE INFORMACION Ver. 4.0 by RPI</h4>
                </form>
                <ul class="top-nav">


                {{--    <li class="dropdown">   <!-- clase top-nav__notify  será cuando hayan pendientes -->
                        <a href="#" data-toggle="dropdown" class="top-nav__notify"><i class="fas fa-fw icono-navbar-superior fa-envelope"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Messages

                                <div class="actions">
                                    <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <a href="#" class="listview__item">
                                    <img src="{{asset('tema/demo/img/profile-pics/1.jpg')}}" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            David Belle <small>12:01 PM</small>
                                        </div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="{{asset('tema/demo/img/profile-pics/2.jpg')}}" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Jonathan Morris
                                            <small>02:45 PM</small>
                                        </div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="{{asset('tema/demo/img/profile-pics/3.jpg')}}" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Fredric Mitchell Jr.
                                            <small>08:21 PM</small>
                                        </div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="{{asset('tema/demo/img/profile-pics/4.jpg')}}" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Glenn Jecobs
                                            <small>08:43 PM</small>
                                        </div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="{{asset('tema/demo/img/profile-pics/5.jpg')}}" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Bill Phillips
                                            <small>11:32 PM</small>
                                        </div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                    </div>
                                </a>

                                <a href="#" class="view-more">View all messages</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown top-nav__notifications">
                                                                <!-- clase top-nav__notify  será cuando hayan pendientes -->
                        <a href="#" data-toggle="dropdown" class="top-nav__notify">
                            <i class="fas fa-fw icono-navbar-superior fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Notifications

                                <div class="actions">
                                    <a href="#" class="actions__item zmdi zmdi-check-all" data-sa-action="notifications-clear"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                <div class="listview__scroll scrollbar-inner">
                                    <a href="#" class="listview__item">
                                        <img src="{{asset('tema/demo/img/profile-pics/1.jpg')}}" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="{{asset('tema/demo/img/profile-pics/2.jpg')}}" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="{{asset('tema/demo/img/profile-pics/3.jpg')}}" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="{{asset('tema/demo/img/profile-pics/4.jpg')}}" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Glenn Jecobs</div>
                                            <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="{{asset('tema/demo/img/profile-pics/5.jpg')}}" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Bill Phillips</div>
                                            <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="{{asset('tema/demo/img/profile-pics/1.jpg')}}" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="{{asset('tema/demo/img/profile-pics/2.jpg')}}" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="{{asset('tema/demo/img/profile-pics/3.jpg')}}" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="p-1"></div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="fas fa-fw icono-navbar-superior fa-check-circle"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="dropdown-header">Tasks</div>

                            <div class="listview listview--hover">
                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">HTML5 Validation Report</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Google Chrome Extension</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Social Intranet Projects</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Bootstrap Admin Template</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Youtube Client App</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="view-more">View all Tasks</a>
                            </div>
                        </div>
                    </li>--}}

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="fas fa-fw icono-navbar-superior fa-th"></i></a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="{{route('MI PERFIL')}}">

                                    <i class="fas fa-fw fa-user-cog"></i>
                                    <small>Perfil</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="{{route('MI CLAVE')}}">
                                    <i class="fas fa-fw fa-key"></i>
                                    <small>Cambio clave</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="{{route('MI CONFIGURACION')}}">
                                    <i class="fas fa-fw fa-cog"></i>
                                    <small>Configuración</small>
                                </a>
                            </div>
                        </div>
                    </li>


                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-fw icono-navbar-superior fa-palette"></i></a>

                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(50px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <div class="dropdown-item theme-switch text-center">

                                <a class="col-4 app-shortcuts__item" href="{{route('MI CONFIGURACION')}}">
                                    <i class="fas fa-fw fa-palette"></i>
                                    <small>SELECCIONA FONDO</small>
                                </a>
                            </div>

                        </div>
                    </li>


                </ul>

                <div class="clock hidden-md-down">
                    <div class="time">
                        <span class="hours"></span>
                        <span class="min"></span>
                        <span class="sec"></span>
                    </div>
                </div>
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">
                    <div class="user" data-toggle="tooltip" data-placement="left" title="CLICK ACÁ PARA VER OPCIONES">
                        <div class="user__info" data-toggle="dropdown">
                            @if (Auth::user()->sexo == "F")
                                <img src="{{asset('tema/demo/img/profile-pics/1.jpg')}}" class="listview__img" alt="">
                            @else
                                <img src="{{asset('tema/demo/img/profile-pics/2.jpg')}}" class="listview__img" alt="">
                            @endif
                            <div>
                                <div class="user__name"><i class="fas fa-fw fa-id-card"></i> {{Auth::user()->name}}</div>
                                <div class="user__email"><i class="fas fa-fw fa-envelope"></i> {{Auth::user()->email}}</div>
                                <div class="user__name"><i class="fas fa-fw fa-user"></i> {{Auth::user()->user}}</div>
                                <div class="user__email"><i class="fas fa-fw fa-briefcase"></i> {{Auth::user()->area}}</div>
                                <div class="user__name"><i class="fas fa-fw fa-user-tag"></i> {{Auth::user()->permisos}}</div>
                            </div>
                        </div>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('MI PERFIL')}}"><i class="fas fa-fw fa-user-alt"></i> Mi Perfil</a>
                            <a class="dropdown-item" href="{{route('MI CONFIGURACION')}}"><i class="fas fa-fw fa-cog"></i> Configuración</a>
                            <a class="dropdown-item" href="{{route('SALIR DEL SISTEMA')}}"><i class="fas fa-fw fa-sign-out-alt"></i> Salir</a>
                            @if (Auth::user()->permisos=="ADMINISTRADOR")
                                <hr>
                                <a class="dropdown-item" href="{{route('PANEL DE CONTROL ADMINISTRADOR')}}"><i class="fas fa-fw fa-cogs"></i> Panel principal admin</a>
                                <a class="dropdown-item" href="{{url('admin/usuario')}}"><i class="fas fa-fw fa-user-cog"></i> Usuarios</a>
                                <a class="dropdown-item" href="{{url('admin/auditoria')}}"><i class="fas fa-fw fa-globe-americas"></i> Auditorías</a>
                            @endif

                        </div>


                    </div>

                    <ul class="navigation">

                        <center><h2><i class="far fa-hospital"></i> MENU <i class="far fa-hospital"></i></h2></center>
                        <hr>
                        <li class="{{ (request()->is('/'))                      ? 'navigation__active' : ''}}"><a href="{{url('/')}}">                          <i class="fas fa-home"></i>                 Inicio</a></li>
                        <li class="{{ (request()->is('prestaciones_imagen'))    ? 'navigation__active' : ''}}"><a href="{{url('prestaciones_imagen')}}">        <i class="fas fa-x-ray"></i>                Valores Imagenología</a></li>
                        <li class="{{ (request()->is('prestaciones_laboratorio'))    ? 'navigation__active' : ''}}"><a href="{{url('prestaciones_laboratorio')}}">        <i class="fas fa-virus"></i>      Valores Laboratorio</a></li>
                        <li class="{{ (request()->is('valores_dia_cama'))       ? 'navigation__active' : ''}}"><a href="{{url('/valores_dia_cama')}}">          <i class="fas fa-procedures"></i>           Valores dia cama</a></li>
                        <li class="{{ (request()->is('planes'))                 ? 'navigation__active' : ''}}"><a href="{{url('/planes')}}">                    <i class="fas fa-notes-medical"></i>        Planes Cruz Blanca</a></li>
                        <li class="{{ (request()->is('descarga_planes'))        ? 'navigation__active' : ''}}"><a href="{{url('/descarga_planes')}}">           <i class="fas fa-file-medical-alt"></i>     Bajar plan Cruz Blanca</a></li>
                        <li class="{{ (request()->is('codigos_integrales'))     ? 'navigation__active' : ''}}"><a href="{{url('/codigos_integrales')}}">        <i class="fas fa-fw fa-medkit"></i>         Códigos Integrales</a></li>
                        <li class="{{ (request()->is('doctores'))               ? 'navigation__active' : ''}}"><a href="{{url('/doctores')}}">                  <i class="fas fa-user-md"></i>              Doctores</a></li>
                        <li class="{{ (request()->is('seguros'))                ? 'navigation__active' : ''}}"><a href="{{url('/seguros')}}">                   <i class="fas fa-hand-holding-medical"></i> Seguros</a></li>
                        <li class="{{ (request()->is('anexos'))                 ? 'navigation__active' : ''}}"><a href="{{url('/anexos')}}">                    <i class="fas fa-phone"></i>                Anexos</a></li>
                        <li class="{{ (request()->is('descargas'))              ? 'navigation__active' : ''}}"><a href="{{url('/descargas')}}">                 <i class="fas fa-download"></i>             Descargas</a></li>
                        <li class="{{ (request()->is('comunas'))                ? 'navigation__active' : ''}}"><a href="{{url('/comunas')}}">                   <i class="fas fa-location-arrow"></i>       Comunas</a></li>
                        <li class="{{ (request()->is('transferencia'))          ? 'navigation__active' : ''}}"><a href="{{url('/transferencia')}}">             <i class="fas fa-hand-holding-usd"></i>     Datos transferencias</a></li>
                        <li class="{{ (request()->is('rotativa'))               ? 'navigation__active' : ''}}"><a href="{{url('/rotativa')}}">                  <i class="fas fa-user-nurse"></i>           Rotativa de Urgencia</a></li>
                        <li class="{{ (request()->is('calendariohe'))           ? 'navigation__active' : ''}}"><a href="{{url('/calendariohe')}}">              <i class="fas fa-comment-dollar"></i>       Cortes de Horas extra</a></li>
                        <hr>
                    </ul>
                </div>
            </aside>

            <section class="content">
                @yield('content')

                <footer class="footer hidden-xs-down">
                    <p>Rpi - Sistema de información Versión 4, desarrollado con el <i class="fas fa-fw fa-heartbeat fa-2x text-danger"></i> por <a href="https://www.rpi.cl" target="_blank">Roberto Parra R.</a></p>

                  {{--  <ul class="nav footer__nav">
                        <a class="nav-link" href="#">Inicio</a>
                        <a class="nav-link" href="#">Menú 2</a>
                        <a class="nav-link" href="#">Menú 3</a>
                        <a class="nav-link" href="#">Menú 4</a>
                        <a class="nav-link" href="#">Menú 5</a>
                    </ul>--}}
                </footer>
            </section>
        </main>

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

        <!-- Javascript -->
        <!-- Vendors -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://momentjs.com/downloads/moment.min.js"></script>


        <script src="{{asset('tema/vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>

        <script src="{{asset('tema/vendors/bower_components/salvattore/dist/salvattore.min.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/flot.curvedlines/curvedLines.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('tema/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>

        {{--
            <script src="{{asset('tema/demo/js/flot-charts/curved-line.js')}}"></script>
            <script src="{{asset('tema/demo/js/flot-charts/line.js')}}"></script>
            <script src="{{asset('tema/demo/js/flot-charts/dynamic.js')}}"></script>
            <script src="{{asset('tema/demo/js/flot-charts/chart-tooltips.js')}}"></script>
            <script src="{{asset('tema/demo/js/other-charts.js')}}"></script>
            <script src="{{asset('tema/demo/js/jqvmap.js')}}"></script>
        --}}
        <!-- App functions and actions -->
        <script src="{{asset('tema/js/app.min.js')}}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

        <script>
            @if(Session::has('message'))
              Swal.fire({
              icon: 'success',
              title: '{{Session::get('message')}}',
              showConfirmButton: true,
              position:'center',
            })
            @endif
        </script>

        @yield('scripts')

    </body>


</html>
