<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\InteresUsuario;
use App\Models\Pais;
use App\Models\SkillsUsuario;
use App\Models\CursosUsuario;
use App\Models\TalleresUsuario;

class User extends \TCG\Voyager\Models\User
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function interesesUsuario(){
        return $this->hasMany(InteresUsuario::class);
    }
    public function SkillsUsuario(){
        return $this->hasMany(SkillsUsuario::class);
    }
    public function cursosUsuario(){
        return $this->hasMany(CursosUsuario::class);
    }
    public function talleresUsuario(){
        return $this->hasMany(TalleresUsuario::class);
    }
    public function pais(){
        return $this->belongsTo(Pais::class);
    }

}
