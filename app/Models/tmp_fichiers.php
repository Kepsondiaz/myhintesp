<?php

namespace App\Models;

use App\Models\matieres;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tmp_fichiers extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function matieres()
    {
        return $this->belongsTo(matieres::class, 'matiere_id', 'id');
    }
}
