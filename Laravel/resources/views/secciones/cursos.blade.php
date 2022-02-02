@extends('layout.masterpage')
@section('Titulo','Cursos')
@section('contenido')

@foreach ($cursos as $curso)
<div class="cursos"><a href="./cursos/{{$taller->id}}">
{{-- <img src={{$curso->imagenes->first()->ruta}}> --}}
<h1>{{$curso->nombre}}</h1>
</a></div>
@endforeach



@endsection
