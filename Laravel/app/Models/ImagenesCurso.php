<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenesCurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruta','curso_id',
    ];

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
