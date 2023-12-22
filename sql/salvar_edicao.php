<?php 
include('../sql/controller.php');

session_start();

$email_institucional = $_SESSION['email_institucional'];



$nome_completo = $_POST['nome_completo'];

$senha = $_POST['senha'];

// $confirmar_senha = $_POST['confirm_senha'];

$data_aniversario = $_POST['data_aniversario'];

$genero = $_POST['genero'];

$celular = $_POST['celular'];

$cep = $_POST['cep'];

$pais = $_POST['pais'];

$estado = $_POST['estado'];

$cidade = $_POST['cidade'];

$endereco = $_POST['endereco'];

$numero_endereco = $_POST['numero_endereco'];

$bairro = $_POST['bairro'];

// $email_institucional = $_POST['email_institucional'];

$curso = $_POST['curso'];

$modaliadade_curso = $_POST['modalidade_curso'];

$inicio_curso = $_POST['inicio_curso'];

$semestre_curso = $_POST['semestre'];


$enviar = new CRUD();
$enviar->editarCadastrar($senha,$nome_completo,$data_aniversario,$genero,$celular,$cep,$pais,$estado,$cidade,$bairro,$endereco,$numero_endereco,$email_institucional,$curso,$modaliadade_curso,$inicio_curso,$semestre_curso);

?>