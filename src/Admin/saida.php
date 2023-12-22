<?php
include_once('../../sql/db_conexao_dgh.php');

session_start();

$email = $_SESSION['email'];

$URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


if ($URL_ATUAL == 'http://localhost/Final_PDI_Servidor/src/Admin/saida.php?sair') {
    date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para o Brasil (São Paulo)
    $data_e_hora = date('Y-m-d H:i:s');

    $sql = "UPDATE cadastro_adm SET ultimo_loger = '$data_e_hora' WHERE email = '$email'";

    $results = $coat->query($sql);
}

session_destroy();

header('Location:login.php');


?>