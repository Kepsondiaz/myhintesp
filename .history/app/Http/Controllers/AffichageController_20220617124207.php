<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AffichageController extends Controller
{
   public function index()
   {
      $fichiers = DB::table('fichiers')
      ->join('matieres', 'matieres.id', '=', 'fichiers.matiere_id')
      ->select('matieres.nom_matiere', 'matieres.semestres', 'fichiers.*')
      ->orderBy('created_at', 'desc')
      ->paginate(6); // recupèrer les fichiers par pages  
        return view('welcome', compact($fichiers));
   }
}
