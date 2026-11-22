<?php

namespace blog\simple\controller;

use Pecee\Http\Request;

class ApiController {

    public function all(){
        $dados = [
            'titulo' => "isso para dormi",
            'paragrafo' => "nonanenem"
        ];

        return json_encode($dados);
    }


    public function cadastrarNoticia(Request $request){
            
    }
}