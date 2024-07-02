<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function attatchement()
    {
        return $this->hasOne(attatchement::class);
    }

    public function Etatcivil()
    {
        return $this->hasOne(Etatcivil::class);
    }

    public function bac()
    {
        return $this->hasOne(bac::class);
    }

    public function bac3()
    {
        return $this->hasOne(bac3::class);
    }

    public function bac5()
    {
        return $this->hasOne(bac5::class);
    }
    public function choix()
    {
        return $this->hasMany(choix::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
