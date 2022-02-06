<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Events\EnviarMensaje;
use Auth;
class Chat extends Component
{

    public $email;
    public $mensaje;

    public function mount(){

        $this->email ="";
        $this->mensaje="";
    }
    

    public function render()
    {
        

        
        return view('livewire.chat');
    }

    public function updated($field){ 

        $this->validateOnly($field, [
            "nombre" => "required|min:3",
            "mensaje" => "required"

        ]);
    }

    public function Mensaje(){ 
        $this->validate([
            "nombre" => "required|min:3",
            "mensaje" => "required"
        ]);

        $this->emit("mensajeEnviado");

        $datos = [
            "usuario"=>$this->nombre,
            "mensaje"=>$this->mensaje,

        ];
        $this->emit("mensajeRecibido" , $datos);

        event(new EnviarMensaje($this->nombre, $this->mensaje));

    }
}
