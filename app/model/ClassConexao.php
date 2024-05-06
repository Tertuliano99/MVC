<?php 
namespace App\Model;
use PDO;
abstract class ClassConexao{
    public function conexaoBD(){
        try {
            $servername = HOST;
            $username= USER;
            $password = PASS;
            $dbname=DB;
            $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //echo "Conexcao com Sucesso";
            return $conn;
        } catch (\Throwable $e) {
            //throw $th;
            echo "Erro de conexao <br>";
            return $e->getMessage();
        }
    }
}