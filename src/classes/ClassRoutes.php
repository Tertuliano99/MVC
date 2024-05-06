<?php
namespace Src\classes;
use Src\Traits\TraitUrlParser;
class ClassRoutes{
    use TraitUrlParser;
    private $rota;
    public function getRota()
    {
        $url=$this->parseUrl();
        $i=$url[0];
        $this->rota = array(
            ""=>"ControllerHome",
            "home"=>"ControllerHome",
            "sitemap"=>"ControllerSiteMap",
            "formando"=>"ControllerFormando"
        );

        if(array_key_exists($i,$this->rota)){
            //echo $i."<br>";
           // echo DIRREQ."<br>";
           //echo DIRREQ."app/controller/{$this->rota[$i]}.php"."<br>";
            if(file_exists(DIRREQ."app/controller/{$this->rota[$i]}.php")){
                return $this->rota[$i];
            }
            else{
                return "ControllerHome";
            }
        }
        else{
            return "Controller404";
        }
    }
}

