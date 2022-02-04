@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('contenido')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/talleres.css') }}">
@endsection
<div class="talleres">
@foreach($talleres as $taller)




<div class="card" style="width: 18rem;">
    <a href="./taller/{{$taller->id}}">
        <img src="storage\{{$taller->imagenes}}" class="card-img-top"  alt="">
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
