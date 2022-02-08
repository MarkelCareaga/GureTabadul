@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('contenido')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/talleres.css') }}">
@endsection
<div class="talleres">
@foreach($talleres as $taller)

<div class="card" style="width: 18rem;">

  <a class="imagen" href="{{route('taller.show',['taller'=>$taller])}}">

        @if (empty($taller->imagenes))
            @php
          $rutaImagen=$taller->imagenes->first()->ruta;
          echo '<img src="storage/'.$rutaImagen.'" class="card-img-top">'
          @endphp
        @else
            @php
            $rutaImagen="default.jpg";
          echo '<img src="storage/'.$rutaImagen.'" class="card-img-top">'
            @endphp
          @endif

</a>

    <div class="card-body">
      <h5 class="card-title">{{$taller->Título}}</h5>
      <p class="card-text"><i class="fas fa-calendar-check"></i>
        {{$taller->Fecha_comienzo}}</p>
      <p class="card-text"><i class="fas fa-calendar-times"></i> {{$taller->Fecha_final}}</p>
      <p class="card-text"><i class="fas fa-info-circle"></i> {{$taller->Descripción}}</p>
      <p class="card-text"><i class="fas fa-coins"></i> {{$taller->Precio}}&nbsp;&nbsp;<i class="fas fa-euro-sign"></i></p>
      <p class="card-text"><i class="fas fa-female"></i> {{$taller->Capacidad}}</p>
    </div>
  </div>

@endforeach
</div>
@endsection
