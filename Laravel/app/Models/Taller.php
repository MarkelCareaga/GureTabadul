<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Taller extends Model
{
    use HasFactory;
    protected $table = 'talleres';
    
    

    protected $filliable =[
        'Título', 'Fecha_comienzo','Fecha_final','Descripción','Precio','Capacidad',
    ];
    
    public function getRouteKeyName()
    {
        return 'Título';
    }

    public function usuarios(){
        return $this->belongsToMany(User::class,'talleres_usuarios','id_taller', 'user_id');
    }
    public function imagenes(){
        return $this->hasMany(ImagenesTaller::class,'id_taller','id');
    }

}
