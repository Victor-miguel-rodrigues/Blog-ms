<?php

namespace blog\simple\service\request;

class ApiRequest {


    public function Request(){
        $request = json_decode(file_get_contents('php://input'), true);

        if(!is_array($request)){
            return null;
        }

        foreach(['titulo', 'descricao', 'categoria', 'data'] as $camp){
            if(empty($request[$camp])){
                return null;
            }
        }

        return [
            "titulo" => $request['titulo'],
            "descricao" => $request['descricao'],
            "categoria" => $request['categoria'],
            "data" => $request['data'],
            "destaque" => $request['destaque'],
            "imagem" => $request['imagem']
        ];

    }
}