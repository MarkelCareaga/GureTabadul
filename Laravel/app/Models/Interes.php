<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InteresUsuario;

class Interes extends Model
{
    use HasFactory;
    protected $table = 'intereses';

    protected $fillable = [
        'nombre',
    ];
    public function interesUsuario(){
        return $this->hasMany(InteresUsuario::class);
    }
}
