<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InteresUsuario;

class Interes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];
    public function interes_usuario(){
        return $this->hasMany(InteresUsuario::class);
    }
}
