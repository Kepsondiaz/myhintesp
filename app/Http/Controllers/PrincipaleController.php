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
                // requette pour retrouver les fichiers en fonction du dpt, de la filiere, de la matiere, du niveau et du semestre
                if(strtolower($request->departement) && strtolower($request->filieres) && strtolower($request->matieres) && strtolower($request->niveaux) && strtolower($request->semestres))
                {

                          $tmp_fichiers = DB::table('tmp_fichiers')
                          ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                          ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                          ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                          ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                          ->where('valider', 1)
                          ->where('departements.nom', $request->departement)
                          ->where('filieres.intitule', $request->filieres)
                          ->where('matieres.nom_matiere', $request->matieres)
                          ->where('matieres.niveau_matiere', $request->niveaux)
                          ->where('matieres.semestres', $request->semestres)
                          ->paginate(30);
                          return view('dashboard', compact('tmp_fichiers'));
                }

                // requette pour retrouver les fichiers en fonction de la filiere, de la matiere, du niveau et du semestre
                if(strtolower($request->filieres) && strtolower($request->matieres) && strtolower($request->niveaux) && strtolower($request->semestres))
                {
                          $tmp_fichiers = DB::table('tmp_fichiers')
                          ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                          ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                          ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                          ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                          ->where('valider', 1)
                          ->where('filieres.intitule', $request->filieres)
                          ->where('matieres.nom_matiere', $request->matieres)
                          ->where('matieres.niveau_matiere', $request->niveaux)
                          ->where('matieres.semestres', $request->semestres)
                          ->paginate(30);
                          return view('dashboard', compact('tmp_fichiers'));
                }

                // requette pour retrouver les fichiers en fonction du département, de la filieres, et de la matiere
                if(strtolower($request->departement) && strtolower($request->filieres) && strtolower($request->matieres))
                {
                          $tmp_fichiers = DB::table('tmp_fichiers')
                          ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                          ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                          ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                          ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                          ->where('valider', 1)
                          ->where('departements.nom', $request->departement)
                          ->where('filieres.intitule', $request->filieres)
                          ->where('matieres.nom_matiere', $request->matieres)
                          ->paginate(30);
                          return view('dashboard', compact('tmp_fichiers'));
                }

                // requette pour retrouvez les fichiers en fonction de la filiere et de la matiere
                if(strtolower($request->filieres) && strtolower($request->matieres))
                {
                          $tmp_fichiers = DB::table('tmp_fichiers')
                          ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                          ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                          ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                          ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                          ->where('valider', 1)
                          ->where('filieres.intitule', $request->filieres)
                          ->where('matieres.nom_matiere', $request->matieres)
                          ->paginate(30);
                          return view('dashboard', compact('tmp_fichiers'));
                }

                // requette pour retrouver les fichiers en fonction du departement et du niveau
                if(strtolower($request->departement) && strtolower($request->niveaux))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                               ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                               ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                               ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                               ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                               ->where('departements.nom', strtolower($request->departement))
                               ->where('matieres.niveau_matiere', strtolower($request->niveaux))
                               ->where('valider', 1)
                               ->paginate(30);
                               return view('dashboard', compact('tmp_fichiers'));

                }

                // requette pour retrouver les fichiers en fonction du departement et de la filiere
                if(strtolower($request->filieres) && strtolower($request->departement))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                               ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                               ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                               ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                               ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                               ->where('departements.nom', strtolower($request->departement))
                               ->where('filieres.intitule', $request->filieres)
                               ->where('valider', 1)
                               ->paginate(30);
                               return view('dashboard', compact('tmp_fichiers'));

                }

                // requette pour retrouver les fichiers en fonction du departement et de la matiere
                if(strtolower($request->matieres) && strtolower($request->departement))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                               ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                               ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                               ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                               ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                               ->where('departements.nom', strtolower($request->departement))
                               ->where('matieres.nom_matiere', $request->matieres)
                               ->where('valider', 1)
                               ->paginate(30);
                               return view('dashboard', compact('tmp_fichiers'));

                }


                // requette pour retrouver les fichiers en fonction du departement
                if(strtolower($request->departement))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                               ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                               ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                               ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                               ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                               ->where('departements.nom', strtolower($request->departement))
                               ->where('valider', 1)
                               ->paginate(30);
                        //        dd($tmp_fichiers);
                               return view('dashboard', compact('tmp_fichiers'));

                }
                // requette pour retrouver les fichiers en fonction de la filiere
                if(strtolower($request->filieres))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('filieres.intitule', strtolower($request->filieres))
                        ->where('valider', 1)
                        ->paginate(30);
                        return view('dashboard', compact('tmp_fichiers'));
                }

                // requette pour retrouver les fichiers en fonction de la matiere
                if(strtolower($request->matieres))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('matieres.nom_matiere', strtolower($request->matieres))
                        ->where('valider', 1)
                        ->paginate(30);
                        return view('dashboard', compact('tmp_fichiers'));
                }

                // requette pour retrouver les fichiers en fonction du niveau
                if(strtolower($request->niveaux))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('matieres.niveau_matiere', strtolower($request->niveaux))
                        ->where('valider', 1)
                        ->paginate(30);
                        return view('dashboard', compact('tmp_fichiers'));
                }

                // requette pour retrouver les fichiers en fonction du semestre
                if(strtolower($request->semestres))
                {
                        $tmp_fichiers = DB::table('tmp_fichiers')
                        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                        ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                        ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                        ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*')
                        ->where('matieres.semestres', strtolower($request->semestres))
                        ->where('valider', 1)
                        ->paginate(30);
                        return view('dashboard', compact('tmp_fichiers'));
                }


                // $tmp_fichiers = tmp_fichiers::with('matieres.filieres.departements')->where('valider', 1)->orderby('created_at', 'desc')->paginate(15);
                $tmp_fichiers = DB::table('tmp_fichiers')
                ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
                ->join('filieres', 'filieres.id', '=', 'matieres.filiere_id')
                ->join('departements', 'departements.id', '=', 'filieres.departement_id')
                ->select('departements.*','filieres.*','matieres.*', 'tmp_fichiers.*', 'tmp_size_fichier')
                ->where('valider', 1)
                ->inRandomOrder()
                ->paginate(15);
                // ->orderBy('tmp_fichiers.created_at', 'desc')

                return view('dashboard', compact('tmp_fichiers'));
        }

}
