;
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Match's</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/matches.css')); ?>">
</head>
<body>
    <div class="cajaPrincipal">
    <div class="titulo"><h3>Listado de Match's</h3>
        
    </div>
    <div class="flexbox-container">
        <?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="cajaMatch">
        <div><i class="fa-solid fa-user"></i>&nbsp;&nbsp;<?php echo e($match->nombre); ?></div>
        <div><i class="fa-solid fa-map-location-dot"></i>&nbsp;&nbsp;<?php echo e($match->direccion); ?></div>
        <div><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;<?php echo e($match->Fecha_encuentro); ?></div>
        <div><i class="fa-solid fa-1"></i>&nbsp;&nbsp;<?php echo e($match->usuario1->name); ?></div>
        <div><i class="fa-solid fa-2"></i>&nbsp;&nbsp;<?php echo e($match->usuario2->name); ?></div>
            <form action="<?php echo e(route('matches.destroy',$match)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="eliminar"  type="submit"><i class="fa-solid fa-trash-can"></i></button>
            </form>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="crear">
        <a class="link" href="<?php echo e(route('matches.create')); ?>"><button class="button"><i class="fa-solid fa-circle-plus">&nbsp;&nbsp;</i>Match</button></a>
    </div>
</div>
</body>
</html>










</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marke\Downloads\LiveServer\UniServerZ\www\GureTabadul\Laravel\resources\views/voyager/matches/matches.blade.php ENDPATH**/ ?>