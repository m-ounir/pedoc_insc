<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\choix;
use App\Models\Formation;
use App\Models\AxesSujet;
use App\Models\Users;
use App\Http\Requests\StorechoixRequest;
use App\Http\Requests\UpdatechoixRequest;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\FormationController;



class ChoixController extends Controller
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
        // $user = Auth::user();
        // $choix = $user->choix;
        // $formation = $choix->formation;
        // $axes_sujet = $formation->axes_sujet; 
        // if ($choix && $formation && $axes_sujet) {
        // // if ($choix && $formation && $axes_sujet) {
        //     return view('choixes.index', compact('choix','formation','axes_sujet'));
        // }
        // else{
            
        //     return view('choixes.create');
        // }

    //     $user = Auth::user();
    //     $choix = $user->choix;

    //     if ($choix) {
    //         $formation = $choix->formation;
    //         $axes_sujet = $formation->axes_sujet;

    //         if ($formation && $axes_sujet) {
    //             return view('choixes.index', compact('choix', 'formation', 'axes_sujet'));
    //         }
    //     }

    //     // If no choix or related data is found, you can redirect to the create view or handle it as needed.
    //     return view('choixes.index');
        $user = Auth::user();
        $userId = Auth::id();

        // Retrieve the selected formation and axes for the user
        $data = DB::table('choixes')
            ->where('user_id', $userId)
            ->join('formations', 'choixes.formation_id', '=', 'formations.id')
            ->join('axes_sujets', 'choixes.axe_id', '=', 'axes_sujets.id')
            ->select('formations.formation_nom', 'axes_sujets.nom_axe','choixes.id')
            ->get();

            // $choix = DB::table('choixes')
            // ->where('user_id', $userId)->get();
            $choix = DB::table('choixes')->where('user_id', $userId)->first();
            
                if($choix){
                    return view('choixes.index', compact('data'));
                }else{
        
                    $formations = Formation::with('axes_sujet')->get();
                    return view('choixes.create', compact('formations'));
                }
                
            
        
        }

    /**
     * Show the form for creating a new resource.
     */
    // @return \Illuminate\Http\Response;

    public function create()
    {
        // $user = Auth::user();
        // $formations = FormationController::all();
        // $formations = \DB::table('formations')->get();
        // foreach ($formations as $frm) {
            //     $axes = \DB::table('axes_sujets')->where('formation_id',$frm->id)->get();
            // }
            // $axes = \DB::table('axes_sujets')->where('formation_id',$formations->id)->get();

            $user = Auth::user();
            $userId = Auth::id();
            $choix = DB::table('choixes')->where('user_id', $userId)->first();
            
            if($choix){
                $data = DB::table('choixes')
                ->where('user_id', $userId)
                ->join('formations', 'choixes.formation_id', '=', 'formations.id')
                ->join('axes_sujets', 'choixes.axe_id', '=', 'axes_sujets.id')
                ->select('formations.formation_nom', 'axes_sujets.nom_axe','choixes.id')
                ->get();

                return view('choixes.index', compact('data'));
            }else{
    
                $formations = Formation::with('axes_sujet')->get();
                return view('choixes.create', compact('formations'));
            }

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorechoixRequest $request)
    {
        // $user_id = $request->input('user_id');
        // $selectedAxesByFormation = $request->input('selected_axes');
        // foreach ($selectedAxesByFormation as $axe) {
        //     // $formation_id = DB::table('axes_sujets')->where('id',$axe->id)->get();
        //     $formation = Formation::with($axe)->get();

        //     Choix::create([
        //         'user_id' => $user_id,
        //         'formation_id' => $formation->id,
        //         'axe_id' => $axe->id,
        //     ]);
        // }

        // Validate the incoming request data if needed

        // $user_id = $request->input('user_id');
        // $formationIds = $request->input('formation_id');
        // $selectedAxesByFormation = $request->input('selected_axes');

        // // Process and store the selected axes by formation
        // foreach ($formationIds as $formationId) {
        //     $selectedAxes = $selectedAxesByFormation[$formationId] ?? [];
        //     // Loop through $selectedAxes and store them in your database with $formationId
        //     foreach ($selectedAxes as $axeId) {
        //         // Store the selected axe for the user and formation
        //        choix::create(['user_id' => $user_id, 
        //        'formation_id' => $formationId, 
        //        'axe_id' => $axeId]);
        //     }
        // }

        $user_id = $request->input('user_id');
        $selected_choices = $request->input('selected_choices');
    
        foreach ($selected_choices as $formation_id => $axes) {
            foreach ($axes as $axe_id => $selected) {
                // Check if the checkbox is selected
                if ($selected) {
                    // Store the selected choice in your database or perform any other desired action
                    // You can use $formation_id and $axe_id here
                    choix::create(['user_id' => $user_id, 
                        'formation_id' => $formation_id, 
                        'axe_id' => $axe_id]);
                }
            }
        }

            // $user_id = $request->input('user_id');
            // $formationIds = $request->input('formation_id');
            // $selectedAxes = $request->input('selected_axes');

            // Decode the JSON into an associative array
            // $selectedAxes = json_decode($selectedAxesJson, true);

            // Process and store the selected axes
            // foreach ($formationIds as $formationId) {
            //     if (isset($selectedAxes[$formationId])) {
            //         foreach ($selectedAxes[$formationId] as $axeId) {
            //             // Store the selected axe for the user and formation
            //             Choix::create(['user_id' => $user_id, 
            //             'formation_id' => $formationId, 
            //             'axe_id' => $axeId
            //             ]);
            //         }
            //     }
            // }

    // Redirect or return a response

        return  redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(choix $choix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(choix $choix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatechoixRequest $request, choix $choix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(choix $data)
    public function destroy()
    {
         // Get the authenticated user
        $user = Auth::user();
        $userId = $user->id;
        // // Retrieve the user's choix
        // $choix = $user->choix;

        // // Check if the user has made any selections
        // if ($choix) {}
        //     // Delete the selected axes related to the user's choix
        //     // $choix->axes()->detach();

        //     // You can also delete the Choix record itself if needed
        //     $choix->delete();

        //     // Redirect or return a response
        //     return redirect()->route('dashboard')->with('success', 'Selected axes have been deleted.');
        //     // return redirect()->route('choixes.index')->with('success', 'Selected axes have been deleted.');
        // }
        // return redirect()->route('choixes.index')->with('info', 'No selections to delete.');

        $choix = DB::table('choixes')->where('user_id', $userId)->delete();
        
        return redirect()->route('choixes.create');

    }
}
