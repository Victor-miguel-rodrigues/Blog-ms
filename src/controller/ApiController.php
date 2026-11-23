<?php

namespace blog\simple\controller;

use blog\simple\service\request\ApiRequest;
use Exception;

class ApiController {

    private ApiRequest $request;

    public function __construct()
    {
       $this->request = new ApiRequest();
    }

    public function all(){
        $dados = [
            'titulo' => "isso para dormi",
            'paragrafo' => "nonanenem"
        ];

        return json_encode($dados);
    }


    public function cadastrarNoticia(){
        
        $request = $this->request->Request();

        if ($request === null) {
            http_response_code(400);
            return json_encode(['erro' => 'Dados incorretos ou vazios']);
        }

        return json_encode($request);
        
    }
}