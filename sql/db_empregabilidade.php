<?php
session_start();

include('controller.php');

$email_institucional = $_SESSION['email_institucional'];


$grauInstrucao = $_POST['grauInstrucao'];
$emprego = $_POST['emprego'];
$atividadeProfissional = $_POST['atividadeProfissional'];
$colocacao = $_POST['colocacao'];

$enviar = new CRUD();
$enviar->empregabilidade($grauInstrucao,$emprego,$atividadeProfissional,$colocacao,$email_institucional);


?>