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
                // dd($request);
                $fichiers_search = DB::table('fichiers')
                ->where('nom_fichier', 'like', '%'.$request->search.'%')
                ->get();
                //  dd($fichiers_search);
                return view('search', compact(fichiers))
        }

}
