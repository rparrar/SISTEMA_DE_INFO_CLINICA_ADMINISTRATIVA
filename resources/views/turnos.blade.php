@section('titulo')
{{ 'Rotativa Turnos' }}
@endsection
@extends('layouts.app')
@section ('css-propios')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.css">
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-3 text-center"><p class="alert alert-light" style="border-radius:5px;padding:5px;background-color:#1cc88a;color:#ffffff"> DIA GENERAL</p></div>
        <div class="col-md-3 text-center"><p class="alert alert-light" style="border-radius:5px;padding:5px;background-color:#e74a3b;color:#ffffff"> DIA/NOCHE RESPIRATORIA</p></div>
        <div class="col-md-3 text-center"><p class="alert alert-light" style="border-radius:5px;padding:5px;background-color:#4e73df;color:#ffffff"> NOCHE GENERAL</p></div>
    </div>            
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="bordered" id="calendar" style="cursor: pointer"></div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3 text-center"><p class="alert alert-light" style="border-radius:5px;padding:5px;background-color:#1cc88a;color:#ffffff"> DIA GENERAL</p></div>
        <div class="col-md-3 text-center"><p class="alert alert-light" style="border-radius:5px;padding:5px;background-color:#e74a3b;color:#ffffff"> DIA/NOCHE RESPIRATORIA</p></div>
        <div class="col-md-3 text-center"><p class="alert alert-light" style="border-radius:5px;padding:5px;background-color:#4e73df;color:#ffffff"> NOCHE GENERAL</p></div>
    </div>
@endsection

@section ('scripts')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.5.0/locales-all.min.js"></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

var hoy = new Date();

  document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    themeSystem: 'bootstrap',
    locale: 'es',
    timeZone: 'America/Santiago',
    firstDay: 1,
    initialView: 'dayGridMonth',
    //initialDate: hoy,
    expandRows : true,
    showNonCurrentDates : false,
    eventDisplay: 'list-item',
    eventOrder : 'title',
    showNonCurrentDates : true,
    headerToolbar: {
      left: 'title',
      center: 'dayGridMonth,timeGridWeek,timeGridDay',
      right: 'prev,next,today'
    },
    footerToolbar:{
      center: ''
    },
     views: {
    dayGridMonth: { // name of view
      titleFormat: { year: 'numeric', month: 'long', day: '2-digit' }
    }
  },
    events: [
        @foreach ($turnos as $item)
            {
                start : '{{$item->fecha}}',
                title : '{{$item->jornada}}-{{$item->lugar}}-{{$item->funcionario}}',

                @if ($item->jornada == "DIA" & $item->lugar == "G")
                    turno : 'DIA',
                    lugar : 'URGENCIA GENERAL',
                    color : '#1cc88a',
                @elseif ($item->jornada == "NOCHE" & $item->lugar == "G")
                    turno : 'NOCHE',
                    lugar : 'URGENCIA GENERAL',
                    color : '#4e73df',
                @elseif ($item->jornada == "DIA" & $item->lugar == "R")
                    turno : 'DIA',
                    lugar : 'URGENCIA RESPIRATORIA',
                    color : '#e74a3b',
                @elseif ($item->jornada == "NOCHE" & $item->lugar == "R")
                    turno : 'NOCHE',
                    lugar : 'URGENCIA RESPIRATORIA',
                    color : '#e74a3b',
                @endif
            },
        @endforeach
    ],

     dateClick: function(info) {
      //  alert('PRESIONASTE SOBRE LA FECHA ' + info.dateStr);
    },

  eventClick: function(info) {

        Swal.fire({
          icon: 'info',
          title: info.event.title,
          text: "TURNO " + info.event.extendedProps.turno + " EN " + info.event.extendedProps.lugar,
          timer: 5000,
          timerProgressBar: true,
          footer : 'Sistema Info RPI',
          showConfirmButton : false,
          iconColor : "#fff",
        })
  }
  });

  calendar.render();
});


</script>
@endsection
