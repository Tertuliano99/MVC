<?php
namespace App\Controller;

use App\Model\ModelFormando;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerFormando extends ClassRender implements InterfaceView{
    public $formando;
    public $dados=[];
    public function __construct(){
        $this->formando = new ModelFormando();
       // $this->formando->conexaoBD();
       
    }

    public function cadastro(){
        $this->dados['generos']=$this->formando->generos();
        $this->dados['periodos']=$this->formando->periodos();
        $this->dados['cursos']=$this->formando->cursos();
        $curso=$this->dados['cursos'][0];
        $this->dados['formacoes']=$this->formando->formacoes($curso['id']);
        $this->setDir("formando");
        $this->setFileView("cadastro");
        $this->setTitle("Cadastrar Formando");
        $this->setDescription("Pagina de cadastro de Formando");
        $this->setKeywords("ipvx,formando");
        $this->renderLayout();
    }

    public function listar(){
        $this->dados['formandos']=$this->formando->formandos();
        $this->setDir("formando");
        $this->setFileView("listar");
        $this->setTitle("Listar formando");
        $this->setDescription("Pagina de listagem de foramando no centro de formaçao IPVX ");
        $this->setKeywords("ipvx,Listar formando");
        $this->renderLayout();
    }
    public function save(){
        $this->formando->registo();
        $url=DIRPAGE.'formando/cadastro';
        header("Location:$url");    
    }

    public function delete($codigo){
        $result=$this->formando->delete($codigo);
        if($result==true){
            echo json_encode(["msg"=>$codigo,"status"=>200]);
        }
        else{
            echo json_encode(["msg"=>'Erro ao eliminar o registo',"status"=>201]);
        }
    }
    public function formacoes($curso=null){
        $this->dados['formacoes']=$this->formando->formacoes($curso);
        echo json_encode(['formacoes'=>$this->dados['formacoes'],"status"=>200]);
    }
}