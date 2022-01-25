<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    use HasFactory;


    protected $filliable =[
        'Titulo', 'Fecha_comienzo','Fecha_final','Descripción','Precio','Capacidad',
    ];
    

}
