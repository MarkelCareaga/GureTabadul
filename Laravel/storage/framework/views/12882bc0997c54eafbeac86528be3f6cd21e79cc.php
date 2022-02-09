;
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matches</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/matches.css')); ?>">
</head>
<body>
    <div class="titulo"><h3>Match</h3>
        
    </div>
    <div class="flexbox-container">
        <?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="cajaMatch">
        <div><?php echo e($match->nombre); ?></div>
        <div><?php echo e($match->direccion); ?></div>
        <div><?php echo e($match->Fecha_encuentro); ?></div>
        <div><?php echo e($match->usuario1->nombre); ?></div>
        <div><?php echo e($match->usuario2->nombre); ?></div>
        </div>
        <div>
            <form action="<?php echo e(route('matches.destroy',$match)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Eliminar Match</button>
            </form>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="boton">
        <a href="<?php echo e(route('matches.create')); ?>"><button class="button" value="Crear Match"></button></a>
    </div>
</body>
</html>










</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UniServerZ\UniServerZ\www\GureTabadul\Laravel\resources\views/voyager/matches/matches.blade.php ENDPATH**/ ?>