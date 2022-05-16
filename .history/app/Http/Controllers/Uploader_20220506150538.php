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
                    $sizeFileUpload = $request->fichier->getSize(); // taille du fichier qui sera uploader
                    $nameFileUpload = $request->fichier->getClientOriginalName(); // nom original du fichier qui sera uploader
                    // conndition pour uploader un fichier
                    if(($request->fichier->extension() == 'pdf' || $request->fichier->extension() == 'PDF' || $request->fichier->extension() == 'word' || $request->fichier->extension() == 'WORD') && $sizeFileUpload <= 300000)
                    {
                         $path = $request->fichier->store('myhintesp_public_doc');
                         
                         //preparer nos requêttes sql
                         DB::table('fichiers')->insert([
                              'url_fichier' => $path,
                              'nom_fichier' => $nameFileUpload,
                              'size_fichier' => $sizeFileUpload,
                              'user_id'
                          ]);
                         
                         return view('upload');    
                    }
                    else{echo 'extension non autorisée !';}
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
