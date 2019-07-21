<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzaEmPedido extends Model
{
    protected $primaryKey = 'id_pizza_pedido';
    protected $fillable = [
        'id_pizza',
        'id_pedido'
    ];
}
