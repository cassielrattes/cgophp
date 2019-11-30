<?php
class Usuario {
    public $rm, $nome, $senha;
    static function criaUsuario($rm,$nome){
        $usuario = new Usuario();
        $usuario->rm = $rm;
        $usuario->nome = $nome;
        $usuario->tipo = $tipo;
        $usuario-> = $senha;
        return $usuario;
    }
    function setarSenha($senha){
        $this->senha = md5($senha);
    }
}

?>