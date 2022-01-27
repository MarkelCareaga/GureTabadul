<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'sponsor';

    use HasFactory;
    protected $fillable = [
        'name', 'descripcion', 'ruta_img_sponsor',
    ];

}
