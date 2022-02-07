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
              
              <div class="card-body">
                <input type="button" name="botonEditarPerfil" value="Editar perfil" id="botonEditar1" onclick="botonEditarPerfil()">
              </div>
            </div>

          </div>
          <div class="col-md-8">
            <div class="card mb-3">
              <form action="{{route("perfil.update",[$usuario->id])}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
              <div class="card-body" >
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
            </form>
            </div>

            

              </div>
              
            </div>



          </div>
        </div>

        <div>
          <form method="post" action="">
            <button type="submit" name="gustos">Agregar gustos</button>
          </form>
          @foreach ($usuario->intereses as $interes)
          <p>{{$interes->nombre}}</p>
              
          @endforeach
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
    
  </script>
  @endsection
