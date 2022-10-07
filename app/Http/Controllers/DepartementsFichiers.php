<?php

namespace App\Http\Controllers;

use App\Models\matieres;
use App\Models\tmp_fichiers;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class DepartementsFichiers extends Controller
{
    public function genieInfo()
    {
        return view('viewDepartements.genieInfo');
    }

    public function genieMeca()
    {
        return view('viewDepartements.genieInfo');
    }

    public function genieElec()
    {
        return view('viewDepartements.genieInfo');
    }

    public function genieCivil()
    {
        return view('viewDepartements.genieInfo');
    }

    public function gcba()
    {
        
        return view('viewDepartements.genieInfo');
    }

    public function gestion()
    {
        return view('viewDepartements.genieInfo');
    }
}
