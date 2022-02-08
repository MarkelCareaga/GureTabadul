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
 
    <img src="storage/{{$curso->imagenes()->first()->ruta}}" class="card-img-top" alt="">

    </a>
    <div class="card-body">
      <h5 class="card-title">{{$curso->nombre}}</h5>
      <p class="card-text">Fecha comienzo: {{$curso->Fecha_ini}}</p>
      <p class="card-text">Fecha final: {{$curso->Fecha_fin}}</p>
      <p class="card-text">Descripcion: {{$curso->descripcion}}</p>
      <p class="card-text">Precio: {{$curso->precio}}</p>
      <p class="card-text">Capacidad: {{$curso->capacidad}}</p>
      
    </div>
  </div>
  
@endforeach
</div>


@endsection
