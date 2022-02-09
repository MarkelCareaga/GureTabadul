@extends('voyager::master');
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Match's</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{URL::asset('css/matches.css')}}">
</head>
<body>
    <div class="cajaPrincipal">
    <div class="titulo"><h3>Listado de Match's</h3>
        
    </div>
    <div class="flexbox-container">
        @foreach ($matches as $match)
        <div class="cajaMatch">
        <div><i class="fa-solid fa-user"></i>&nbsp;&nbsp;{{$match->nombre}}</div>
        <div><i class="fa-solid fa-map-location-dot"></i>&nbsp;&nbsp;{{$match->direccion}}</div>
        <div><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;{{$match->Fecha_encuentro}}</div>
        <div><i class="fa-solid fa-1"></i>&nbsp;&nbsp;{{$match->usuario1->name}}</div>
        <div><i class="fa-solid fa-2"></i>&nbsp;&nbsp;{{$match->usuario2->name}}</div>
            <form action="{{route('matches.destroy',$match)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <button class="eliminar"  type="submit"><i class="fa-solid fa-trash-can"></i></button>
            </form>
        </div>
        @endforeach
    </div>
    
    <div class="crear">
        <a class="link" href="{{route('matches.create')}}"><button class="button"><i class="fa-solid fa-circle-plus">&nbsp;&nbsp;</i>Match</button></a>
    </div>
</div>
</body>
</html>










</div>

@endsection
