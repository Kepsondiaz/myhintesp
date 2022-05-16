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
    
    public function update(Request $request)
    {
        $path = $request->file()->store('avatars');
 
        return $path;
    }
    
    public function index()
    {
       
       $departements = DB::table('departements')->get();
       return view('dashboard', compact('departements'));
       
    }

    public function getfiliere($id)
    {
         $filieres = DB::table('filieres')->where('departement_id', $id)->get();
         return  response()->json($filieres);
    }

    public function getmatiere($id)
    {
         $matieres = DB::table('matieres')->where('filiere_id', $id)->get();
         return  response()->json($matieres);
    }
}
