<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class axes_sujet extends Model
{
    use HasFactory;
    public function formations(){
        return $this->belongsTo(Formation::class);
    }


        protected $fillable = [
            'formation_id',
            'nom_axe',
            'encadrant',
            'co_encadrant',
            'etab',
            'structure',
        ];
}
