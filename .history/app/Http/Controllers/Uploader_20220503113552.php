<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Uploader extends Controller
{
    public function index(Request $request)
    {
       $departements = DB::table('departements')->get();
        dd($departements);
       return view('dashboard', compact($departements));
       
    }
}
