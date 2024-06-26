<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cards3;

class CadastrarController extends Controller
{
    // Regra de negócio: Validar e persistir no banco de dados
    public function salvar (Request $request){
        $request->validate([
            "nome" => "required|min:3|max:50",
            "codigo" => "required|min:9|max:10",
            "nivel" => "required|integer",
            "data" => "required|date",
            "atributo" => "required|min:4|max:10"

        ],[
           "nome.required" => "O campo deve ser preenchido com o nome de um card",
           "nome.min" => "O nome do card deve ter no mínimo 3 caractéres",
           "nome.max" => "O nome do card deve ter no máximo 50 caractéres",
           "codigo.required" => "O campo deve ser preenchido com o codigo de um card",
           "codigo.min" => "O codigo do card deve ter no mínimo 9 caractéres",
           "codigo.max" => "O codigo do card deve ter no máximo 10 caractéres",
           "nivel.required" => "O nível do card deve ser preenchido",
           "nivel.integer" => "O nível do card deve ser um número inteiro",
           "data.required" => "A data de lançamento do card deve ser preenchida",
           "data.date" => "A data deve ser válida",
           "atributo.required" => "O campo deve ser preenchido com o atributo de um card",
           "atributo.min" => "O atributo do card deve ter no mínimo 4 caractéres",
           "atributo.max" => "O atributo do card deve ter no máximo 10 caractéres",
        ]);
        $objeto = new Cards3();
        $objeto->fill($request->all());
        $objeto->save();

        //dd($request);
        return view("cadastrofeito");
    }
}
