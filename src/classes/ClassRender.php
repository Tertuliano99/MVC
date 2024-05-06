<?php
namespace Src\Classes;
class ClassRender{
    private $dir;
    private $title;
    private $file_view;
    private $description;
    private $keywords;
    public function setDir($dir){
        $this->dir=$dir;

    }

    public function getDir(){
        return $this->dir;
    }

    public function setTitle($title){
        $this->title=$title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setFileView($file_view){
        $this->file_view=$file_view;
    }

    public function getFileView(){
        return $this->file_view;
    }

    public function setDescription($description){
        $this->description=$description;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setKeywords($keywords){
        $this->keywords=$keywords;
    }

    public function getKeywords(){
        return $this->keywords;
    }

    //Metodo responsavel pels a renderizaçao do layout
     
    public function renderLayout(){
        include_once(DIRREQ."app/view/Layout.php");
    }

    public function addHead(){

    }

    public function addHeader(){

    }
    public function addMain(){
        if (file_exists(DIRREQ."app/view/{$this->getDir()}/{$this->getFileView()}.php")){
            include_once(DIRREQ."app/view/{$this->getDir()}/{$this->getFileView()}.php");
           // echo "pagina Main";
        }
       /* else{
            echo "Nao e pagina Main <br>";
            echo DIRREQ."app/view/{$this->getDir()}/{$this->getFileView()}.php";
        }*/
    }

    public function addNavbar(){
        if(file_exists(DIRREQ."app/view/navBar.php"));
        include_once(DIRREQ."app/view/navBar.php");
    }

    public function addSideBar(){
        if(file_exists(DIRREQ."app/view/siderBar.php")){
            include_once(DIRREQ."app/view/siderBar.php");
        }
    }


}