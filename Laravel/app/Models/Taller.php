<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TalleresUsuario;
use App\Models\ImagenesTaller;

class Taller extends Model
{
    use HasFactory;
    protected $table = 'talleres';

    protected $filliable =[
        'Titulo', 'Fecha_comienzo','Fecha_final','Descripción','Precio','Capacidad',
    ];

    public function talleresUsuario(){
        return $this->hasMany(TalleresUsuario::class);
    }
    public function imagenes(){
        return $this->hasMany(ImagenesTaller::class);
    }

}
