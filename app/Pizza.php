<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $primaryKey = 'id_pizza';
    protected $fillable = [
        'sabor',
        'tamanho',
        'preço'
    ];
}
