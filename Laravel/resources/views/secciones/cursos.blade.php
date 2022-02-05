@extends('layout.masterpage')
@section('Titulo','Cursos')
@section('contenido')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/curso.css') }}">
@endsection

@foreach ($cursos as $curso)
<div class="cursos"><a href="{{route('cursos.show',['curso'=>$curso])}}">
{{-- <img src={{$curso->imagenes->first()->ruta}}> --}}
fdsf
</a></div>
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$curso->nombre}}</h5>
      <p class="card-text">Fecha comienzo: {{$curso->Fecha_ini}}</p>
      <p class="card-text">Fecha final: {{$curso->Fecha_fin}}</p>
      <p class="card-text">Precio: {{$curso->precio}}</p>
      <p class="card-text">Capacidad: {{$curso->capacidad}}</p>
      <p class="card-text">Descripcion: {{$curso->descripcion}}</p>
      <a href="#" class="btn btn-primary">Apuntarse</a>
    </div>
  </div>
  
@endforeach



@endsection
