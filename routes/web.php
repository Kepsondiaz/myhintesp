<?php

use App\Http\Controllers\AffichageController;
use App\Http\Controllers\DepartementsFichiers;
use App\Http\Controllers\Downloads;
use App\Http\Controllers\PrincipaleController;
use App\Http\Controllers\Uploader;
use App\Http\Controllers\adminController;
use App\Http\Controllers\validerTmpFichiers;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', [AffichageController::class, 'index']);

 Route::middleware([
     'auth:sanctum', 'verified',
     config('jetstream.auth_session'),
     'verified'
 ])->group(function () {
     Route::get('/upload', [Uploader::class, 'index'])->name('upload');
     Route::post('/upload', [Uploader::class, 'store'])->name('upload');



     Route::get('/dashboard', [PrincipaleController::class, 'index'])->name('dashboard');
     Route::post('/dashboard', [PrincipaleController::class, 'index'])->name('dashboard');

     Route::get('/download/{url_fichier}', [Downloads::class, 'download'])->name('download');

     Route::get('/search', [PrincipaleController::class, 'search']);
     Route::post('/search', [PrincipaleController::class, 'search']);

     Route::prefix('tclqt')->group(function(){
         Route::get('/dashboard', 'App\Http\Controllers\adminController@index');
         Route::get('/valider/{id}', [adminController::class, 'valider'])->name('valider');
         Route::get('/supprimer/{id}', [adminController::class, 'supprimer'])->name('supprimer');
     });
 });

// Route::get('/upload', [Uploader::class, 'index'])->name('upload');
//     Route::post('/upload', [Uploader::class, 'store'])->name('upload');

//     Route::get('/genie-info-et-telecom-reseaux', [DepartementsFichiers::class, 'genieInfo'])->name('genie-info-et-telecom-reseaux');
//     Route::get('/genie-mecanique', [DepartementsFichiers::class, 'genieMeca'])->name('genie-mecanique');
//     Route::get('/genie-electrique', [DepartementsFichiers::class, 'genieElec'])->name('genie-electrique');
//     Route::get('/genie-civil', [DepartementsFichiers::class, 'genieCivil'])->name('genie-civil');
//     Route::get('/gcba', [DepartementsFichiers::class, 'gcba'])->name('gcba');
//     Route::get('/gestion', [DepartementsFichiers::class, 'gestion'])->name('gestion');





//     // Route::get('getfiliere/{id}', [Uploader::class, 'getfiliere']);
//     // Route::get('getmatiere/{id}', [Uploader::class, 'getmatiere']);

//     Route::get('/', [PrincipaleController::class, 'index'])->name('dashboard');
//     Route::post('/', [PrincipaleController::class, 'search'])->name('dashboard');

//     Route::get('/download/{url_fichier}', [Downloads::class, 'download'])->name('download');

//     Route::get('/search', [PrincipaleController::class, 'search']);
//     Route::post('/search', [PrincipaleController::class, 'search']);

//     Route::prefix('admin')->group(function(){
//         Route::resource('/dashboard', 'App\Http\Controllers\adminController');
//         Route::get('/valider/{id}', [validerTmpFichiers::class, 'valider'])->name('valider');
//         Route::get('/supprimer/{id}', [validerTmpFichiers::class, 'supprimer'])->name('supprimer');
//     });

Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });


