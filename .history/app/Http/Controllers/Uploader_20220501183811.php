<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploader extends Controller
{
    public function index(Request $request)
    {
        if($request->hasFile(''))
            $fichier = $request->file('file')->extension();
        return $fichier;
    }
}
