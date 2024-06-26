<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cards3;

class XmlController extends Controller
{
    //Pegar todos os dados e gerar um XML

    public function gerarXML(){
        //Pegar os dados do banco de dados
        $dados = Cards3::all();
        //print_r($dados);

        return response()->view('data-xml',['registro' => $dados])->header('Content-Type','application/xml');
    }
}

