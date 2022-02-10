<?php $__env->startSection('Titulo','Sponsors'); ?>
<?php $__env->startSection('contenido'); ?>
<h2>Esta es la pagina de sponsors</h2>
<?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div id="sponsors">
<img src=<?php echo e($sponsor->ruta_img_sponsor); ?>>
<p>$sponsor->nombre</p>
<p>$sponsor->descripción</p>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.masterpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UniServerZ\UniServerZ2\www\GureTabadul\Laravel\resources\views/secciones/sponsors.blade.php ENDPATH**/ ?>