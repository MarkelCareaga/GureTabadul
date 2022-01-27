<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
use App\Models\Pedido;

class LineasPedido extends Model
{
    protected $table = 'lineas_pedido';
    use HasFactory;

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }
}
