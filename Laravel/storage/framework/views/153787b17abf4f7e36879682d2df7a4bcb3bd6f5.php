<?php $__env->startSection('Titulo','Talleres'); ?>
<?php $__env->startSection('contenido'); ?>
<p><?php echo e($taller->Título); ?></p>
<p><?php echo e($taller->Fecha_comienzo); ?></p>
<p><?php echo e($taller->Fecha_final); ?></p>
<p><?php echo e($taller->Descripción); ?></p>
<p><?php echo e($taller->Precio); ?></p>
<p><?php echo e($taller->Capacidad); ?></p>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.masterpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UniServerZ\UniServerZ2\www\GureTabadul\Laravel\resources\views/secciones/show.blade.php ENDPATH**/ ?>