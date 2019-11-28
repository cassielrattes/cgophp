<?php 
require_once "usuario.php";

class UsuarioDAO {
    private $con;
    public $tabela = "tb_usuarios";
    function __construct($con){
        $this->con = $con;
    }
    function save($usuario){
        $sql = "INSERT INTO ".$this->tabela." (rm,nome,senha) values (?,?,?,?,?)";
        $stmt = $this->con->prepare($sql); 
        $stmt->execute([$usuario->rm, $usuario->nome, $usuario->senha]);
    }

    function update($usuario){
        $sql = "UPDATE ".$this->tabela." SET nome=?, where rm=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$usuario->nome, $usuario->rm]);
    }

    function delete($rm){
        $sql = "DELETE FROM ".$this->tabela. " where rm=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$rm]);
    }

    function readAll(){
        $sql = "SELECT * FROM ".$this->tabela;
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Usuario");
        return $results;
        
    }

    function buscaPorUsuarioESenha($rm, $senha){
        
        $sql = "SELECT * FROM ".$this->tabela. " where rm=? and senha=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$rm,$senha]);
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Usuario");
        if(count($results) > 0){
            return $results[0];
        } else {
            return null;
        }
    }
}

?>