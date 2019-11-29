<?php
class Usuario {
    public $id, $nome,$tipo, $senha;
    static function criaUsuario($id,$nome,$tipo,$senha){
        $usuario = new Usuario();
        $usuario->id = $id;
        $usuario->usuario = $usuario;
        $usuario->senha = $senha;
        $usuario->nome = $nome;
        $usuario->tipo = $tipo;
        return $usuario;
    }
    function setarSenha($senha){
        $this->senha = md5($senha);
    }
}

?>