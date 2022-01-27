<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'paises';

    public function usuarios(){
        return $this->hasMany(User::class);
    }
}
