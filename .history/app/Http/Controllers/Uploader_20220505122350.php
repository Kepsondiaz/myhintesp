<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Uploader extends Controller
{
    // public function  index(Request $request)
    // {
    //     return view('dashboard');
    // }
    
    public function index()
    {
       $departements = DB::table('departements')->get();
       $filieres = DB::table('filieres')->where('departement_id', $id)->get();
       return view('dashboard', compact('departements'));
       
    }

    public function getfiliere($id)
    {
         $filieres = DB::table('filieres')->where('departement_id', $id)->get();
         return  response()->json($filieres);
    }

    public function getmatieres($id)
    {
         $filieres = DB::table('matires')->where('departement_id', $id)->get();
         return  response()->json($filieres);
    }
}
