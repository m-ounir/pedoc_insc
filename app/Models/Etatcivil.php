<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etatcivil extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cin',
        'code_masar',
        'date_naissance',
        'nom_fr',
        'prenom_fr',
        'nom_ar',
        'prenom_ar',
        'lieu_nais_fr', 
        'lieu_nais_ar',
        'pays_nais',
        'adress',
        'ville',
        'tel',
        'fonction',
        'situation_f',
        'sexe',
        'user_id'
    ];



}
