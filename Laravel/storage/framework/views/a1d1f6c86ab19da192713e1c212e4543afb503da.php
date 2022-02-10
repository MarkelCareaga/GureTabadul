
<?php $__env->startSection('Titulo','Cursos'); ?>
<?php $__env->startSection('contenido'); ?>
<?php $__env->startSection('estilos'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/curso.css')); ?>">
<?php $__env->stopSection(); ?>
<div class="cursos">
<?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card" style="width: 18rem;">
  <a href="<?php echo e(route('cursos.show',['curso'=>$curso])); ?>">

    <img class="imagen" src="storage/<?php echo e($curso->imagenes()->first()->ruta); ?>" class="card-img-top" alt="">

    </a>
    <div class="card-body">
      <h5 class="titulo"><?php echo e($curso->nombre); ?></h5>
      <p class="card-text"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;<?php echo e($curso->Fecha_ini); ?></p>
      <p class="card-text"><i class="fas fa-calendar-times"></i>&nbsp;&nbsp;<?php echo e($curso->Fecha_fin); ?></p>
      <p class="card-text"><i class="fas fa-info-circle"></i> <?php echo e($curso->descripcion); ?></p>
      <p class="card-text"><i class="fas fa-coins"></i>&nbsp;&nbsp;<?php echo e($curso->precio); ?>&nbsp;&nbsp;<i class="fas fa-euro-sign"></i></p>
      <p class="card-text"><i class="fas fa-female"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($curso->capacidad); ?></p>

    </div>
  </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.masterpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UniServerZ\UniServerZ2\www\GureTabadul\Laravel\resources\views/secciones/cursos.blade.php ENDPATH**/ ?>