<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Interes extends Model
{
    protected $table = 'intereses';
    use HasFactory;


    protected $fillable = [
        'nombre',
    ];

    public function usuarios(){
        return $this->belongsToMany(User::class,'intereses_usuarios','user_id', 'interes_id');
    }
}
