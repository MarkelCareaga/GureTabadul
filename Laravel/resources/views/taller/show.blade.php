@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/show_taller.css') }}">
@endsection
@section('contenido')
<div class="taller_detalles">
<p id="titulo">{{$taller->Título}}</p>
<p id="fecha_inicio">Fecha inicio: {{$taller->Fecha_comienzo}}</p>
<p id="fecha_fin">Fecha fin: {{$taller->Fecha_final}}</p>
<p id="descripcion">Descripcion:</p> 
<p id="texto"> {{$taller->Descripción}}</p>
     
<p id="precio">Precio: {{$taller->Precio}}</p>
<p id="capacidad">Capacidad: {{$taller->Capacidad}}</p>
<form method="POST" action="{{route('taller.update',[$taller->id])}}">
    @csrf
    @method('PUT')
    <button class="btn btn-primary"type="submit">Apuntarse</button>
</form>
<form method="POST" action="{{route('taller.destroy',[$taller->id])}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-secondary"type="submit">Desapuntarse</button>
</form>
</div>



@endsection

