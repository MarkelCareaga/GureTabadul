<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class ImagenProducto extends Model
{
    use HasFactory;
    protected $table = '_imagen_productos';

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
