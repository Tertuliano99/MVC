<?php
namespace app\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

/*
class ControllerHome{
    public function __construct(){
        echo "Bem vindo o controler Home";
    }
}*/

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct(){
      $this->setDir("Home");
      $this->setFileView("main");
      $this->setTitle("Pagina Inicial");
      $this->setDescription("Pagina Inicial do Site MVC");
      $this->setKeywords("mvc,home");
      $this->renderLayout();

    }
}