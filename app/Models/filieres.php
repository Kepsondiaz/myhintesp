<?php

namespace App\Models;

use App\Models\matieres;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filieres extends Model
{
    use HasFactory;

    protected $fillable = ['departement_id', 'intitule'];
    public function matieres()
    {
        return $this->hasMany(matieres::class);
    }
    
    public function departements()
    {
        return $this->belongsTo(departements::class, 'departement_id');
    }
    

}
