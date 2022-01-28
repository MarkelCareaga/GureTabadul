<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interes;
use App\Models\User;

class InteresUsuario extends Model
{
    use HasFactory;

    protected $table = 'intereses_usuarios';

    protected $fillable = [
        'user_id', 'interes_id',
    ];

    public function usuario(){
        return $this->belongsTo(User::class);
    }
    public function interes(){
        return $this->belongsTo(Interes::class);
    }
}
