<?php

namespace blog\simple\controller;

class TestController {


    public function index(){
        require_once __DIR__ . "/../../public/view/index.html";
    }

    public function app(){
       require_once __DIR__ . "/../../public/view/login.html";
    }
}