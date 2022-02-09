<?php
    Illuminate\Support\Facades\App::setLocale(session('idioma'));
?>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../../Nav/img/LogoTabadul_32px.jpg" alt=""></a>
    <a class="navbar-brand" href="#">Gure Tabadul</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul style="margin-left:55%;" class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="<?php echo e(route('inicio.index')); ?>"><?php echo e(__('traducciones.inicio')); ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo e(route('cursos.index')); ?>">Cursos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo e(route('taller.index')); ?>">Taller</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Euskera</a>
        </li>
        <?php if(!Auth::check()): ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo e(route('login')); ?>">Inicio Sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo e(route('register')); ?>">Registrarse</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="" onclick="event.preventDefault(); document.getElementById('logout').submit();">Cerrar sesion</a>
          <!-- Solo usuarios identificados -->
          <form id="logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display:none;">
          <?php echo csrf_field(); ?>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo e(route('perfil.index')); ?>">Ver perfil</a>
        </li>
        <?php endif; ?>

      </ul>

    </div>
  </div>
</nav>

<?php /**PATH C:\Users\marke\Downloads\LiveServer\UniServerZ\www\GureTabadul\Laravel\resources\views/layout/nav.blade.php ENDPATH**/ ?>