<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bac5 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'annee_bac5',
        'type_dip',
        'etab_bac5',
        'diplome_bac5',
        'specialite_bac5',
        'moyen_bac5',
        's7',
        's8',
        's9',
        's10', 
        'montion',
    ];
}
