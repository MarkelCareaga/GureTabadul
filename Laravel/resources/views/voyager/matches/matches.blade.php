@extends('voyager::master');
@section('content')


<link rel="stylesheet" href="{{URL::asset('css/matches.css')}}">
<div class="titulo"><h3>Match</h3>
        
</div>
<div class="flexbox-container">
    @foreach ($matches as $match)
    <div class="cajaMatch">
    <div>{{$match->nombre}}</div>
    <div>{{$match->direccion}}</div>
    <div>{{$match->Fecha_encuentro}}</div>
    <div>{{$match->usuario1->nombre}}</div>
    <div>{{$match->usuario2->nombre}}</div>
    </div>
    @endforeach
</div>

<div class="boton">
    <a href="{{route('matches.create')}}"><button class="button" value="Crear Match"></button></a>
</div>







</div>

@endsection
