<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LineasPedido;
use App\Models\User;

class Pedido extends Model
{
    use HasFactory;

    public function lineasPedido(){
        return $this->hasMany(LineasPedido::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }

}
