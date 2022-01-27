<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Taller;
use App\Models\User;

class TalleresUsuario extends Model
{
    use HasFactory;

    public function taller(){
        return $this->belongsTo(Taller::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
