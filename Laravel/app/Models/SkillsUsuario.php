<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Skills;
use App\Models\User;

class SkillsUsuario extends Model
{
    protected $table = 'skills_usuario';
    use HasFactory;

    public function skill(){
        return $this->belongsTo(Skills::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }

}
