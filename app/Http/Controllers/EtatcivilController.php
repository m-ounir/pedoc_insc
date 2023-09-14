<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Etatcivil;
use App\Http\Requests\StoreEtatcivilRequest;
use App\Http\Requests\UpdateEtatcivilRequest;


class EtatcivilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $etatcivil = $user->etatcivil;
        if ($etatcivil) {
            return view('etatcivils.index', compact('etatcivil'));
        }
        else{
            
            return view('etatcivils.create');
        }
        // $etatCivils = EtatCivil::all();
        // return view('etat_civils.index', compact('etatCivils'));
    }

    // $user = User::find(1);
    // $etatCivil = $user->etatCivil; // Assuming the method name in the User model is 'etatCivil'

    // $etatCivil = EtatCivil::find(1);
    // $user = $etatCivil->user; // Assuming the method name in the EtatCivil model is 'user'

    // Add other CRUD methods here (create, store, edit, update, delete)

    /**
     * Display a listing of the resource.
     */
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $etatcivil = $user->etatcivil;
        if ($etatcivil) {
            return view('etatcivils.index', compact('etatcivil'));
        }
        else{
            
            return view('etatcivils.create');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEtatcivilRequest $request)
    {
        Etatcivil::create([
            'cin'=> $request->input('cin'),
            'code_masar' => $request->input('code_masar'),
            'date_naissance' => $request->input('date_naissance'),
            'nom_fr' => $request->input('nom_fr'),
            'prenom_fr' => $request->input('prenom_fr'),
            'nom_ar' => $request->input('nom_ar'),
            'prenom_ar' => $request->input('prenom_ar'),
            'lieu_nais_fr' => $request->input('lieu_nais_fr'),
            'lieu_nais_ar' => $request->input('lieu_nais_ar'),
            'pays_nais' => $request->input('pays_nais'),
            'adress' => $request->input('adress'),
            'ville' => $request->input('ville'),
            'tel' => $request->input('tel'),
            'fonction' => $request->input('fonction'),
            'situation_f' => $request->input('situation_f'),
            'sexe' => $request->input('sexe'),
            'user_id' => $request->input('user_id'),
        ]);

        return  redirect()->route('bacs.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(Etatcivil $etatcivil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etatcivil $etatcivil)
    {
        $user = Auth::user();
        $etatCivil = $user->etatCivil;
        if ($etatCivil) {
            return view('etatcivils.edit', compact('etatcivil'));
        }


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtatcivilRequest $request, Etatcivil $etatcivil)
    {
        $etatcivil->update([
            'cin'=> $request->input('cin'),
            'code_masar' => $request->input('code_masar'),
            'date_naissance' => $request->input('date_naissance'),
            'nom_fr' => $request->input('nom_fr'),
            'prenom_fr' => $request->input('prenom_fr'),
            'nom_ar' => $request->input('nom_ar'),
            'prenom_ar' => $request->input('prenom_ar'),
            'lieu_nais_fr' => $request->input('lieu_nais_fr'),
            'lieu_nais_ar' => $request->input('lieu_nais_ar'),
            'pays_nais' => $request->input('pays_nais'),
            'adress' => $request->input('adress'),
            'ville' => $request->input('ville'),
            'tel' => $request->input('tel'),
            'fonction' => $request->input('fonction'),
            'situation_f' => $request->input('situation_f'),
            'sexe' => $request->input('sexe'),
            'user_id' => $request->input('user_id'),
        ]);

        return  redirect()->route('bacs.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etatcivil $etatcivil)
    {
        //
    }
}
