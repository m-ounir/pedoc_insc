<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bac3 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'annee_bac3',
        'nombre_insc',
        'etab_bac3',
        'diplome_bac3',
        'specialite_bac3',
        'type_dip',
        'moyen_bac3',
        's1',
        's2',
        's3',
        's4', 
        's5',
        's6', 
        'montion',
    ];

}
