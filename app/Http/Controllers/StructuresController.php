<?php

namespace App\Http\Controllers;

use App\Models\Structures;
use App\Http\Requests\StoreStructuresRequest;
use App\Http\Requests\UpdateStructuresRequest;

class StructuresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    // $structure = Structure::find(1);
    // $formation = $structure->formation; // Assuming the method name in the Structure model is 'formation'

    // $structuresWithFormation = Structure::with('formation')->get();

    

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStructuresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Structures $structures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Structures $structures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStructuresRequest $request, Structures $structures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Structures $structures)
    {
        //
    }
}
