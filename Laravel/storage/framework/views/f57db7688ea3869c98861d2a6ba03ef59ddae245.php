
<?php $__env->startSection('contenido'); ?>
<?php $__env->startSection('estilos'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/perfil.css')); ?>">
<?php $__env->stopSection(); ?>



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
              <form action="<?php echo e(route("perfil.update",[$usuario->id])); ?>" method="POST" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>

              <div class="card-bodyR"  >
                <div id="miPerfil">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="nombre">Nombre:</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="nombre" id="nombre" value="<?php echo e($usuario->name); ?>"disabled >
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="correo">Correo:</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <p><?php echo e($usuario->email); ?></p>
                  </div>
                </div>
                <hr>

                <?php if(!empty($usuario->pais->nombre)): ?>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="pais">Pais: </h6>

                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="pais" id="pais" value="<?php echo e($usuario->pais->nombre); ?>" disabled>
                  </div>
                </div>
                <?php else: ?>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="pais">Pais: </h6>

                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="pais" id="pais"  disabled>
                  </div>
                </div>
                <?php endif; ?>

                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="fecha">Fecha nacimiento:</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="date" name="fecha_nac" id="fecha_nac" value="<?php echo e($usuario->Fecha_nac); ?>" disabled>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="telefono">Telefono:</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="number" name="telefono" id="telefono"  value="<?php echo e($usuario->telefono); ?>" disabled>
                  </div>
                </div>
                </form>

                <hr>
                <input type="button" name="botonEditar" value="Editar perfil" id="botonEditar" onclick="botonEditar()">
                <input type="submit" name="botonGuardar" value="Guardar" id="botonGuardar" onclick="botonGuardar()" disabled>
                <input type="button" name="botonCancelar" value="Cancelar" id="botonCancelar" onclick="botonCancelar()" disabled>
              </div>
              <div id="interesesDiv">
                <div><h2>Tus intereses</h2></div>
                <form action="<?php echo e(route("interes.update",$usuario->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                 <div class="agrega">Agrega tus intereses &nbsp;<input type="text" name="interes" class="intereses">
                 <button class="boton" type="submit"><i class="fa-solid fa-plus"></i></button></div>
                </form>
                  <div><?php $__currentLoopData = $usuario->intereses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul class="lista">
                  <li><?php echo e($interes->nombre); ?></li>
                </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
                <div id="conocimientosDiv">
                  <div>

                    <div><h2>Tus conocimientos</h2></div>
                    <div >
                        <form action="<?php echo e(route("skills.update",$usuario->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                         <div class="agrega">Agrega tus conocimientos &nbsp;<input type="text" name="gusto" class="intereses">
                         <button class="boton" type="submit"><i class="fa-solid fa-plus"></i></button></div></div>
                        </form>
                    </div>

                
                <div class="conocimientos">
                  <div> <?php $__currentLoopData = $usuario->skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <ul class="lista">
                    <li><?php echo e($skill->nombre); ?></li>
                  </ul>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
              </div>
            </div>
            <div id="talleresDiv">
              <div>

                <div><h2>Mis talleres</h2></div>
              <?php $__currentLoopData = $usuario->talleres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="talleresInfo">
                <h5 class="card-title"><?php echo e($taller->Título); ?></h5>
                <p class="card-text">Fecha comienzo: <?php echo e($taller->Fecha_comienzo); ?></p>
                <p class="card-text">Fecha final: <?php echo e($taller->Fecha_final); ?></p>
                <p class="card-text">Descripcion: <?php echo e($taller->Descripción); ?></p>
                <p class="card-text">Precio: <?php echo e($taller->Precio); ?></p>
                <p class="card-text">Capacidad: <?php echo e($taller->Capacidad); ?></p>

              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
          <div id="cursosDiv">
            <div>

              <div><h2>Mis cursos</h2></div>
            <?php $__currentLoopData = $usuario->cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="cursosInfo">
              <h5 class="card-title"><?php echo e($curso->nombre); ?></h5>
              <p class="card-text">Fecha comienzo: <?php echo e($curso->Fecha_ini); ?></p>
              <p class="card-text">Fecha final: <?php echo e($curso->Fecha_fin); ?></p>
              <p class="card-text">Descripcion: <?php echo e($curso->descripcion); ?></p>
              <p class="card-text">Precio: <?php echo e($curso->precio); ?></p>
              <p class="card-text">Capacidad: <?php echo e($curso->capacidad); ?></p>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>

        </div>

            </div>



              </div>

            </div>



          </div>
        </div>

        <div>














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
    $('#cursosDiv').css('display','none');
            }
        });


        $("#intereses").click(function (){
        $("#interesesDiv").css('display','block');
        if("a:contains('Ver intereses')"){
        $("#miPerfil").css('display','none');
        $("#conocimientosDiv").css('display','none');
        $('#talleresDiv').css('display','none');
        $('#cursosDiv').css('display','none');
            }
        });

        $("#conocimientos").click(function (){
        $('#conocimientosDiv').css('display','block');
        if("a:contains('Ver conocimientos')"){
        $("#interesesDiv").css('display','none');
        $("#miPerfil").css('display','none');
        $('#talleresDiv').css('display','none');
        $('#cursosDiv').css('display','none');
            }
        });
        $("#talleres").click(function (){
        $('#talleresDiv').css('display','block');
        if("a:contains('Ver mis talleres')"){
        $("#interesesDiv").css('display','none');
        $("#miPerfil").css('display','none');
        $("#conocimientosDiv").css('display','none');
        $('#cursosDiv').css('display','none');
            }
        });
        $("#cursos").click(function (){
        $('#cursosDiv').css('display','block');
        if("a:contains('Ver mis cursos')"){
        $("#interesesDiv").css('display','none');
        $("#miPerfil").css('display','none');
        $("#conocimientosDiv").css('display','none');
        $('#talleresDiv').css('display','none');
            }
        });

    });

  </script>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.masterpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\OneDrive\Escritorio\Uniserver2.0\UniServerZ\www\GureTabadul\GureTabadul\Laravel\resources\views/secciones/perfil.blade.php ENDPATH**/ ?>