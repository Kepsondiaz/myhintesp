<?php

namespace App\Http\Controllers;

use App\Models\fichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Monolog\Handler\ElasticsearchHandler;

class Uploader extends Controller
{
    // public function  index(Request $request)
    // {
    //     return view('dashboard');
    // }
    
    
    public function index(Request $request)
    {
               $departements = DB::table('departements')->get();
               
               if (request()->hasFile('fichier')) {
                    $extenFileUpload = $request->fichier->getClientOriginalExtension();
                    $sizeFileUpload = $request->fichier->getSize(); // taille du fichier qui sera uploader
                    $nameFileUpload = $request->fichier->getClientOriginalName(); // nom original du fichier qui sera uploader
                    // conndition pour uploader un fichier
                    if(($extenFileUpload == 'pdf' || $extenFileUpload == 'PDF' || $extenFileUpload == 'word' || $extenFileUpload == 'WORD') && $sizeFileUpload <= 300000)
                    {
                         $path = $request->fichier->store('myhintesp_public_doc');
                         
                         //  requête insertion d'un fichier dans la base de donnée
                         DB::table('fichiers')->insert([
                              'url_fichier' => $path,
                              'nom_fichier' => $nameFileUpload,
                              'size_fichier' => $sizeFileUpload,
                              'user_id' => $request->user()->id ,
                              'matiere_id' => $request->matieres,
                          ]);
                         
                         return view('upload');    
                    }
                    else{session()->flash('message', 'Ce type d\'extension n\'est pas autorisée )}
          }
               else{
                    
                    return view('dashboard', compact('departements'));
               }
       
    }

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
