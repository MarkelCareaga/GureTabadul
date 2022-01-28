<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CursosUsuario;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'Fecha_ini', 'Fecha_fin','precio','capacidad','descripcion',
    ];

    public function cursosUsuario(){
        return $this->hasMany(CursosUsuario::class);
    }
}
