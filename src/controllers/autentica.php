<?php
session_start();
 require_once "../helpers/banco.php";
 require_once "../models/usuarioDAO.php";
 $usuarioDAO = new UsuarioDAO($pdo);
 $rm = $_POST["rm"];
 $senha = $_POST["senha"];

 $senha = md5($senha);
 
 $usuario = $usuarioDAO->buscaPorUsuarioESenha($rm, $senha);
 print_r($usuario);
 if($usuario != null){
     $_SESSION['logado'] = true;
     $_SESSION['nome_usuario'] = $usuario->nome;
     header("Location: http://localhost:3000");
 } else {
     header("Location: /login.php");
 }
?>