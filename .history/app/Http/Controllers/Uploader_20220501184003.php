<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploader extends Controller
{
    public function index(Request $request)
    {
        if($request->hasFile('file') && $request->file('file')->extension() =  )
            $fichier = 'fichier vide';
        else
            $fichier = $request->file('file')->extension();
        return $fichier;
    }
}
