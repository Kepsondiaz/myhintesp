<?php

namespace App\Models;

use App\Models\fichiers;
use App\Models\filieres;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matieres extends Model
{
    use HasFactory;
    protected $fillable = ['filiere_id', 'nom_matiere', 'niveau_matiere', 'semestres'];
    
    public function tmp_fichiers()
    {
        return $this->hasMany(tmp_fichiers::class);
    }
    
    public function filieres()
    {
        return $this->belongsTo(filieres::class, 'filiere_id');
    }
}
