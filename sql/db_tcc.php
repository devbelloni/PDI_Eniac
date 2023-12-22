<?php

    include("controller.php");

    session_start();

    $email_institucional = $_SESSION['email_institucional'];

    if(isset($_POST['tituloTCC'])){

    $tema_tcc = $_POST['tituloTCC'];
    $link_tcc = $_POST['linkTCC'];
    $resumo_tcc = $_POST['resumoTCC'];
    $enviar = new EXP();
    $enviar->inserirTcc($tema_tcc,$link_tcc,$resumo_tcc,$email_institucional);

    }



   


?>