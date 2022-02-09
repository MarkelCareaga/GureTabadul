<div>
    
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" wire:model="nombre">
        <?php $__errorArgs = ["nombre"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div> 
    <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <input type="text" class="form-control" id="mensaje" wire:model="mensaje">
        <?php $__errorArgs = ["mensaje"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div> 
    <button class="btn btn-primary" wire:click="Mensaje">Mensaje</button>

    <div style="position: absolute;" class="alert alert-success collapse" role="alert" id="avisoSuccess">Se ha enviado</div>
</div>

<script>

window.livewire.on('mensajeEnviado', function(){ 
    
    $("#avisoSuccess").fadeIn("slow");

    setTimeout(function(){
        $("#avisoSuccess").fadeOut("slow");
    }, 3000);

})

</script><?php /**PATH D:\UniServerZ\UniServerZ\www\GureTabadul\Laravel\resources\views/livewire/chat.blade.php ENDPATH**/ ?>