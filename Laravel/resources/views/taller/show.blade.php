@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('contenido')
<p>{{$taller->Título}}</p>
<p>{{$taller->Fecha_comienzo}}</p>
<p>{{$taller->Fecha_final}}</p>
<p>{{$taller->Descripción}}</p>
<p>{{$taller->Precio}}</p>
<p>{{$taller->Capacidad}}</p>
@endsection

