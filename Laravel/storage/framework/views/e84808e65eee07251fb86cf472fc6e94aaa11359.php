<div>
    <h5 class="mt-3"><strong>Chat con Administradora</strong></h5>
    <?php $__currentLoopData = $mensajes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mensaje): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($mensaje['usuario']); ?> - <?php echo e($mensaje['mensaje']); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('d963a927917a9d2b6446', {
          cluster: 'eu'
        });
    
        var channel = pusher.subscribe('GureTabadul-channel');
        channel.bind('GureTabadul-event', function(data) {
        //   alert(JSON.stringify(data));
          window.livewire.emit('MensajeRecibido',data)
        });
      </script>
</div>
<?php /**PATH D:\UniServerZ\UniServerZ\www\GureTabadul\Laravel\resources\views/livewire/chat-lista.blade.php ENDPATH**/ ?>