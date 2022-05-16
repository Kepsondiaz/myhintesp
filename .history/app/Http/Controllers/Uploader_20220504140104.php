<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Uploader extends Controller
{
    public function getdepartements(Request $request)
    {
       $departements = DB::table('departements')->get();
       return view('dashboard', compact('departements'));
       
    }

    public function getfilieres($id)
    {
      $filieres = DB::table('filieres')->where('departement_id', $id)->get();
       return(response()->json($filieres));
       echo json_encode(DB::table('filieres')->where('category_id', $id)->get());
    }
}
