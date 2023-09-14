<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\bac;
use App\Http\Requests\StorebacRequest;
use App\Http\Requests\UpdatebacRequest;

class BacController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // You can now access the relationship in your code. For example, to get the 'bac' of a user:
    // $user = User::find(1);
    // Or, to get the user of a 'bac':
    // $bac = $user->bac; // Assuming the method name in the User model is 'bac'
//     $bac = Bac::find(1);
    // $user = $bac->user; // Assuming the method name in the Bac model is 'user'

    // $usersWithBac = User::with('bac')->get();
    //


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $bac = $user->bac;
        if ($bac) {
            return view('bacs.index', compact('bac'));
        }
        else{
            
            return view('bacs.create');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $bac = $user->bac;
        if ($bac) {
            return view('bacs.index', compact('bac'));
        }
        else{
            
            return view('bacs.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebacRequest $request)
    {
        Bac::create([
            'user_id' => $request->input('user_id') ,
            'annee_bac' => $request->input('annee_bac'),
            'type_bac' => $request->input('type_bac'),
            'moyen'  => $request->input('moyen'),
            'mention' => $request->input('mention'),
        ]);

        return redirect()->route('bac3s.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(bac $bac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bac $bac)
    {
        $user = Auth::user();
        $bac = $user->bac;
        if ($bac) {
            return view('bacs.edit', compact('bac'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebacRequest $request, bac $bac)
    {
        $bac->update([
            'user_id' => $request->input('user_id') ,
            'annee_bac' => $request->input('annee_bac'),
            'type_bac' => $request->input('type_bac'),
            'moyen'  => $request->input('moyen'),
            'mention' => $request->input('mention'),
        ]);

        return redirect()->route('bac3s.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bac $bac)
    {
        //
    }
}
