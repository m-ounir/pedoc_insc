<?php

namespace App\Http\Controllers;

use App\Models\axes_sujet;
use App\Http\Requests\Storeaxes_sujetRequest;
use App\Http\Requests\Updateaxes_sujetRequest;

class AxesSujetController extends Controller
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
    public function store(Storeaxes_sujetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(axes_sujet $axes_sujet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(axes_sujet $axes_sujet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateaxes_sujetRequest $request, axes_sujet $axes_sujet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(axes_sujet $axes_sujet)
    {
        //
    }
}
