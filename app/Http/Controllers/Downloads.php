<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Downloads extends Controller
{
    public function download($url_fichier)
    {
        
        $file_path = public_path('myhintesp_public_doc_tmp/'.$url_fichier);
        return response()->download($file_path);
       
    }
}
