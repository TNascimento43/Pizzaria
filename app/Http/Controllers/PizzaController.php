<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Pizza as pizza;

class PizzaController extends Controller
{
    public function inserir_pizza(Request $request)
    {
        $rules = [
            'sabor' => 'required',
            'tamanho' => 'required',
            'preço' => 'required'
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $return['success'] = false;
            $return['data'] = $validator->errors()->all();
            return $return;
        }
        $return['success'] = true;

        $pizza = new pizza();
        $pizza->sabor = $request->sabor;
        $pizza->tamanho = $request->tamanho;
        $pizza->preço = $request ->preço;
        $pizza->save();
        $return['data'] = $pizza;
        return $return;
    }

    public function alterar_pizza(Request $request)
    {
        $rules = [
            'id_pizza' => 'required',
            'sabor' => 'required',
            'tamanho' => 'required',
            'preço' => 'required'
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $return['success'] = false;
            $return['data'] = $validator->errors()->all();
            return $return;
        }
        $pizza = pizza::find($request->id_pizza);
        if(!isset($pizza) || $pizza == ''){
            $return['success'] = false;
            return $return;
        }

        $return['success'] = true;
        $pizza->sabor = $request->sabor;
        $pizza->tamanho = $request->tamanho;
        $pizza->preço = $request->preço;
        $pizza->save();
        
        return $return;
    }

    public function get_pizzas()
    {
        $pizza = pizza::get();
        if(!isset($pizza) || $pizza == ''){
            $return['success'] = false;
            return $return;
        }
        $return['success'] = true;
        $return['data'] = [];
        $count = 0;
        foreach($pizza as $p)
        {
            $return['data'][$count]['id_pizza'] = $p->id_pizza;
            $return['data'][$count]['sabor'] = $p->id_sabor;
            $return['data'][$count]['tamanho'] = $p->tamanho;
            $return['data'][$count]['preço'] = $p->preço;
            $count ++;
        }

        return $return;
    }

    public function excluir_pizza(Request $request)
    {
        $id_pizza = $request->query("id_pizza");

        $retorno['success'] = true;
        $pizza = pizza::find($id_pizza);
        pizza::destroy($pizza);
        return $retorno;
    }
}
