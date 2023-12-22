<?php 

include('controller_adm.php');


$ra = $_POST['ra'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'] ;
$senha = $_POST['senha'];
$confirm_senha = $_POST['conf_senha'];


if(isset($_POST['ok'])){
    $codigo = $codigo =  substr(md5(time()),0, 6);
}


$enviar = new CRUD_ADM();
$enviar->cadastrarAdm($ra,$nome,$data_nascimento,$email,$senha,$confirm_senha,$codigo);



?>