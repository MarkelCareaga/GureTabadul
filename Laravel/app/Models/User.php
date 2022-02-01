<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Interes;
use App\Models\Pais;
use App\Models\Skills;
use App\Models\Curso;
use App\Models\Taller;
use App\Models\Match;

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
    public function intereses(){
        return $this->belongsToMany(Interes::class,'intereses_usuarios','user_id', 'interes_id');
    }
    public function Skills(){
        return $this->belongsToMany(Skills::class,'skills_usuario','user_id', 'skills_id');
    }
    public function cursos(){
        return $this->belongsToMany(Curso::class,'cursos_usuarios','user_id', 'curso_id');
    }
    public function talleres(){
        return $this->belongsToMany(Taller::class,'talleres_usuarios','id_taller', 'user_id');
    }
    public function matchs(){
        return $this->hasMany(Match::class,'matchs','user1_id', 'id');
    }



}
