<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Uploader extends Controller
{
    public function getdepartements(Request $request)
    {
       $departements = DB::table('departements')->get();
       return view('dashboard', compact('departements', 'filieres'));
       
    }

    public function getfilieres($)
    {
        
    }
}
