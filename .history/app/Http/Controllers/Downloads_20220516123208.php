<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Downloads extends Controller
{
    public function index(Request $request, $fichier)
    {
       return view('download');
    }
}