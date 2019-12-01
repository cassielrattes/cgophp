<?php 
require_once "usuario.php";

class UsuarioDAO {
    private $con;
    public $tabela = "tb_usuarios";
    function __construct($con){
        $this->con = $con;
    }
    function save($usuario){
        $sql = "INSERT INTO ".$this->tabela." (id,nome,senha) values (?,?,?,?,?)";
        $stmt = $this->con->prepare($sql); 
        $stmt->execute([$usuario->id, $usuario->nome, $usuario->senha]);
    }

    function update($usuario){
        $sql = "UPDATE ".$this->tabela." SET nome=?, where id=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$usuario->nome, $usuario->id]);
    }

    function delete($id){
        $sql = "DELETE FROM ".$this->tabela. " where id=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$id]);
    }

    function readAll(){
        $sql = "SELECT * FROM ".$this->tabela;
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Usuario");
        return $results;
        
    }

    function buscaPorUsuarioESenha($id, $senha){
        
        $sql = "SELECT * FROM ".$this->tabela. " where id=? and senha=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$id,$senha]);
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Usuario");
        if(count($results) > 0){
            return $results[0];
        } else {
            return null;
        }
    }
}

?>