<?php

include('controller.php');

$email_institucional = $_POST['email_institucional'];
$codigo = $_POST['codigo'];



$levar = new CRUD();
$levar->recuperarSenha($email_institucional,$codigo);



?>