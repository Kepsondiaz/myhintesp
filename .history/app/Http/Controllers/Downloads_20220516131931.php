<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Downloads extends Controller
{
    public function download($url_fichier)
    {
        $file_path = public_path('uploads/cv/'.$file);
        return response()->download( $file_path);
       dd($url_fichier);
    }
}
