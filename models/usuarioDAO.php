<?php 
require_once "usuario.php";

class UsuarioDAO {
    private $con;
    public $tabela = "usuarios";
    function __construct($con){
        $this->con = $con;
    }
    function save($usuario){
        $sql = "INSERT INTO ".$this->tabela." (id,usuario,senha,nome,tipo) values (?,?,?,?,?)";
        $stmt = $this->con->prepare($sql); 
        $stmt->execute([$usuario->id, $usuario->usuario, $usuario->senha, $usuario->nome, $usuario->tipo]);
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

    function buscaPorUsuarioESenha($usuario, $senha){
        echo("alo");
        $sql = "SELECT * FROM ".$this->tabela. " where usuario=? and senha=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$usuario,$senha]);
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Usuario");
        if(count($results) > 0){
            return $results[0];
        } else {
            echo("fafa");
            return null;
        }
    }
}

?>