<?php   
namespace App;
use Src\classes\ClassRoutes;

class Dispatch extends ClassRoutes{
    private $metodo;
    private $param=[];
    private $obj;

    public function __construct(){
        self::addController();
    }

    private function addController(){
        $rotaController = $this->getRota();
        $namespace = "App\Controller\\{$rotaController}";
        $this->obj = new $namespace;
        if(isset($this->parseUrl()[1])){
            self::addMetodo();
        }
    }
    private function addMetodo(){
        if(method_exists($this->obj,$this->parseUrl()[1])){
            $this->setMetodo("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->obj,$this->getMetodo()],$this->getParam());
        }
    }

    private function addParam(){

        $countArray=count($this->parseUrl());
            if($countArray > 2){
                foreach($this->parseUrl() as $key=>$value){
                    if($key>1){
                        
                        $this->setParam($this->param +=[$key=> $value]);
                    }
                }
            }
        }

    public function setMetodo($metodo){
        $this->metodo=$metodo;
    }

    protected function getMetodo(){
        return $this->metodo;
    }

    public function setParam($param){
        $this->param=$param;
    }
    protected function getParam(){
        return $this->param;
    }
}