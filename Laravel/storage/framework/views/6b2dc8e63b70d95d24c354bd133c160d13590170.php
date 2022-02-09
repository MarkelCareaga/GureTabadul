
<?php $__env->startSection('Titulo','Talleres'); ?>
<?php $__env->startSection('estilos'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/show_taller.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="taller_detalles">
    <div class="fotoTaller">
        
    </div>
<p id="titulo"><?php echo e($taller->Título); ?></p>
<p id="fecha_inicio"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;<?php echo e($taller->Fecha_comienzo); ?></p>
<p id="fecha_fin"><i class="fas fa-calendar-times"></i>&nbsp;&nbsp; <?php echo e($taller->Fecha_final); ?></p>

<p id="descripcion"><i class="fas fa-info-circle"></i>&nbsp; <?php echo e($taller->Descripción); ?></p>
     
<p id="precio"><i class="fas fa-coins"></i>&nbsp; <?php echo e($taller->Precio); ?>&nbsp;&nbsp;<i class="fas fa-euro-sign"></i></p>
<p id="capacidad"><i class="fas fa-female"></i>&nbsp;&nbsp;&nbsp; <?php echo e($taller->Capacidad); ?></p>
<form method="POST" action="<?php echo e(route('taller.update',[$taller->id])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <button class="btn btn-primary"type="submit"><i class="fas fa-plus-square"></i></button>
</form>
<form method="POST" action="<?php echo e(route('taller.destroy',[$taller->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-secondary"type="submit"><i class="fas fa-minus-square"></i></button>
</form>
</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.masterpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marke\Downloads\LiveServer\UniServerZ\www\GureTabadul\Laravel\resources\views/taller/show.blade.php ENDPATH**/ ?>