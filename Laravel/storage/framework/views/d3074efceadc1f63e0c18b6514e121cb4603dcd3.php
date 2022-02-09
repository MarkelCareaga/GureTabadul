
<?php $__env->startSection('Titulo','Inicio'); ?>
<?php $__env->startSection('estilos'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/inicio.css')); ?>">
<link rel="stylesheet" href="<?php echo e(URL::asset('css/footer.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<img src="<?php echo e(url('img/FondoInicioGureTabadul.png')); ?>">
<h2></h2>

<div class="servicios">
    <h3 class="titulo">¿A que nos dedicamos?</h3>
    <h4 class="subtitulo">INTERCAMBIOS CULTURALES ENTRE MUJERES</h4>
    <div class="flexbox-containerP">
    <div class="flexbox-container">
        <div class="servicio1"><label><img class="corazon" src="<?php echo e(url('img/amor.png')); ?>"></label><h4 class="teeexto">Cultivar actitudes interculturales positivas.</h4></div>
        <div class="servicio2"><label><img class="libro" src="<?php echo e(url('img/libro.png')); ?>"></label><h4 class="teeexto">Mejorar el autoconcepto personal, cultural y académico.</h4></div>
    </div>
    <div class="flexbox-container">
        <div class="servicio3"><label><img class="igualdad" src="<?php echo e(url('img/tomados-de-la-mano.png')); ?>"></label><h4 class="teeexto">Fomentar la igualdad y el respeto mutuo.</h4></div>
        <div class="servicio4"><label><img class="unidad" src="<?php echo e(url('img/unidad.png')); ?>"></label><h4 class="teeexto">Potenciar la convivencia entre mujeres de diferentes culturas.</h4></div>
    </div>
    </div>
</div>
<div class="nosotros">
    <h3 class="titulo">¿Quienes Somos?</h3>
    <h4 class="subtitulo">GURE TABADUL: APRENDER Y COMPARTIR.</h4>
    <div class="flexbox-containerQ">
        <div class="texto">Conectamos a mujeres con inquietudes para que se enriquezcan entre ellas y así crecer como personas. Solo queremos que abras tu mente y contactes con otras mujeres de las que puedes aprender y a las que puedes enseñar.

            Estamos aquí para ayudarnos, porque podemos ser más de lo que somos solo si tenemos la intención.</div>

    </div>
</div>
<h3 class="titulo">Colaboradores</h3>
<?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="sponsors">
    <div class="sponsor">
    <img src="storage/<?php echo e($sponsor->ruta_img_sponsor); ?>">
    <p><?php echo e($sponsor->nombre); ?></p>
    <p><?php echo e($sponsor->descripción); ?></p>
    </div>   
</div>
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



















 








<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.masterpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\OneDrive\Escritorio\Uniserver2.0\UniServerZ\www\GureTabadul\GureTabadul\Laravel\resources\views/secciones/inicio.blade.php ENDPATH**/ ?>