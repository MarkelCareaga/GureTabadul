@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('contenido')
<p>{{$curso->nombre}}</p>
<p>{{$curso->Fecha_ini}}</p>
<p>{{$curso->Fecha_fin}}</p>
<p>{{$curso->precio}}</p>
<p>{{$curso->capacidad}}</p>
<p>{{$curso->descripcion}}</p>
@endsection
