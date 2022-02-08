@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/show_taller.css') }}">
@endsection
@section('contenido')
<div class="taller_detalles">
<p id="titulo">{{$taller->Título}}</p>
<p id="fecha_inicio"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;{{$taller->Fecha_comienzo}}</p>
<p id="fecha_fin"><i class="fas fa-calendar-times"></i>&nbsp;&nbsp; {{$taller->Fecha_final}}</p>

<p id="descripcion"><i class="fas fa-info-circle"></i>&nbsp; {{$taller->Descripción}}</p>
     
<p id="precio"><i class="fas fa-coins"></i>&nbsp; {{$taller->Precio}}&nbsp;&nbsp;<i class="fas fa-euro-sign"></i></p>
<p id="capacidad"><i class="fas fa-female"></i>&nbsp;&nbsp;&nbsp; {{$taller->Capacidad}}</p>
<form method="POST" action="{{route('taller.update',[$taller->id])}}">
    @csrf
    @method('PUT')
    <button class="btn btn-primary"type="submit"><i class="fas fa-plus-square"></i></button>
</form>
<form method="POST" action="{{route('taller.destroy',[$taller->id])}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-secondary"type="submit"><i class="fas fa-minus-square"></i></button>
</form>
</div>



@endsection

