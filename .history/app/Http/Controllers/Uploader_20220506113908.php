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
          if($request->fichier->extension() == 'pdf', $request->fichier->extension() == 'pdf', )
          $path = $request->fichier->store('myhintesp_public_doc');
          return view('dashboard', compact('departements'));
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
