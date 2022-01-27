<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Curso;

class CursosUsuario extends Model
{
    use HasFactory;

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
    public function usuario(){
        return $this->belongsTo(User::class);
    }

}
