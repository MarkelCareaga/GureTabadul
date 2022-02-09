@extends('layout.masterpage')
@section('Titulo','Inicio')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/inicio.css') }}">
<link rel="stylesheet" href="{{URL::asset('css/footer.css')}}">
@endsection
@section('contenido')
<img src="{{url('img/FondoInicioGureTabadul.png')}}">
<h2></h2>

<div class="servicios">
    <h3 class="titulo">¿A que nos dedicamos?</h3>
    <h4 class="subtitulo">INTERCAMBIOS CULTURALES ENTRE MUJERES</h4>
    <div class="flexbox-containerP">
    <div class="flexbox-container">
        <div class="servicio1"><label><img class="corazon" src="{{url('img/amor.png')}}"></label><h4>Cultivar actitudes interculturales positivas.</h4></div>
        <div class="servicio2"><label><img class="libro" src="{{url('img/libro.png')}}"></label><h4>Mejorar el autoconcepto personal, cultural y académico.</h4></div>
    </div>
    <div class="flexbox-container">
        <div class="servicio3"><label><img class="igualdad" src="{{url('img/tomados-de-la-mano.png')}}"></label><h4>Fomentar la igualdad y el respeto mutuo.</h4></div>
        <div class="servicio4"><label><img class="unidad" src="{{url('img/unidad.png')}}"></label><h4>Potenciar la convivencia entre mujeres de diferentes culturas.</h4></div>
    </div>
    </div>
</div>
<div class="nosotros">
    <h3 class="titulo">¿Quienes Somos?</h3>
    <h4 class="subtitulo">GURE TABADUL: APRENDER Y COMPARTIR.</h4>
    <div class="flexbox-containerQ">
        <div class="texto">Conectamos a mujeres con inquietudes para que se enriquezcan entre ellas y así crecer como personas. Solo queremos que abras tu mente y contactes con otras mujeres de las que puedes aprender y a las que puedes enseñar.

            Estamos aquí para ayudarnos, porque podemos ser más de lo que somos solo si tenemos la intención.</div>

    </div>
</div>
<h3 class="titulo">Colaboradores</h3>
@foreach($sponsors as $sponsor)
<div class="sponsors">
    <div class="sponsor">
    <img src="storage/{{$sponsor->ruta_img_sponsor}}">
    <p>{{$sponsor->nombre}}</p>
    <p>{{$sponsor->descripción}}</p>
    </div>   
</div>
@include('layout.footer')
@endforeach



















 








@endsection
