<?php

namespace App\Http\Controllers;

use App\Models\tmp_fichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AffichageController extends Controller
{
   public function index()
   {
      session()->flash('message', 'seule les personnes ayant accées au domaine esp.sn sont autorisées à créer un compte sur la platforme');
      return view('welcome');
   }
}
