@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('contenido')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/talleres.css') }}">
@endsection
<div class="talleres">
@foreach($talleres as $taller)

<div class="card" style="width: 18rem;">

  <a href="{{route('taller.show',['taller'=>$taller])}}">

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
      <p class="card-text">Fecha comienzo: {{$taller->Fecha_comienzo}}</p>
      <p class="card-text">Fecha final: {{$taller->Fecha_final}}</p>
      <p class="card-text">Descripcion: {{$taller->Descripción}}</p>
      <p class="card-text">Precio: {{$taller->Precio}}</p>
      <p class="card-text">Capacidad: {{$taller->Capacidad}}</p>
      <a href="#" class="btn btn-primary">Apuntarse</a>
    </div>
  </div>

@endforeach
</div>
@endsection
