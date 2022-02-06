@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('contenido')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<p>{{$taller->Título}}</p>
<p>{{$taller->Fecha_comienzo}}</p>
<p>{{$taller->Fecha_final}}</p>
<p>{{$taller->Descripción}}</p>
<p>{{$taller->Precio}}</p>
<p>{{$taller->Capacidad}}</p>
<form method="post" action="{{route('taller.update',[$taller->id])}}">
    @csrf
    @method('PUT')
    <button class="btn btn-primary"type="submit">Apuntarse</button>
</form>
@endsection

