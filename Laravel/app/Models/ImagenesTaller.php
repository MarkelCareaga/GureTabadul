<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Taller;

class ImagenesTaller extends Model
{
    use HasFactory;
    protected $table = 'imagenes_talleres';

    protected $fillable = [
        'ruta','id_taller',
    ];

    public function taller(){
        return $this->belongsTo(Taller::class);
    }
}
