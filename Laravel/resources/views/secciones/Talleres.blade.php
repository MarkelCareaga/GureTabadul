@extends('layout.masterpage')
@section('Titulo','Talleres')
@section('contenido')
@foreach($talleres as $taller)
<div class="talleres">
<a href="./taller/{{$taller->id}}">
{{-- <img src={{$taller->imagenes->first()->ruta}}>--}}
<h3>{{$taller->Título}}</h3>
</a>
</div>

@endforeach

@endsection
