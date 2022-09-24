<?php

namespace App\Http\Controllers;


use App\Models\tmp_fichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PrincipaleController extends Controller
{
        public function index(Request $request)
        {

              $tmp_fichiers = tmp_fichiers::with('matieres.filieres.departements')->where('valider', 1)->orderby('created_at', 'desc')->paginate(15);
              return view('dashboard', compact('tmp_fichiers'));
        }

        public function search(Request $request)
        {
                $name_search = $request->search;
        //        $fichiers_search = DB::table('tmp_fichiers')
        //        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
        //        ->select('matieres.nom_matiere', 'matieres.semestres', 'tmp_fichiers.*')
        //        ->where('tmp_nom_fichier', 'like', $name)
        //        ->paginate(2);
                $fichiers_search = tmp_fichiers::with('matieres.filieres.departements')->where('tmp_nom_fichier', $name_search)->orderby('created_at', 'desc')->paginate(15); 
                return view('search', compact('fichiers_search'));  
        
        }

}
