<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'telefone';
    protected $fillable = [
        'nome',
        'endereco'
    ];
}
