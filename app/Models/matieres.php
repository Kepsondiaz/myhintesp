<?php

namespace App\Models;

use App\Models\fichiers;
use App\Models\filieres;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matieres extends Model
{
    use HasFactory;
    public function fichiers()
    {
        return $this->hasMany(fichiers::class);
    }

    public function tmp_fichiers()
    {
        return $this->hasMany(tmp_fichiers::class);
    }
    
    public function filieres()
    {
        return $this->belongsTo(filieres::class, 'filiere_id', 'id');
    }
}
