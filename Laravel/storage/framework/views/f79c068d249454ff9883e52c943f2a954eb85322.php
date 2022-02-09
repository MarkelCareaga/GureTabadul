;
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Matches</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/CrearMatch.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="cajaPrincipal">
    <?php echo $__env->make('layout.alertas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form action="<?php echo e(route('matches.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
        <h2 class="titulo">Crear Match</h2>
        <div>
        <div><label class="texto">Nombre del Match: &nbsp;</label><input class="caja" type="text" name="nombre" required></div>
        <div><label class="texto">Lugar de encuentro: &nbsp;</label><input class="caja" type="text" name="direccion" required></div>
        <div><label class="texto">Fecha de encuentro: &nbsp;</label><input class="caja" type="date" name="fecha" required></div>
        </div>
        <select class="user1" name="usuario1" id="primerSelect" required>
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user->id); ?>"><?php echo e($user->email); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    
        <select class="user2" name="usuario2" id="segundoSelect" required>
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user->id); ?>"><?php echo e($user->email); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <button class="boton" type="submit">Crear Match</i></button>
    
        
        </form>
        <div class="textoUsuario">
            <p>Usuario 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usuario 2</p>
        </div>
        <div class="textoInfo">
            <ul class="listaInfo">
                <li>Correo:</li>
                <li>Nombre:</li>
                <li>Telefono:</li>
                <li>Fecha Nacimiento:</li>
            </ul>
        </div>
        <div class="datos">
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="usuarios1" id="<?php echo e($user->email); ?>">
                <div><?php echo e($user->email); ?></div>
                <div><?php echo e($user->name); ?></div>
                <div><?php echo e($user->telefono); ?></div>
                <div><?php echo e($user->Fecha_nac); ?></div>
            </div>
    
    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="usuarios2" id="<?php echo e($user->email); ?>">
            <div><?php echo e($user->email); ?></div>
            <div><?php echo e($user->name); ?></div>
            <div><?php echo e($user->telefono); ?></div>
            <div><?php echo e($user->Fecha_nac); ?></div>
        </div>
    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</body>
</html>

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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marke\Downloads\LiveServer\UniServerZ\www\GureTabadul\Laravel\resources\views/voyager/matches/CrearMatch.blade.php ENDPATH**/ ?>