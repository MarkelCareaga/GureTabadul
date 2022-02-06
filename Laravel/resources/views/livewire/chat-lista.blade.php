<div>
    <h5 class="mt-3"><strong>Chat con Administradora</strong></h5>
    @foreach ($mensajes as $mensaje)
    <li>{{$mensaje['usuario']}} - {{$mensaje['mensaje']}}</li>
    @endforeach
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
