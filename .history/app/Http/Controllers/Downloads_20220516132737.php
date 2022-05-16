<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Downloads extends Controller
{
    public function download($nom_fichier)
    {
        $file_path = public_path('myhintesp_public_doc/'.$nom_fichier);
        // dd($file_path);
        return response()->download( $file_path);
       
    }
}
