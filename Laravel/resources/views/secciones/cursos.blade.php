@extends('layout.masterpage')
@section('Titulo','Cursos')
@section('contenido')
<h2>Esta es la pagina de cursos</h2>
<select name="elegir">
<option value="Todo" selected></option>
  <option value="Cursos"></option>
  <option value="Talleres"></option>
</select>
@foreach ($cursos as $curso)
<div class="cursos"><a href="{{route('cursos.show')}}">
<img src={{$curso->imagenes->first()->ruta}}>
<h1>$curso->nombre</h1>
</a></div>
@endforeach

@foreach($talleres as $taller)
<div class="talleres">
<a href="{{route('taller.show')}}">
<img src={{$taller->imagenes->first()->ruta}}>
<h1>$taller->Título</h1>
</a>
</div>
@endforeach

@endsection
