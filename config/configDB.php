<?php

namespace blog\simple\config;

use Exception;
use PDO;
use PDOException;

class configDB{

    public static $request;

    public static function RequisicaoDB()  {

            try{
                self::$request = new PDO("mysql:host={$_ENV['HOST']};dbname={$_ENV['DBNAME']}", "{$_ENV['USER']}", "{$_ENV['PaSSWORD']}", [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => PDO::FETCH_OBJ,
                    PDO::ATTR_CASE => PDO::CASE_NATURAL 
                ]);
            }catch (PDOException $e) {
                throw new Exception("Error Processing Request ".$e->getMessage(), 1);
            }
        return self::$request;
    }
}