
<?php $__env->startSection('Titulo','Talleres'); ?>
<?php $__env->startSection('contenido'); ?>
<?php $__env->startSection('estilos'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/show_curso.css')); ?>">
<?php $__env->stopSection(); ?>
<div class="curso_detalles">
    <div class="fotoCurso">
        
    </div>
<p id="titulo"><?php echo e($curso->nombre); ?></p>
<p id="fecha_inicio"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;<?php echo e($curso->Fecha_ini); ?></p>
<p id="fecha_fin"><i class="fas fa-calendar-times"></i>&nbsp;&nbsp;<?php echo e($curso->Fecha_fin); ?></p>
<p id="descripcion"><i class="fas fa-info-circle"></i> <?php echo e($curso->descripcion); ?></p>
<p id="precio"><i class="fas fa-coins"></i>&nbsp;&nbsp;<?php echo e($curso->precio); ?>&nbsp;&nbsp;<i class="fas fa-euro-sign"></i></p>
<p id="capacidad"><i class="fas fa-female"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($curso->capacidad); ?></p>


<form method="POST" action="<?php echo e(route('cursos.update',[$curso->id])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <button class="btn btn-primary"type="submit"><i class="fas fa-plus-square"></i></button>
</form>
<form method="POST" action="<?php echo e(route('cursos.destroy',[$curso->id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-secondary"type="submit"><i class="fas fa-minus-square"></i></button>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.masterpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\OneDrive\Escritorio\Uniserver2.0\UniServerZ\www\GureTabadul\GureTabadul\Laravel\resources\views/curso/show.blade.php ENDPATH**/ ?>