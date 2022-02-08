@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('contenido')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/show_curso.css') }}">
@endsection
<div class="curso_detalles">
<p id="titulo">{{$curso->nombre}}</p>
<p id="fecha_inicio"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;{{$curso->Fecha_ini}}</p>
<p id="fecha_fin"><i class="fas fa-calendar-times"></i>&nbsp;&nbsp;{{$curso->Fecha_fin}}</p>
<p id="descripcion"><i class="fas fa-info-circle"></i> {{$curso->descripcion}}</p>
<p id="precio"><i class="fas fa-coins"></i>&nbsp;&nbsp;{{$curso->precio}}&nbsp;&nbsp;<i class="fas fa-euro-sign"></i></p>
<p id="capacidad"><i class="fas fa-female"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$curso->capacidad}}</p>


<form method="POST" action="{{route('cursos.update',[$curso->id])}}">
    @csrf
    @method('PUT')
    <button class="btn btn-primary"type="submit"><i class="fas fa-plus-square"></i></button>
</form>
<form method="POST" action="{{route('cursos.destroy',[$curso->id])}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-secondary"type="submit"><i class="fas fa-minus-square"></i></button>
</form>
</div>
@endsection
