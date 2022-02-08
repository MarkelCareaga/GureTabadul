@extends('layout.masterpage')
@section('Titulo','Cursos')
@section('contenido')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/curso.css') }}">
@endsection
<div class="cursos">
@foreach ($cursos as $curso)

<div class="card" style="width: 18rem;">
  <a href="{{route('cursos.show',['curso'=>$curso])}}">

    <img class="imagen" src="storage/{{$curso->imagenes()->first()->ruta}}" class="card-img-top" alt="">

    </a>
    <div class="card-body">
      <h5 class="card-title">{{$curso->nombre}}</h5>
      <p class="card-text"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;{{$curso->Fecha_ini}}</p>
      <p class="card-text"><i class="fas fa-calendar-times"></i>&nbsp;&nbsp;{{$curso->Fecha_fin}}</p>
      <p class="card-text"><i class="fas fa-info-circle"></i> {{$curso->descripcion}}</p>
      <p class="card-text"><i class="fas fa-coins"></i>&nbsp;&nbsp;{{$curso->precio}}&nbsp;&nbsp;<i class="fas fa-euro-sign"></i></p>
      <p class="card-text"><i class="fas fa-female"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$curso->capacidad}}</p>

    </div>
  </div>

@endforeach
</div>


@endsection
