<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{

    protected $fillable = [
        'nome',
        'genero',
        'ano_lancamento',
        'duracao',
    ];
}
