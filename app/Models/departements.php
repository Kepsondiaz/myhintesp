<?php

namespace App\Models;

use App\Models\filieres;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departements extends Model
{
    use HasFactory;
    public function filieres()
    {
        return $this->hasMany(filieres::class);
    }
}
