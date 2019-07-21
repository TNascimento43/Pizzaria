<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PizzaEmPedido;

class PizzaEmPedidoController extends Controller
{
    public function novoPizzaEmPedido($id_pedido,$id_pizza)
    {
        $pizzaEmPedido = new PizzaEmPedido();
        $pizzaEmPedido->id_pizza = $id_pizza;
        $pizzaEmPedido->id_pedido = $id_pedido;
        $pizzaEmPedido->save();
        return;
    }

    public function getPizzaEmPedido($id_pedido){
        return PizzaEmPedido::where('id_pedido','=',$id_pedido)->get();
    }

    public function deletarPizzaEmPedido($id_pedido){
        PizzaEmPedido::where('id_pedido','=',$id_pedido)->delete();
        return;
    }
}
