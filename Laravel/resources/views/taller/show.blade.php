@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('estilos')

@endsection
@section('contenido')
<p>{{$taller->Título}}</p>
<p>{{$taller->Fecha_comienzo}}</p>
<p>{{$taller->Fecha_final}}</p>
<p>{{$taller->Descripción}}</p>
<p>{{$taller->Precio}}</p>
<p>{{$taller->Capacidad}}</p>

<form method="POST" action="{{route('taller.update',[$taller->id])}}">
    @csrf
    @method('PUT')
    <button class="btn btn-primary"type="submit">Apuntarse</button>
</form>
<form method="POST" action="{{route('taller.destroy',[$taller->id])}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary"type="submit">Desapuntarse</button>
</form>

@endsection

