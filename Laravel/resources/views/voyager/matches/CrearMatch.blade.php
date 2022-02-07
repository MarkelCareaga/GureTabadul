@extends('layout.masterpage')
@section('contenido')
<form action="" method="POST">
    <div><input type="text" name="usuario1"></div>
    <button type="submit">Crear Match</button>

    <form action=""></form>
    <select name="usuario1">
        @foreach ($usuarios as $user)
        <option value="{{$user->id}}">{{$user->email}}</option>
        @endforeach
    </select>
    </form>
    <form>
    <select name="usuario2">
        @foreach ($usuarios as $user)
        <option value="{{$user->id}}">{{$user->email}}</option>
        @endforeach
    </select>
    </form>
    <input type="button" value="buscar usuario" onClick="document.formulario.action='{{route}}'; document.formuario.submit()";>
@endsection
