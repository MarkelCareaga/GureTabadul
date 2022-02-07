@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('contenido')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/show_curso.css') }}">
@endsection
<div class="curso_detalles">
<p id="titulo">{{$curso->nombre}}</p>
<p id="fecha_inicio">Fecha inicio: {{$curso->Fecha_ini}}</p>
<p id="fecha_fin">Fecha fin: {{$curso->Fecha_fin}}</p>
<p id="descripcion">Descripcion: {{$curso->descripcion}}</p>
<p id="precio">Precio: {{$curso->precio}}</p>
<p id="capacidad">Capacidad: {{$curso->capacidad}}</p>


<form method="POST" action="{{route('cursos.update',[$curso->id])}}">
    @csrf
    @method('PUT')
    <button class="btn btn-primary"type="submit">Apuntarse</button>
</form>
<form method="POST" action="{{route('cursos.destroy',[$curso->id])}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-secondary"type="submit">Desapuntarse</button>
</form>
</div>
@endsection
