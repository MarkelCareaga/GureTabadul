;
<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('matches.create')); ?>">Crear Match</a>
<?php $__currentLoopData = $matches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $match): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div><?php echo e($match->nombre); ?></div>
<div><?php echo e($match->direccion); ?></div>
<div><?php echo e($match->Fecha_encuentro); ?></div>
<div><?php echo e($match->usuario1->nombre); ?></div>
<div><?php echo e($match->usuario2->nombre); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UniServerZ\UniServerZ2\www\GureTabadul\Laravel\resources\views/voyager/matches/matches.blade.php ENDPATH**/ ?>