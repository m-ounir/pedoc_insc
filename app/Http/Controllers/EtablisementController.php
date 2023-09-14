<?php

namespace App\Http\Controllers;

use App\Models\Etablisement;
use App\Http\Requests\StoreEtablisementRequest;
use App\Http\Requests\UpdateEtablisementRequest;
use Illuminate\Http\Request;

class EtablisementController extends Controller
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
        $etablisements = Etablisement::all();
        // return view(view: 'etablisements.index', compact(var_name: 'etablisements'));
        // return view('etablisements.index', ['var_name' => $etablisements]);
        return view('etablisements.index', compact('etablisements'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etablisements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request  $request)
    // {
     
    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'etab_nom' => 'required|string|max:255',
    //     ]);

    //     // Create a new etablisment
    //     $etablisment = Etablisment::create($validatedData);

    //     return redirect()->back()->with('success', 'Etablisment created successfully.');
    
    // }
    public function store(StoreEtablisementRequest $request)
    {
        // Validation will be automatically performed by the form request

        // Create a new etablisment
        // $etablisment = Etablisement::create($request->validated());
         Etablisement::create([
            'etab_nom' => $request->input('name')
        ]);

        return  redirect()->route('etablisements.index');

        // return redirect()->back()->with('success', 'Etablisment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etablisement $etablisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */ 
        // @param \App\Models\Etablisement $etablisement
    //    @return \Illuminate\Http\Response 
    public function edit(Etablisement $etablisement)
    {
        
        return view('etablisements.edit', compact('etablisement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtablisementRequest $request, Etablisement $etablisement)
    {
        $etablisement->update([ 
            'etab_nom' => $request->input('name')
        ]);

        return redirect()->route('etablisements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etablisement $etablisement)
    {
        //
    }
}
