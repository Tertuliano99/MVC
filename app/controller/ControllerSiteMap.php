<?php

namespace App\Controller;
class ControllerSiteMap{
   /* public function __construct(){
        echo "Conttroler siteMap <br>";
    }*/
    public function teste(){
        echo "Metodo existente";
    }

    public function teste2($nome,$genero,$idade){
       // echo "Nome : ".$nome."<br> Genero: ".$genero."<br> Idade : ".$idade;
        echo $idade;
    }
    public function teste3($idade){
       // echo "Nome : ".$nome."<br> Genero: ".$genero."<br> Idade : ".$idade;
        echo $idade;
    }
}