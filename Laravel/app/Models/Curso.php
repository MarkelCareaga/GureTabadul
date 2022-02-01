<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ImagenesCurso;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'Fecha_ini', 'Fecha_fin','precio','capacidad','descripcion',
    ];

    public function usuarios(){
        return $this->belongsToMany(User::class,'cursos_usuarios','user_id', 'curso_id');
    }

    public function imagenes(){
        return $this->hasMany(ImagenesCurso::class);
    }
}
