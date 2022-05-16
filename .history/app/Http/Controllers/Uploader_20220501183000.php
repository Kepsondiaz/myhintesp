<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploader extends Controller
{
    public function index(Request $request)
    {
        i
        $fichier = $request->file('file')->extension();
        return $fichier;
    }
}
