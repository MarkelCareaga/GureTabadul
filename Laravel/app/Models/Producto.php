<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImagenProducto;
use App\Models\LineasPedido;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreProducto', 'descripción', 'precio','stock',
    ];
    public function Imagen(){
        return $this->hasMany(ImagenProducto::class);
    }

    public function lineasPedido(){
        return $this->hasMany(LineasPedido::class);
    }
}
