@extends('layout.masterpage')
@section('Titulo','Sponsors')
@section('contenido')
<h2>Esta es la pagina de sponsors</h2>
@foreach ($sponsors as $sponsor)

<div id="sponsors">
<img src={{$sponsor->ruta_img_sponsor}}>
<p>$sponsor->nombre</p>
<p>$sponsor->descripción</p>
</div>
@endforeach
@endsection
