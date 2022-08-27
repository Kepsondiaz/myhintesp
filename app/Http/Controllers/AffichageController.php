<?php

namespace App\Http\Controllers;

use App\Models\tmp_fichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AffichageController extends Controller
{
   public function index()
   {
      $tmp_fichiers = tmp_fichiers::with('matieres.filieres.departements')->paginate(6); 
        return view('welcome', compact('tmp_fichiers'));
   }
}
