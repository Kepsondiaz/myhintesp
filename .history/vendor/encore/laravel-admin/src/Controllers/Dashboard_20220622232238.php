<?php

namespace Encore\Admin\Controllers;

use Encore\Admin\Admin;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Dashboard
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function title()
    {
        return view('admin::dashboard.title');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function dependencies()
    {
        $json = file_get_contents(base_path('composer.json'));

        $dependencies = json_decode($json, true)['require'];

        return Admin::component('admin::dashboard.dependencies', compact('dependencies'));
    }

    public static function users()
    {
        $users = DB::table('users')
        ->select('name', 'email')
        ->orderBy('name')
        ->get();
        return Admin::component('admin::dashboard.users', compact('users'));
    }

    public static function fichiers_tmp()
    {
        $fichier_tmp = DB::table('tmp_fichiers')
        ->join('matieres', 'matieres.id', '=', 'tmp_fichiers.matiere_id')
        ->select('matieres.nom_matiere', 'matieres.semestres', 'tmp_fichiers.*') 
        ->orderByDesc('created_at')       
        ->get();
        return Admin::component('admin::dashboard.tmp_fichier', compact('fichier_tmp'));
    }
}
