<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\bac5;
use App\Http\Requests\Storebac5Request;
use App\Http\Requests\Updatebac5Request;

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
        Bac5::create([
            'user_id' => $request->input('user_id') ,
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
        $bac5->update([
            'user_id' => $request->input('user_id') ,
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
