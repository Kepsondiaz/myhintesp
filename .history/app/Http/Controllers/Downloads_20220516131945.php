<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Downloads extends Controller
{
    public function download($url_fichier)
    {
        $file_path = public_path(''.$url_fichier);
        return response()->download( $file_path);
       dd($url_fichier);
    }
}
