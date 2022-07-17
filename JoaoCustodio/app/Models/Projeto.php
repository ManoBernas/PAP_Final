<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    public function fotoProjetos(){
        return $this->hasMany(FotosProjetos::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
