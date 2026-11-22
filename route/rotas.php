<?php

use blog\simple\controller\ApiController;
use blog\simple\controller\TestController;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('blog\simple\controller');

SimpleRouter::get('crud-simples/', [TestController::class, 'index']);
SimpleRouter::get('crud-simples/app', [TestController::class, 'app']);


SimpleRouter::group(['prefix' => 'crud-simples/'], function () {
        SimpleRouter::get('api/posters', [ApiController::class, 'all']);
        SimpleRouter::post('api/cadastrarNoticiais', [ApiController::class, 'cadastrarNoticia']);
});

SimpleRouter::start();