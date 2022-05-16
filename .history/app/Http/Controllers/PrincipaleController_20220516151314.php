<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PrincipaleController extends Controller
{
        public function index(Request $request)
        {
            $fichiers = DB::table('fichiers')->orderBy('created_at', 'desc')->get();
            $users = DB::table('users')
            join('')
            return view('dashboard', compact('fichiers'));
        }

}
