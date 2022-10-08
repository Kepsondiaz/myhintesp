<?php

namespace App\Http\Controllers;

use App\Models\tmp_fichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AffichageController extends Controller
{
   public function index()
   {
      return view('welcome');
   }
}
