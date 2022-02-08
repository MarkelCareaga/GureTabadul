@extends ('layout.masterpage')
@section ('contenido')
@section('estilos')
<link rel="stylesheet" href="{{URL::asset('css/perfil.css') }}">
@endsection



<div class="container">
  <div class="main-body">

        <!-- Breadcrumb -->

        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">

              <div class="card-bodyL">
                <p id="perfilP"><a onclick="editarPerfil()" id="perfil">Editar perfil</a></p>
                <p id="interesesP"><a onclick="verIntereses()" id="intereses">Ver intereses</a></p>
                <p id="conocimientosP"><a onclick="verConocimientos()" id="conocimientos">Ver conocimientos</a></p>
                <p id="talleresP"><a onclick="verTalleres()" id="talleres">Ver mis talleres</a></p>
                <p id="cursosP"><a onclick="verCursos()" id="cursos">Ver mis cursos</a></p>
              </div>
            </div>

          </div>
          <div class="col-md-8">
            <div class="card mb-3">
              <form action="{{route("perfil.update",[$usuario->id])}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

              <div class="card-bodyR"  >
                <div id="miPerfil">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Nombre:</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="nombre" id="nombre" value="{{$usuario->name}}"disabled >
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Correo:</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <p>{{$usuario->email}}</p>
                  </div>
                </div>
                <hr>

                @if (!empty($usuario->pais->nombre))
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Pais: </h6>

                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="pais" id="pais" value="{{$usuario->pais->nombre}}" disabled>
                  </div>
                </div>
                @else
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Pais: </h6>

                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="pais" id="pais"  disabled>
                  </div>
                </div>
                @endif

                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Fecha nacimiento:</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="date" name="fecha_nac" id="fecha_nac" value="{{$usuario->Fecha_nac}}" disabled>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Telefono:</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="number" name="telefono" id="telefono"  value="{{$usuario->telefono}}" disabled>
                  </div>
                </div>


                <hr>
                <input type="button" name="botonEditar" value="Editar perfil" id="botonEditar" onclick="botonEditar()">
                <input type="submit" name="botonGuardar" value="Guardar" id="botonGuardar" onclick="botonGuardar()" disabled>
                <input type="button" name="botonCancelar" value="Cancelar" id="botonCancelar" onclick="botonCancelar()" disabled>
              </div>
              <div id="interesesDiv">
                <a onclick="">Agregar Intereses</a>
                <div><h2>Tus intereses</h2></div>
                @foreach ($usuario->intereses as $interes)
                <p>{{$interes->nombre}}</p>
                @endforeach
                </div>
                <div id="conocimientosDiv">
                  <div>
                    <a onclick="">Agregar conocimientos</a>
                    <div><h2>Tus conocimientos</h2></div>
                  @foreach ($usuario->skills as $skill)
                  <p>{{$skill->nombre}}</p>
                  @endforeach
                </div>
                
            </div>
            <div id="talleresDiv">
              <div>
                
                <div><h2>Mis talleres</h2></div>
              @foreach ($usuario->talleres as $taller)
              <div class="talleresInfo">
                <h5 class="card-title">{{$taller->Título}}</h5>
                <p class="card-text">Fecha comienzo: {{$taller->Fecha_comienzo}}</p>
                <p class="card-text">Fecha final: {{$taller->Fecha_final}}</p>
                <p class="card-text">Descripcion: {{$taller->Descripción}}</p>
                <p class="card-text">Precio: {{$taller->Precio}}</p>
                <p class="card-text">Capacidad: {{$taller->Capacidad}}</p>
                
              </div>
              @endforeach
            </div>
          </div>
            
        </div> 
            </form>
            </div>



              </div>

            </div>



          </div>
        </div>

        <div>


            
            

       


        <div class="conocimientos">
            <div >
                <form href="{{route('skills.create',['usuario'=>$usuario])}}">
                 <div>Agrega tu gusto si no lo encuentras <input type="text" name="gusto"></div>
                 <div><button type="submit">Agregar</button></div>
                </form>
            </div>
            <div>


            </div>
        </div>





  <script>
    var pais=document.getElementById("pais");
    document.getElementById("botonEditar").addEventListener("click", function(e){
      pais.disabled=false;
    });
    var correo=document.getElementById("correo");
    document.getElementById("botonEditar").addEventListener("click", function(e){
      correo.disabled=false;
    });
    var nombre=document.getElementById("nombre");
    document.getElementById("botonEditar").addEventListener("click", function(e){
      nombre.disabled=false;
    });
    var fechaNac=document.getElementById("fecha_nac");
    document.getElementById("botonEditar").addEventListener("click", function(e){
      fechaNac.disabled=false;
    });
    var tlf=document.getElementById("telefono");
    document.getElementById("botonEditar").addEventListener("click", function(e){
      tlf.disabled=false;
    });
    var botonG=document.getElementById("botonGuardar");
    document.getElementById("botonEditar").addEventListener("click", function(e){
      botonG.disabled=false;
    });
    var botonC=document.getElementById("botonCancelar");
    document.getElementById("botonEditar").addEventListener("click", function(e){
      botonC.disabled=false;
    });

    function botonGuardar(){

    }
    
    $(document).ready(function(){
    $("#perfil").click(function (){

    $("#miPerfil").css('display','block');
    if($("a:contains('Editar perfil')")){
    $("#prueba").css('display','none');
    $("#interesesDiv").css('display','none');
    $('#conocimientosDiv').css('display','none');
    $('#talleresDiv').css('display','none');
            }
        });
    

        $("#intereses").click(function (){
        $("#interesesDiv").css('display','block');
        if("a:contains('Ver intereses')"){
        $("#miPerfil").css('display','none');
        $("#conocimientosDiv").css('display','none');
        $('#talleresDiv').css('display','none');
            }
        });
    
        $("#conocimientos").click(function (){
        $('#conocimientosDiv').css('display','block');
        if("a:contains('Ver conocimientos')"){
        $("#interesesDiv").css('display','none');
        $("#miPerfil").css('display','none');
        $('#talleresDiv').css('display','none');
            }
        });
        $("#talleres").click(function (){
        $('#talleresDiv').css('display','block');
        if("a:contains('Ver mis talleres')"){
        $("#interesesDiv").css('display','none');
        $("#miPerfil").css('display','none');
        $("#conocimientosDiv").css('display','none');
            }
        });
    });

  </script>
  @endsection
