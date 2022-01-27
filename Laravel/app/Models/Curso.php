<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CursosUsuario;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function cursosUsuario(){
        return $this->hasMany(CursosUsuario::class);
    }
}
