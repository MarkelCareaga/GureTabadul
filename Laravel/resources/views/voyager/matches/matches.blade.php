@extends('voyager::master');
@section('content')

<a href="{{route('matches.create')}}">Crear Match</a>
@foreach ($matches as $match)
<div>{{$match->nombre}}</div>
<div>{{$match->direccion}}</div>
<div>{{$match->Fecha_encuentro}}</div>
<div>{{$match->usuario1->nombre}}</div>
<div>{{$match->usuario2->nombre}}</div>
@endforeach


@endsection
