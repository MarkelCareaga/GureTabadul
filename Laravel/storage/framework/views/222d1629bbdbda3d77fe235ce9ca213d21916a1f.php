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
</head>
<body>

</body>
</html>
<form action="" method="POST">
    <div><input type="text" name="nombre del encuentro"></div>
    <div><input type="text" name="nombre del encuentro"></div>
    <div><input type="text" name="nombre del encuentro"></div>

    <button type="submit">Crear Match</button>

    <select name="usuario1" id="primerSelect">
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($user->id); ?>"><?php echo e($user->email); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <select name="usuario2" id="segundoSelect">
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($user->id); ?>"><?php echo e($user->email); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    </form>
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

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UniServerZ\UniServerZ2\www\GureTabadul\Laravel\resources\views/voyager/matches/CrearMatch.blade.php ENDPATH**/ ?>