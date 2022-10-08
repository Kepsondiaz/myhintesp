<?php

namespace App\Models;

use App\Models\matieres;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tmp_fichiers extends Model
{
    use HasFactory;
    protected $fillable = ['matiere_id', 'valider', 'tmp_size_fichier', 'tmp_nom_fichier', 'tmp_url_fichier'];
    
    public function matieres()
    {
        return $this->belongsTo(matieres::class, 'matiere_id');
    }
}
