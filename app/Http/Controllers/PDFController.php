<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Elibyy\TCPDF\Facades\TCPDF;
use PDF;
use TCPDF;


class PDFcontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        // $user = Auth::user();
        // $etatcivil = $user->etatcivil;
        // $userId = Auth::id();
        // // $usmslogo = '/img/USMSlogo.png';

        // // Retrieve the selected formation and axes for the user
        // $formation_axes = DB::table('choixes')
        //     ->where('user_id', $userId)
        //     ->join('formations', 'choixes.formation_id', '=', 'formations.id')
        //     ->join('axes_sujets', 'choixes.axe_id', '=', 'axes_sujets.id')
        //     ->select('formations.formation_nom', 'axes_sujets.nom_axe','axes_sujets.etab','choixes.id')
        //     ->get();

        //     $date = now()->addHours();

        //     $pdf = new TCPDF();
        //     $pdf->AddPage();
    
        //     // Retrieve data from the database
    
        //     // Generate HTML content with Bootstrap 5 and data
        //     $html = view('PDF', compact('user','etatcivil','formation_axes','date'))->render();
            
        //     $pdf->writeHTML($html, true, false, true, false, '');
    
        //     return $pdf;

        //     return view('PDF', compact('formation_axes','etatcivil','user','date'));


                // $filename = "inscription.pdf";
                // $data = [
                //     'title' => 'Fiche de Candidature en Doctorat 2023/2024',
                //     'date' => $date,
                //     'user' => $user, 
                //     'etatcivil' => $etatcivil,
                //     'formation_axes' => $formation_axes,
                // ];

                // $html = view()->make('PDFsimple' ,$data)->render();
                // $pdf = new TCPDF;
                // $pdf::SetTitle('inscription');
                // $pdf::AddPage();
                // $pdf::writeHTML($html,true,false,true,false,"");
                // $pdf::Output(public_path($filename), "F");
                
                
                // return response()->download(public_path($filename));

        // $filename = "inscription.pdf";
        // $data = [
        //     'title' => 'Fiche de Candidature en Doctorat 2023/2024',
        //     'date' => now()->addHours(),
        //     'user' => $user,
        //     'etatcivil' => $etatcivil,
        //     'formation_axes' => $formation_axes,
        //     // 'usmslogo' => $usmslogo,
        // ];

        // $html = view()->make('pdfSample' ,$data)->render();
        // $pdf = new TCPDF;
        // $pdf::SetTitle('Hello world');
        // $pdf::AddPage();
        // $pdf::writeHTML($html,true,false,true,false,"");
        // $pdf::Output(public_path($filename), "F");

        
        // $pdf->isRemoteEnabled = true;
        // $pdf->isHtml5ParserEnabled = true;
       

        // return response()->download(public_path($filename));
    }

    public function generatePDF()
    {
        // $pdf = PDFGenerator::generatePDF();

       
        // return $pdf->download('fiche_inscription.pdf');
    }


    public function pagetoprint(){

        
        $user = Auth::user();
        $etatcivil = $user->etatcivil;
        $userId = Auth::id();
        // $usmslogo = '/img/USMSlogo.png';

        // Retrieve the selected formation and axes for the user
        $formation_axes = DB::table('choixes')
            ->where('user_id', $userId)
            ->join('formations', 'choixes.formation_id', '=', 'formations.id')
            ->join('axes_sujets', 'choixes.axe_id', '=', 'axes_sujets.id')
            ->select('formations.formation_nom', 'axes_sujets.nom_axe','axes_sujets.etab','choixes.id')
            ->get();
        
        $date = now()->addHours();

        return view('pagetoprint', compact('user','etatcivil','formation_axes','date'));
    }

}
