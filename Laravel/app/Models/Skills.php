<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SkillsUsuario;

class Skills extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];
    public function skillsUsuario(){
        return $this->hasMany(SkillsUsuario::class);
    }
}
