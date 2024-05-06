<?php
header ("content-type:text/html; charset=utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");

use Src\classes\ClassRoutes;

class Teste extends ClassRoutes{
    public function __construct(){
        $r=$this->getRota();
        var_dump($r);
    }
}

$teste=new Teste();

