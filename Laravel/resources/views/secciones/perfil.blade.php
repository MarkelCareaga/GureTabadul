@extends ('layout.masterpage')
@section ('contenido')

<style>
  body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #3AA877;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
div.card-body{
  height: 509px;
  padding-top:89px;
}


</style>


<div class="container">
  <div class="main-body">

        <!-- Breadcrumb -->

        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                  <div class="mt-3">
                    <h4>{{$usuario->name}}</h4>

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body" >
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Nombre: </h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$usuario->name}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Correo</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$usuario->email}}
                  </div>
                </div>
                <hr>
                
                
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Pais: </h6>
                    
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="pais" id="pais" disabled>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Fecha nacimiento:</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="fecha_nac" id="fecha_nac" disabled>
                  </div>
                </div>

                <hr>
                <input type="button" name="botonEditar" value="Editar perfil" id="botonEditar" onclick="botonEditar()">
                <input type="submit" name="botonGuardar" value="Guardar" id="botonGuardar">
              </div>

            </div>

            

              </div>
              
            </div>



          </div>
        </div>

      </div>
  </div>
  <script>
    var pais=document.getElementById("pais");
    document.getElementById("botonEditar").addEventListener("click", function(e){
      pais.disabled=false;
    });
    var fechaNac=document.getElementById("fecha_nac");
    document.getElementById("botonEditar").addEventListener("click", function(e){
      fechaNac.disabled=false;
    });
    
  </script>
  @endsection
