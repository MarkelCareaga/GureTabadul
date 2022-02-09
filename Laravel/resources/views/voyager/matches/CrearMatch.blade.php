@extends('voyager::master');
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Matches</title>
    <link rel="stylesheet" href="{{URL::asset('css/CrearMatch.css') }}">
</head>
<body>

</body>
</html>
<form action="" method="POST">
    <div><input type="text" name="nombre"></div>
    <div><input type="text" name="direccion"></div>
    <div><input type="date" name="fecha"></div>

    <button type="submit">Crear Match</button>

    <select name="usuario1" id="primerSelect">
        @foreach ($usuarios as $user)
        <option value="{{$user->id}}">{{$user->email}}</option>
        @endforeach
    </select>

    <select name="usuario2" id="segundoSelect">
        @foreach ($usuarios as $user)
        <option value="{{$user->id}}">{{$user->email}}</option>
        @endforeach
    </select>
    </form>
    @foreach ($usuarios as $user)
        <div class="usuarios1" id="{{$user->email}}">
            <div>{{$user->email}}</div>
            <div>{{$user->name}}</div>
            <div>{{$user->telefono}}</div>
            <div>{{$user->Fecha_nac}}</div>
        </div>


    @endforeach
    @foreach ($usuarios as $user)
    <div class="usuarios2" id="{{$user->email}}">
        <div>{{$user->email}}</div>
        <div>{{$user->name}}</div>
        <div>{{$user->telefono}}</div>
        <div>{{$user->Fecha_nac}}</div>
    </div>

    @endforeach

    <script>
        var valorSelect1=document.getElementById('primerSelect');
        var valorUsuario;
        var Usuarios1=document.getElementsByClassName('usuarios1');
        valorSelect1.onchange = function (){
            valorUsuario=valorSelect1.options[valorSelect1.selectedIndex].text;

            for(let i=0; i<Usuarios1.length;i++){
                if(valorUsuario==Usuarios1[i].getAttribute("id")){
                   for(let j=0;j<Usuarios1.length;j++){
                    Usuarios1[j].style.display="none";
                   }
                    Usuarios1[i].style.display="block";
                }
            }
        }

        let valorSelect2=document.getElementById('segundoSelect');
        let valorUsuario2;
        var Usuarios2=document.getElementsByClassName('usuarios2');
        valorSelect2.onchange = function (){
            valorUsuario2=valorSelect2.options[valorSelect2.selectedIndex].text;

            for(let i=0; i<Usuarios2.length;i++){
                if(valorUsuario2==Usuarios2[i].getAttribute("id")){
                   for(let j=0;j<Usuarios2.length;j++){
                    Usuarios2[j].style.display="none";
                   }
                    Usuarios2[i].style.display="block";
                }
            }
        }
    </script>

@endsection
