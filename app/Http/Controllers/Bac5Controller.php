<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\bac5;
use App\Http\Requests\Storebac5Request;
use App\Http\Requests\Updatebac5Request;
use App\Http\Controllers\AttatchementController;

class Bac5Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $bac5 = $user->bac5;
        if ($bac5) {
            return view('bac5s.index', compact('bac5'));
        }
        else{
            
            return view('bac5s.create');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $bac5 = $user->bac5;
        if ($bac5) {
            return view('bac5s.index', compact('bac5'));
        }
        else{
            
            return view('bac5s.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storebac5Request $request)
    {   
        $user = Auth::user();
        $bac5 = $user->bac5;
        if ($bac5) {
            return view('bac5s.index', compact('bac5'));
        }
        else{
            $request->validate([
                'annee_bac5' => 'required|date', 
                'type_dip' => 'required', 
                'etab_bac5' => 'required', 
                
                'diplome_bac5' => 'required', 
                'specialite_bac5' => 'required', 
                'moyen_bac5' => 'required|numeric', 
                's7'=> 'required|numeric',
                's8'=> 'required|numeric',
                's9'=> 'required|numeric',
                's10'=> 'required|numeric',
                'montion' => 'required', 
            ],
            [
                'annee_bac5.required' => ' Date  obligatoire.',
                'annee_bac5.date' => ' Format Date  incorrect.',
                'type_dip.required' => 'type obligatoire', 
                'etab_bac5.required' => 'etablissement obligatoire', 
                
                'diplome_bac5.required' => 'diplome obligatoire', 
                'specialite_bac5.required' => 'spécialité obligatoire', 
                'moyen_bac5.required' => 'moyenne obligatoire', 
                'moyen_bac5.numeric' => 'Type note.', 
                's7.required'=> 'note obligatoire',
                's7.numeric'=> 'Type note.',
                's8.required'=> 'note obligatoire',
                's8.numeric'=> 'Type note.',
                's9.required'=> 'note obligatoire',
                's9.numeric'=> 'Type note.',
                's10.required'=> 'note obligatoire',
                's10.numeric'=> 'Type note.',
                'montion.required' => 'mention obligatoire', 
            ]);
    
            Bac5::create([
                'user_id' => auth()->id() ,
                'annee_bac5' => $request->input('annee_bac5'),
                'type_dip' => $request->input('type_dip'),
                'etab_bac5' => $request->input('etab_bac5'),
                'diplome_bac5' => $request->input('diplome_bac5'),
                'specialite_bac5' => $request->input('specialite_bac5'),
                'moyen_bac5' => $request->input('moyen_bac5'),
                's7' => $request->input('s7'),
                's8' => $request->input('s8'),
                's9' => $request->input('s9'),
                's10' => $request->input('s10'),
                'montion' => $request->input('montion'),
            ]);
    
            return redirect()->route('attatchements.create');
    
           
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(bac5 $bac5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bac5 $bac5)
    {
        $user = Auth::user();
        $bac5 = $user->bac5;
        if ($bac5) {
                return view('bac5s.edit', compact('bac5'));
            }
                // return view('bac5s.edit', compact('bac5'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatebac5Request $request, bac5 $bac5)
    {
        $request->validate([
            'annee_bac5' => 'required|date', 
            'type_dip' => 'required', 
            'etab_bac5' => 'required', 
            
            'diplome_bac5' => 'required', 
            'specialite_bac5' => 'required', 
            'moyen_bac5' => 'required|numeric', 
            's7'=> 'required|numeric',
            's8'=> 'required|numeric',
            's9'=> 'required|numeric',
            's10'=> 'required|numeric',
            'montion' => 'required', 
        ],
        [
            'annee_bac5.required' => ' Date  obligatoire.',
            'annee_bac5.date' => ' Format Date  incorrect.',
            'type_dip.required' => 'type obligatoire', 
            'etab_bac5.required' => 'etablissement obligatoire', 
            
            'diplome_bac5.required' => 'diplome obligatoire', 
            'specialite_bac5.required' => 'spécialité obligatoire', 
            'moyen_bac5.required' => 'moyenne obligatoire', 
            'moyen_bac5.numeric' => 'Type note.', 
            's7.required'=> 'note obligatoire',
            's7.numeric'=> 'Type note.',
            's8.required'=> 'note obligatoire',
            's8.numeric'=> 'Type note.',
            's9.required'=> 'note obligatoire',
            's9.numeric'=> 'Type note.',
            's10.required'=> 'note obligatoire',
            's10.numeric'=> 'Type note.',
            'montion.required' => 'mention obligatoire', 
        ]);
        $bac5->update([
            'user_id' =>  auth()->id(),
            'annee_bac5' => $request->input('annee_bac5'),
            'type_dip' => $request->input('type_dip'),
            'etab_bac5' => $request->input('etab_bac5'),
            'diplome_bac5' => $request->input('diplome_bac5'),
            'specialite_bac5' => $request->input('specialite_bac5'),
            'moyen_bac5' => $request->input('moyen_bac5'),
            's7' => $request->input('s7'),
            's8' => $request->input('s8'),
            's9' => $request->input('s9'),
            's10' => $request->input('s10'),
            'montion' => $request->input('montion'),
        ]);

        return redirect()->route('attatchements.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bac5 $bac5)
    {
        //
    }
}
