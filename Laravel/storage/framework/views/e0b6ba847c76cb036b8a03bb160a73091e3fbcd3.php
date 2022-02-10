
<?php $__env->startSection('Titulo','Talleres'); ?>
<?php $__env->startSection('estilos'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/show_taller.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="taller_detalles">
<p id="titulo"><?php echo e($taller->Título); ?></p>
<p id="fecha_inicio">Fecha inicio: <?php echo e($taller->Fecha_comienzo); ?></p>
<p id="fecha_fin">Fecha fin: <?php echo e($taller->Fecha_final); ?></p>
<p id="descripcion">Descripcion:</p> 
<p id="texto"> <?php echo e($taller->Descripción); ?></p>
     
<p id="precio">Precio: <?php echo e($taller->Precio); ?></p>
<p id="capacidad">Capacidad: <?php echo e($taller->Capacidad); ?></p>
<form method="POST" action="<?php echo e(route('taller.update',[$taller->id])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <button class="btn btn-primary"type="submit">Apuntarse</button>
</form>
<form method="POST" action="<?php echo e(route('taller.destroy',[$taller->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-secondary"type="submit">Desapuntarse</button>
</form>
</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.masterpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UniServerZ\UniServerZ2\www\GureTabadul\Laravel\resources\views/taller/show.blade.php ENDPATH**/ ?>