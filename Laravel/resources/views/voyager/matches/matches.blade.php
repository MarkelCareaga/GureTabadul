@extends('voyager::master');
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matches</title>
    <link rel="stylesheet" href="{{URL::asset('css/matches.css')}}">
</head>
<body>
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
        <div>
            <form action="{{route('matches.destroy',$match)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar Match</button>
            </form>
        </div>
        @endforeach
    </div>
    <div class="boton">
        <a href="{{route('matches.create')}}"><button class="button" value="Crear Match"></button></a>
    </div>
</body>
</html>










</div>

@endsection
