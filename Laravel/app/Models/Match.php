<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Match extends Model
{
    protected $table = 'matchs';
    use HasFactory;

    public function usuario1(){
        return $this->belongsTo(User::class,'user1_id','id');
    }
    public function usuario2(){
        return $this->belongsTo(User::class,'user2_id','id');
    }

}
