<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    public function etablisement()
    {
        return $this->belongsTo(Etablisement::class);
    }

    public function axes_sujet()
    {
        // return $this->hasMany(AxeSujet::class, 'formation_id');
        return $this->hasMany(axes_sujet::class);
    // }
    }

    public function choix()
    {
        return $this->belongsTo(choix::class);
    }

    //     $etablisement = Etablisement::find(1);
    // $formations = $etablisement->formations; // Assuming the method name in the Etablisement model is 'formations'

    // $formation = Formation::find(1);
    // $etablisement = $formation->etablisement; // Assuming the method name in the Formation model is 'etablisement'

    // $etablisementsWithFormations = Etablisement::with('formations')->get();
}
