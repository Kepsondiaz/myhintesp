<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PrincipaleController extends Controller
{
        public function index(Request $request)
        {
            return view('dash')
        }

}