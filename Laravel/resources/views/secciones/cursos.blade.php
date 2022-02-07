@extends('layout.masterpage')
@section('Titulo','Cursos')
@section('contenido')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/curso.css') }}">
@endsection

@foreach ($cursos as $curso)

<div class="card" style="width: 18rem;">
  <a href="{{route('cursos.show',['curso'=>$curso])}}">
 
    <img src="storage/{{$curso->imagenes()->first()->ruta}}" class="card-img-top" alt="">

    </a>
    <div class="card-body">
      <h5 class="card-title">{{$curso->nombre}}</h5>
      
      <p class="card-text">Descripcion: {{$curso->descripcion}}</p>
      
    </div>
  </div>
  
@endforeach



@endsection
