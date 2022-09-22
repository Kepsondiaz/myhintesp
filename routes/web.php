<?php

use App\Http\Controllers\AffichageController;
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
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/upload', [Uploader::class, 'index'])->name('upload');
    Route::post('/upload', [Uploader::class, 'store'])->name('upload');
    
    Route::get('getfiliere/{id}', [Uploader::class, 'getfiliere']);
    Route::get('getmatiere/{id}', [Uploader::class, 'getmatiere']);
    
    Route::get('/dashboard', [PrincipaleController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [PrincipaleController::class, 'index'])->name('dashboard');

    Route::get('/download/{url_fichier}', [Downloads::class, 'download'])->name('download');
    
    Route::get('/search', [PrincipaleController::class, 'search']);
    Route::post('/search', [PrincipaleController::class, 'search']);

    Route::prefix('admin')->group(function(){
        Route::resource('/dashboard', 'App\Http\Controllers\adminController');
        Route::get('/valider/{id}', [validerTmpFichiers::class, 'valider'])->name('valider');
        Route::get('/supprimer/{id}', [validerTmpFichiers::class, 'supprimer'])->name('supprimer');
    });
});

Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });



