<?php

namespace App\Http\Controllers;

use App\Models\fichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PrincipaleController extends Controller
{
        public function index(Request $request)
        {
             $fichiers = DB::table('fichiers')
             ->join('matieres', 'matieres.id', '=', 'fichiers.matiere_id')
             ->select('matieres.nom_matiere', 'matieres.semestres', 'fichiers.*')
             ->orderBy('created_at', 'desc')
             ->paginate(6); // recupèrer les fichiers par pages  
            return view('dashboard', compact('fichiers'));
        }

        public function search(Request $request)
        {
                $name = $request->search;
                $fichiers_search = DB::table('fichiers')
                ->join('matieres', 'matieres.id', '=', 'fichiers.matiere_id')
                ->select('matieres.nom_matiere', 'matieres.semestres', 'fichiers.*')
                ->where('nom_fichier', 'like', '%'.$name.'%')
                ->paginate(2);
                if(count($fichiers_search)>=1)
                {
                        return view('search', compact('fichiers_search'));   
                }
                
        }

}
