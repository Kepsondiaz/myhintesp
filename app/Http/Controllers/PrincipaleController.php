<?php

namespace App\Http\Controllers;

use App\Models\matieres;
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
                if($request->departement)
                {
                        $fichiers_search = DB::table('tmp_fichiers')
                               ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                               ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                               ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                               ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                               ->where('departements.nom', $request->departement)
                               ->where('valider', 1)
                               ->paginate(15);
                        //        dd($fichiers_search);
                               return view('search', compact('fichiers_search'));
                               
                }
                if($request->filieres)
                {
                        $fichiers_search = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('filieres.intitule', $request->filieres)
                        ->where('valider', 1)
                        ->paginate(15);
                        return view('search', compact('fichiers_search'));
                }
                if($request->matieres)
                {
                        $fichiers_search = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('matieres.nom_matiere', $request->matieres)
                        ->where('valider', 1)
                        ->paginate(15);
                        return view('search', compact('fichiers_search'));
                }
                if($request->niveaux)
                {
                        $fichiers_search = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('matieres.niveau_matiere', $request->niveaux)
                        ->where('valider', 1)
                        ->paginate(15);
                        return view('search', compact('fichiers_search')); 
                }
                if($request->semestres)
                {
                        $fichiers_search = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('matieres.semestres', $request->semestres)
                        ->where('valider', 1)
                        ->paginate(15);
                        return view('search', compact('fichiers_search')); 
                }
                // if($request->departement && $request->filieres && $request->matieres && $request->niveaux && $request->semestres)
                // {
                //         $fichiers_search = DB::table('tmp_fichiers')
                //         ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                //         ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                //         ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                //         ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                //         ->where('valider', 1)
                //         ->where('departements.nom', $request->departement)
                //         ->where('filieres.intitule', $request->filieres)
                //         ->where('matieres.nom_matiere', $request->matieres)
                //         ->where('matieres.niveau_matiere', $request->niveaux)
                //         ->where('matieres.semestres', $request->semestres)
                //         ->paginate(2);
                //         dd($fichiers_search);
                //         return view('search', compact('fichiers_search'));     
                // }
        
        }

}
