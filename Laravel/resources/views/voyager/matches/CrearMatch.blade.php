@extends('layout.masterpage')
@section('contenido')
<form action="" method="POST">
    <div><input type="text" name="usuario1"></div>
    <button type="submit">Crear Match</button>
</form>
    <form action="{{route('')}}" method="POST">
    <select name="usuario1">
        @foreach ($usuarios as $user)
        <option value="{{$user->id}}">{{$user->email}}</option>
        @endforeach
    </select>
    </form>
    <select name="usuario2">
        @foreach ($usuarios as $user)
        <option value="{{$user->id}}">{{$user->email}}</option>
        @endforeach
    </select>

@endsection
