<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matieres extends Model
{
    public function filieres()
    {
        return $this->belongsToMany(filieres::class);
    }
    use HasFactory;
}
