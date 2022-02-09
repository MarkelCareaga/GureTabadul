
<?php $__env->startSection('Titulo','Talleres'); ?>
<?php $__env->startSection('contenido'); ?>
<?php $__env->startSection('estilos'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/talleres.css')); ?>">
<?php $__env->stopSection(); ?>
<div class="talleres">
<?php $__currentLoopData = $talleres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card" style="width: 18rem;">

  <a class="imagen" href="<?php echo e(route('taller.show',['taller'=>$taller])); ?>">

        <?php if(empty($taller->imagenes)): ?>
            <?php
          $rutaImagen=$taller->imagenes->first()->ruta;
          echo '<img src="storage/'.$rutaImagen.'" class="card-img-top">'
          ?>
        <?php else: ?>
            <?php
            $rutaImagen="default.jpg";
          echo '<img src="storage/'.$rutaImagen.'" class="card-img-top">'
            ?>
          <?php endif; ?>

</a>

    <div class="card-body">
      <h5 class="titulo"><?php echo e($taller->Título); ?></h5>
      <p class="card-text"><i class="fas fa-calendar-check"></i>
        <?php echo e($taller->Fecha_comienzo); ?></p>
      <p class="card-text"><i class="fas fa-calendar-times"></i> <?php echo e($taller->Fecha_final); ?></p>
      <p class="card-text"><i class="fas fa-info-circle"></i> <?php echo e($taller->Descripción); ?></p>
      <p class="card-text"><i class="fas fa-coins"></i> <?php echo e($taller->Precio); ?>&nbsp;&nbsp;<i class="fas fa-euro-sign"></i></p>
      <p class="card-text"><i class="fas fa-female"></i> <?php echo e($taller->Capacidad); ?></p>
    </div>
  </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.masterpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marke\Downloads\LiveServer\UniServerZ\www\GureTabadul\Laravel\resources\views/secciones/Talleres.blade.php ENDPATH**/ ?>