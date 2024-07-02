<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



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
        $etatcivil = $user->etatcivil;

        $attatchement = $user->attatchement;

        // $attatchements = DB::table('attatchements')
        // ->where('user_id', $user->id)
        // ->get();
        // $attatchement = json_decode($attatchements, true);

        if($attatchement){
            return view('attatchements.index', compact('attatchement'));
        }else{
            return view('attatchements.create');
        }

        // $encodedData = base64_encode($attatchement);
        
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

        // $encodedData = base64_encode($attatchement);
        if ($attatchement) {
        return view('attatchements.index' , compact('attatchement'));
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
        $user = Auth::user();
        $attatchement = $user->attatchement;

        // $encodedData = base64_encode($attatchement);
        if ($attatchement) {
        return view('attatchements.index' , compact('attatchement'));
        }
        else{
            $request->validate([
            
                'cin' => 'required|mimes:pdf|max:13000',
                'cv' => 'required|mimes:pdf|max:13000',
                'bac' => 'required|mimes:pdf|max:13000',
                'bac3' => 'required|mimes:pdf|max:13000',
                'note_bac3' => 'required|mimes:pdf|max:13000',
                'bac5' => 'required|mimes:pdf|max:13000',
                'note_bac5' => 'required|mimes:pdf|max:13000',
            ],
            [
                
                'cin.required' => 'CIN  obligatoire.',
                'cin.max' => 'Taille maximal 13Mb.',
                'cin.mimes' => ' CIN doit être en format pdf.',
                'cv.required' => ' CV obligatoire.',
                'cv.max' => ' Taille maximal 13Mb.',
                'cv.mimes' => ' CV doit être en format pdf.',
                'bac.required' => ' BAC obligatoire',
                'bac.max' => 'Taille maximal 13Mb',
                'bac.mimes' => ' BAC doit être en format pdf.',
                'bac3.required' => ' BAC+3 obligatoire.',
                'bac3.max' => ' Taille maximal 13Mb.',
                'bac3.mimes' => 'BAC+3 doit être en format pdf.',
                'note_bac3.required' => 'Note BAC+3 obligatoire.',
                'note_bac3.max' => 'Taille maximal 13Mb.',
                'note_bac3.mimes' => ' Note BAC3 doit être en format pdf.',
                'bac5.required' => 'BAC+5 obligatoire.',
                'bac5.max' => 'Taille maximal 13Mb.',
                'bac5.mimes' => 'BAC+5 doit être en format pdf.',
                'note_bac5.required' => 'Note BAC+5 obligatoire.',
                'note_bac5.max' => 'Taille maximal 13Mb.',
                'note_bac5.mimes' => 'Note BAC+5 doit être en format pdf.',
            ]);
        
            // find the user here 
            $user = Auth::user();
            $etatcivil = $user->etatcivil;
    
            // find the formation here 
                // $choix_id = DB::table('choixes')
                // ->where('user_id', $userId)
                // ->join('formations', 'choixes.formation_id', '=', 'formations.id')
                // ->join('axes_sujets', 'choixes.axe_id', '=', 'axes_sujets.id')
                // ->select('choixes.id')
                // ->get();
    
            // store the data here 
            $userDirectory = 'user_documents/' . $user->id . "_". $etatcivil->cin;
            Storage::makeDirectory($userDirectory);
    
            // store files without names and cin 
            $cinPath = $request->file('cin')->storeAs(
                $userDirectory,
                'cin_' . $etatcivil->cin . '.pdf'
            );
            $cvPath = $request->file('cv')->storeAs(
                $userDirectory,
                'cv_'. $etatcivil->cin . '.pdf'
            );
            $bacPath = $request->file('bac')->storeAs(
                $userDirectory,
                'bac_'. $etatcivil->cin . '.pdf'
            );
            $bac3Path = $request->file('bac3')->storeAs(
                $userDirectory,
                'bac3_'. $etatcivil->cin . '.pdf'
            );
            $note_bac3Path = $request->file('note_bac3')->storeAs(
                $userDirectory,
                'note_bac3_'. $etatcivil->cin . '.pdf'
            );
            $bac5Path = $request->file('bac5')->storeAs(
                $userDirectory,
                'bac5_'. $etatcivil->cin . '.pdf'
            );
            $note_bac5Path = $request->file('note_bac5')->storeAs(
                $userDirectory,
                'note_bac5_'. $etatcivil->cin . '.pdf'
            );
    
            //create user attatchements  and store links 
            Attatchement::create([
                'user_id' => auth()->id(),
                'cin' => $cinPath,
                'cv' => $cvPath,
                'bac' => $bacPath,
                'bac3' => $bac3Path,
                'note_bac3' => $note_bac3Path,
                'bac5' => $bac5Path,
                'note_bac5' => $note_bac5Path,
            ]);
    
    
            return redirect()->route('choixes.create');
        }

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
        // $user = Auth::user();
        // $attatchement = $user->attatchement;
        // $encodedData = base64_encode($attatchement);
        // if ($encodedData) {
        //     return view('attatchements.edit', compact('encodedData'));
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateattatchementRequest $request, attatchement $attatchement)
    {
        // $attatchement->update([
        //     'user_id' => $request->input('user_id'),
        //     'cin' => $request->input('cin'),
        //     'cv' => $request->input('cv'),
        //     'bac' => $request->input('bac'),
        //     'bac3' => $request->input('bac3'),
        //     'note_bac3' => $request->input('note_bac3'),
        //     'bac5' => $request->input('bac5'),
        //     'note_bac5' => $request->input('note_bac5'),
        // ]);


        // return redirect()->route('choixes.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $deletedId)
    {
        
        $user = Auth::user();
        $userId = $user->id;
        $attatchement = $user->attatchement;
        $etatcivil = $user->etatcivil;

        // if($attatchement){
            $folderPathToDelete = 'user_documents/' . $user->id . "_". $etatcivil->cin;
            Storage::deleteDirectory($folderPathToDelete);
        // }

        $choix = DB::table('attatchements')->where('user_id', $userId)->delete();
        
        return redirect()->route('attatchements.create');
    
    }
}
