<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['designacao', 'tipo'];
    //criação da relação entre os modelos Categoria e Produto
    public function fotos(){
        return $this->hasMany(Foto::class);
    }

    public function projeto(){
        return $this->hasMany(Projeto::class);
    }

}
