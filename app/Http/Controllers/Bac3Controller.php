<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\bac3;
use App\Http\Requests\Storebac3Request;
use App\Http\Requests\Updatebac3Request;

class Bac3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


     // You can now access the relationship in your code. For example, to get the 'bac' of a user:
    // $user = User::find(1);
    // Or, to get the user of a 'bac3':
    // $bac3 = $user->bac3; // Assuming the method name in the User model is 'bac'
//     $bac3 = Bac3::find(1);
    // $user = $bac3->user; // Assuming the method name in the Bac model is 'user'

    // $usersWithBac3 = User::with('bac3')->get();
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $bac3 = $user->bac3;
        if ($bac3) {
            return view('bac3s.index', compact('bac3'));
        }
        else{
            
            return view('bac3s.create');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $bac3 = $user->bac3;
        if ($bac3) {
            return view('bac3s.index', compact('bac3'));
        }
        else{
            
            return view('bac3s.create');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storebac3Request $request)
    {
        $user = Auth::user();
        $bac3 = $user->bac3;
        if ($bac3) {
            return view('bac3s.index', compact('bac3'));
        }
        else{
            
            $request->validate([
                'annee_bac3' => 'required|date', 
                'nombre_insc' => 'required', 
                'etab_bac3' => 'required', 
                'diplome_bac3' => 'required', 
                'specialite_bac3' => 'required', 
                'type_dip' => 'required', 
                'moyen_bac3' => 'required|numeric', 
                's1'=> 'required|numeric',
                's2'=> 'required|numeric',
                's3'=> 'required|numeric',
                's4'=> 'required|numeric',
                's5'=> 'required|numeric',
                's6'=> 'required|numeric',
                'montion' => 'required', 
            ],
            [
                'annee_bac3.required' => ' Date  obligatoire.',
                'annee_bac3.date' => ' Format Date  incorrect.',
                'nombre_insc.required' => ' nombre inscription obligatoire.',
                'etab_bac3.required' => 'etablissement obligatoire', 
                'diplome_bac3.required' => 'diplome obligatoire', 
                'specialite_bac3.required' => 'spécialité obligatoire', 
                'type_dip.required' => 'type obligatoire', 
                'moyen_bac3.required' => 'moyenne obligatoire', 
                'moyen_bac3.numeric' => 'Type note.', 
                's1.required'=> 'note obligatoire',
                's1.numeric'=> 'Type note.',
                's2.required'=> 'note obligatoire',
                's2.numeric'=> 'Type note.',
                's3.required'=> 'note obligatoire',
                's3.numeric'=> 'Type note.',
                's4.required'=> 'note obligatoire',
                's4.numeric'=> 'Type note.',
                's5.required'=> 'note obligatoire',
                's5.numeric'=> 'Type note.',
                's6.required'=> 'note obligatoire',
                's6.numeric'=> 'Type note.',
                'montion.required' => 'mention obligatoire', 
            ]);
    
            Bac3::create([
                'user_id' => auth()->id() ,
                'annee_bac3' => $request->input('annee_bac3'),
                'nombre_insc' => $request->input('nombre_insc'),
                'etab_bac3' => $request->input('etab_bac3'),
                'diplome_bac3' => $request->input('diplome_bac3'),
                'specialite_bac3' => $request->input('specialite_bac3'),
                'type_dip' => $request->input('type_dip'),
                'moyen_bac3' => $request->input('moyen_bac3'),
                's1' => $request->input('s1'),
                's2' => $request->input('s2'),
                's3' => $request->input('s3'),
                's4' => $request->input('s4'),
                's5' => $request->input('s5'),
                's6' => $request->input('s6'),
                'montion' => $request->input('montion'),
            ]);
    
            return redirect()->route('bac5s.create');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(bac3 $bac3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bac3 $bac3)
    {
        $user = Auth::user();
        $bac3 = $user->bac3;
        if ($bac3) {
            return view('bac3s.edit', compact('bac3'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatebac3Request $request, bac3 $bac3)
    {
        $request->validate([
            'annee_bac3' => 'required|date', 
            'nombre_insc' => 'required', 
            'etab_bac3' => 'required', 
            'diplome_bac3' => 'required', 
            'specialite_bac3' => 'required', 
            'type_dip' => 'required', 
            'moyen_bac3' => 'required|numeric', 
            's1'=> 'required|numeric',
            's2'=> 'required|numeric',
            's3'=> 'required|numeric',
            's4'=> 'required|numeric',
            's5'=> 'required|numeric',
            's6'=> 'required|numeric',
            'montion' => 'required', 
        ],
        [
            'annee_bac3.required' => ' Date  obligatoire.',
            'annee_bac3.date' => ' Format Date  incorrect.',
            'nombre_insc.required' => ' nombre inscriptoin obligatoire.',
            'etab_bac3.required' => 'etablissement obligatoire', 
            'diplome_bac3.required' => 'diplome obligatoire', 
            'specialite_bac3.required' => 'spécialité obligatoire', 
            'type_dip.required' => 'type obligatoire', 
            'moyen_bac3.required' => 'moyenne obligatoire', 
            'moyen_bac3.numeric' => 'Type note.', 
            's1.required'=> 'note obligatoire',
            's1.numeric'=> 'Type note.',
            's2.required'=> 'note obligatoire',
            's2.numeric'=> 'Type note.',
            's3.required'=> 'note obligatoire',
            's3.numeric'=> 'Type note.',
            's4.required'=> 'note obligatoire',
            's4.numeric'=> 'Type note.',
            's5.required'=> 'note obligatoire',
            's5.numeric'=> 'Type note.',
            's6.required'=> 'note obligatoire',
            's6.numeric'=> 'Type note.',
            'montion.required' => 'mention obligatoire', 
        ]);

        $bac3->update([
            'user_id' => auth()->id() ,
            'annee_bac3' => $request->input('annee_bac3'),
            'nombre_insc' => $request->input('nombre_insc'),
            'etab_bac3' => $request->input('etab_bac3'),
            'diplome_bac3' => $request->input('diplome_bac3'),
            'specialite_bac3' => $request->input('specialite_bac3'),
            'type_dip' => $request->input('type_dip'),
            'moyen_bac3' => $request->input('moyen_bac3'),
            's1' => $request->input('s1'),
            's2' => $request->input('s2'),
            's3' => $request->input('s3'),
            's4' => $request->input('s4'),
            's5' => $request->input('s5'),
            's6' => $request->input('s6'),
            'montion' => $request->input('montion'),
        ]);

        return redirect()->route('bac5s.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bac3 $bac3)
    {
        //
    }
}
