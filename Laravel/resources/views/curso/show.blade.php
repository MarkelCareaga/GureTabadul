@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('contenido')
<p>{{$curso->nombre}}</p>
<p>{{$curso->Fecha_ini}}</p>
<p>{{$curso->Fecha_fin}}</p>
<p>{{$curso->precio}}</p>
<p>{{$curso->capacidad}}</p>
<p>{{$curso->descripcion}}</p>

<form method="POST" action="{{route('cursos.update',[$curso->id])}}">
    @csrf
    @method('PUT')
    <button class="btn btn-primary"type="submit">Apuntarse</button>
</form>
<form method="POST" action="{{route('cursos.destroy',[$curso->id])}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary"type="submit">Desapuntarse</button>
</form>
@endsection
