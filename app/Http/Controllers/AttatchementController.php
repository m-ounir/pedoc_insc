<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;


use App\Models\attatchement;
use App\Http\Requests\StoreattatchementRequest;
use App\Http\Requests\UpdateattatchementRequest;

class AttatchementController extends Controller
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

        $attatchements = DB::table('attatchements')
        ->where('user_id', $user->id)
        ->get();
        $attatchement = json_decode($attatchements, true);
        // $encodedData = base64_encode($attatchement);
        return view('attatchements.index', compact('attatchement'));
    //     $user = Auth::user();
    //     $attatchement = $user->attatchement;
    //     $encodedData = base64_encode($attatchement);
    //     if ($encodedData) {
    //         return view('attatchements.index', compact('encodedData'));
    //     }
    //     else{
            
    //         return view('attatchements.create');
    //     }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $attatchement = $user->attatchement;
        $encodedData = base64_encode($attatchement);
        if ($encodedData) {
        return view('attatchements.index' , compact('encodedData'));
        }
        else{
            return view('attatchements.create');
        }
        // return view('attatchements.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreattatchementRequest $request)
    {
        Attatchement::create([
            'user_id' => $request->input('user_id'),
            'cin' => $request->input('cin'),
            'cv' => $request->input('cv'),
            'bac' => $request->input('bac'),
            'bac3' => $request->input('bac3'),
            'note_bac3' => $request->input('note_bac3'),
            'bac5' => $request->input('bac5'),
            'note_bac5' => $request->input('note_bac5'),
        ]);


        return redirect()->route('choixes.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(attatchement $attatchement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(attatchement $attatchement)
    {
        $user = Auth::user();
        $attatchement = $user->attatchement;
        $encodedData = base64_encode($attatchement);
        if ($encodedData) {
            return view('attatchements.edit', compact('encodedData'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateattatchementRequest $request, attatchement $attatchement)
    {
        $attatchement->update([
            'user_id' => $request->input('user_id'),
            'cin' => $request->input('cin'),
            'cv' => $request->input('cv'),
            'bac' => $request->input('bac'),
            'bac3' => $request->input('bac3'),
            'note_bac3' => $request->input('note_bac3'),
            'bac5' => $request->input('bac5'),
            'note_bac5' => $request->input('note_bac5'),
        ]);


        return redirect()->route('choixes.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $deletedId)
    {
        $attatchment = DB::table('attachments')->find($deletedId);

        if ($attatchment) {
            DB::table('attachments')->where('id', $deletedId)->delete();
            return redirect()->route('attachments.index')->with('success', 'Attachment deleted successfully');
        } else {
            return redirect()->route('attachments.index')->with('error', 'Attachment not found');
        }
    
    }
}
