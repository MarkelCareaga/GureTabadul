<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Skills extends Model
{
    use HasFactory;
    protected $table = 'skills';

    protected $fillable = [
        'nombre',
    ];

    public function usuarios(){
        return $this->belongsToMany(User::class,'skills_usuario','user_id', 'skills_id');
    }
}
