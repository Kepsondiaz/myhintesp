<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploader extends Controller
{
    public function index(Request $request)
    {
        if($request->hasFile('file'))
            $fichier = 'fic';
        else
            $fichier = $request->file('file')->extension();
        return $fichier;
    }
}
