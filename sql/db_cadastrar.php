<?php 

include_once("controller.php");

session_start();


$nome_completo = $_POST['nome_completo'];

$email_institucional = $_POST['email_institucional'];

$ra = $_POST['ra'];


$senha = $_POST['senha'];

$confirm_senha = $_POST['confirm_senha'];

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

$email_institucional = $_POST['email_institucional'];

$curso = $_POST['curso'];

$modaliadade_curso = $_POST['modaliadade_curso'];

$inicio_curso = $_POST['inicio_curso'];

$semestre_curso = $_POST['semestre_curso'];

// $senha = "123456789";
// $confirm_senha = "123456789";
// $nome_completo = "Pedro";
// $data_aniversario = "04/02/2002";
// $genero = "Maculino";
// $celular = "11 993041463";
// $cep = "05465-789";
// $pais = "Brasil";
// $estado = "Sp";
// $cidade = "Guarulhos";
// $bairro = "Jad";
// $endereco = "asdasd";
// $numero_endereco = "8451";
// $email_institucional = "78945613@eniac.edu.br";
// $curso = "Engenharia de Computação ";
// $modaliadade_curso = "Presencial";
// $inicio_curso = "20/02/2002";
// $semestre_curso = "5";

// $nomeDoArquivo = "asdaf";

// $foto = "Loli";



$codigo =  substr(md5(time()),0, 6);



if(isset($_POST['ok'])){
    $codigo =  substr(md5(time()),0, 6);
}






$enviar = new CRUD();
$enviar->cadastrar($senha,$confirm_senha,$nome_completo,$ra,$data_aniversario,$genero,$celular,$cep,$pais,$estado,$cidade,$bairro,$endereco,$numero_endereco,$email_institucional,$curso,$modaliadade_curso,$inicio_curso,$semestre_curso,$codigo);




  

// Fechar a conexãog

//$sql->close()

//$coat->close();







// header("Location:../src/cadastroConcluido.php");





?>