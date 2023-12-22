<?php

include_once("controler.php");

session_start();

$codigo = $_SESSION['codigo'];

$nome_completo = $_POST['nome_completo'];
$genero = $_POST['genero'];
$celular = $_POST['celular'];
$email_institucional = $_POST['email_institucional'];
$curso = $_POST['curso'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

$enviar = new CRUD();
$enviar->update($nome_completo, $genero, $celular, $email_institucional, $curso, $senha, $conf_senha, $codigo);

?>