<?php

namespace App\Http\Controllers;

use App\Models\tmp_fichiers;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class validerTmpFichiers extends Controller
{
    public function valider($id)
    {
       tmp_fichiers::where('id', $id)->update(['valider' => 1]);
        return "fichier valider :)";
    }
    public function supprimer($id)
    {
       tmp_fichiers::where('id', $id)->delete();
        return "fichier supprimer :)";
    }
}
