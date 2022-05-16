<?php

namespace App\Http\Controllers;

use App\Models\fichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Monolog\Handler\ElasticsearchHandler;

class Uploader extends Controller
{

     public function index()
     {
          $departements = DB::table('departements')->get();
          return view('upload', compact('departements'));
     }


    public function store(Request $request)
    {
               $departements = DB::table('departements')->get();

               if (request()->hasFile('fichier'))
               {
                    // dd($request->fichier);
                    $date_courante = date('Y-m-d H:i:s');
                    $extenFileUpload = $request->fichier->getClientOriginalExtension();
                    $sizeFileUpload = $request->fichier->getSize();
                    $nameFileUpload = $request->fichier->getClientOriginalName();


                    $extensions = array('pdf', 'PDF', 'zip', 'ZIP');
                    try
                    {
                         
                    }
                    
               }
               else
               {

                    return view('upload', compact('departements'));
               }

    }

    // fonction concernant le dropdown menu
    public function getfiliere($id)
    {
               $filieres = DB::table('filieres')->where('departement_id', $id)->get();
               return  response()->json($filieres);
    }

    public function getmatiere($id)
    {
               $matieres = DB::table('matieres')->where('filiere_id', $id)->get();
               return  response()->json($matieres);
    }
}
