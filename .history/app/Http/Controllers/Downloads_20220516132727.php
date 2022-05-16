<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Downloads extends Controller
{
    public function download(url_fichier$)
    {
        $file_path = public_path('myhintesp_public_doc/'.$url_fichier);
        // dd($file_path);
        return response()->download( $file_path);
       
    }
}
