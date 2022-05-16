<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matieres extends Model
{
    public function fili()
    {
        return $this->belongsToMany(fili::class);
    }
    use HasFactory;
}
