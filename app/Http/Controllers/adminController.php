<?php

namespace App\Http\Controllers;

use App\Models\matieres;
use App\Models\tmp_fichiers;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tmp_fichiers = tmp_fichiers::with('matieres.filieres.departements')->where('valider', 0)->orderby('created_at', 'desc')->get();
        return view('adminDashboard', ["tmp_fichiers" => $tmp_fichiers]);
    }

    public function valider($id)
    {
       tmp_fichiers::where('id', $id)->update(['valider' => 1]);
        return "fichier valider :)";
    }
    public function supprimer($id)
    {
       tmp_fichiers::where('id', $id)->delete();
        return "fichier supprimer :)";
    }

    
}
