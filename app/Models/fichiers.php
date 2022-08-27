<?php

namespace App\Models;

use App\Models\matieres;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class fichiers extends Model
{
    use HasFactory;
    public function matieres()
    {
        return $this->belongsTo(matieres::class);
    }
}
