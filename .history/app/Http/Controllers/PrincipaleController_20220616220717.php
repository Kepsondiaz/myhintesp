<?php

namespace App\Http\Controllers;

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
             ->pa
             ->get();
            return view('dashboard', compact('fichiers')
                // [ 'fichiers'=>DB::table('fichiers')->paginate(6) ]
            );
        }

}
