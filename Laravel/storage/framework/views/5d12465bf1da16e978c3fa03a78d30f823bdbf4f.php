
<?php $__env->startSection('Titulo','Talleres'); ?>
<?php $__env->startSection('contenido'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<p><?php echo e($taller->Título); ?></p>
<p><?php echo e($taller->Fecha_comienzo); ?></p>
<p><?php echo e($taller->Fecha_final); ?></p>
<p><?php echo e($taller->Descripción); ?></p>
<p><?php echo e($taller->Precio); ?></p>
<p><?php echo e($taller->Capacidad); ?></p>

<form method="post" action="<?php echo e(route('taller.update',[$taller->id])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <button class="btn btn-primary"type="submit">Apuntarse</button>
</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.masterpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UniServerZ\UniServerZ\www\GureTabadul\Laravel\resources\views/Taller/show.blade.php ENDPATH**/ ?>