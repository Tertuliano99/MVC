<?php
namespace App\Model;
use PDO;
use PDOException;

class ModelFormando extends ClassConexao{
    private $conn;
    public function __construct(){

    }

    public function registo(){
    $this->conn=$this->conexaoBD();
     $conn=$this->conn;
     $conn->beginTransaction();
    try {
        $sql="INSERT INTO users(nome,email,password) VALUES(:nome,:email,:password)";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $password=password_hash("ipvx.123",PASSWORD_DEFAULT);
        $stmt->execute();
        $stmt=null;
        $lastInsertid=$conn->lastInsertId();
        $sql="INSERT INTO formandos(nome,dtnascimento,genero_id,telefone,morada,user_id)
        VALUES(:nome,:dtnascimento,:genero_id,:telefone,:morada,:user_id)";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":dtnascimento",$dtnascimento);
        $stmt->bindParam(":genero_id",$genero_id);
        $stmt->bindParam(":telefone",$telefone);
        $stmt->bindParam(":morada",$morada);
        $stmt->bindParam(":user_id",$user_id);
        $nome=$_POST['nome'];
        $dtnascimento=$_POST['dtnascimento'];
        $genero_id=$_POST['genero_id'];
        $telefone=$_POST['telefone'];
        $morada=$_POST['morada'];
        $user_id=$lastInsertid;
        $stmt->execute();
        $_SESSION['sucess']="Registo efetuado com sucesso";
        unset($_SESSION['error']);
        $conn->commit();
       } catch (PDOException $th) { 
        //throw $th;
        $_SESSION['error']=$th->getMessage();
        unset($_SESSION['sucess']);
        $conn->rollBack();
    }
   
        
    }

    public function generos(){
        //$conn=$this->conn=$this->conexaoBD();
        $this->conn=$this->conexaoBD();
        $conn=$this->conn;
        $stmt=$conn->prepare("SELECT * FROM generos ORDER BY designacao asc");
        
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dados=[];
        foreach($stmt->fetchAll() as $value){
            array_push($dados,$value);
        }

        return $dados;

    }

    public function periodos(){
        $this->conn=$this->conexaoBD();
        $conn=$this->conn;
        $stmt=$conn->prepare("SELECT * FROM periodos ORDER BY designacao asc");
        
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dados=[];
        foreach($stmt->fetchAll() as $value){
            array_push($dados,$value);
        }

        return $dados;

    }

    public function cursos(){
        $this->conn=$this->conexaoBD();
        $conn=$this->conn;
        $stmt=$conn->prepare("SELECT * FROM cursos ORDER BY designacao asc");
        
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dados=[];
        foreach($stmt->fetchAll() as $value){
            array_push($dados,$value);
        }

        return $dados;

    }

    public function formacoes($curso=null)
    {
        $this->conn=$this->conexaoBD();
        $conn=$this->conn;
        $sql="SELECT * FROM formacoes ORDER BY designacao asc";
        if($curso){
            $sql="SELECT * FROM formacoes WHERE curso_id=:curso ORDER BY designacao asc";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(":curso", $curso);
        }else{
            $stmt=$conn->prepare($sql);
        }       
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dados=[];
        foreach($stmt->fetchAll() as $value){
            array_push($dados,$value);
        }

        return $dados;

    }

    public function formandos(){
        $this->conn=$this->conexaoBD();
        $stmt=$this->conn->prepare("SELECT f.id cd_formando, f.nome formando,f.created_at dta_registo,f.*,u.*,g.designacao as genero 
                                    FROM formandos f,generos g,users u
                                    WHERE f.user_id=u.id 
                                    AND f.genero_id=g.id
                                    AND f.estado_id=1

                                    ORDER BY dta_registo desc"
                                    );
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $dados=[];

        foreach($stmt->fetchAll() as $value){
            array_push($dados,$value);
        }
        return $dados;
    }

    public function delete($codigo){
       
        try {
            $this->conn=$this->conexaoBD();
            $smt=$this->conn->prepare("UPDATE formandos f SET f.estado_id =:estado WHERE f.id=:id");
            $smt->bindParam(":id",$id);
            $smt->bindParam(":estado",$estado);
            $id=$codigo;
            $estado=2;
            $smt->execute();
            return true;                
            //code...
        } catch (PDOException $e) {
            return $e->getMessage();
            //throw $th;
        }
    }
}