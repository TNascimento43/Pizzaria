<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $primaryKey = 'id_pedido';
    protected $fillable = [
        'telefone'
    ];

    public static  $rules = [
        'id_pedido' => 'required',
        'id_pizza' => 'required'
    ];
}
