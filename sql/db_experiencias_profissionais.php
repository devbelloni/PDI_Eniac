<?php


    include("controller.php");

    session_start();


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email_institucional = $_SESSION['email_institucional'];
        
        if(isset($_POST['empresa1']) != null){
            $n = "1";
            $empresa = $_POST['empresa1'];
            $funcao = $_POST['funcao1'];
            $entrada = $_POST['entrada1'];
            $saida = $_POST['saida1'];
            $historicoProf = new CRUD();
            $historicoProf->historico($empresa,$funcao,$entrada,$saida,$email_institucional,$n);        
            return;
    
        }

    if (isset($_POST['empresa2']) != null) {
        $n = "2";
        $empresa = $_POST['empresa2'];
        $funcao = $_POST['funcao2'];
        $entrada = $_POST['entrada2'];
        $saida = $_POST['saida2'];
        $historicoProf = new CRUD();
        $historicoProf->historico($empresa,$funcao,$entrada,$saida,$email_institucional,$n);
        return;
       
    }

    if (isset($_POST['empresa3']) != null) {
        $n = "3";
        $empresa = $_POST['empresa3'];
        $funcao = $_POST['funcao3'];
        $entrada = $_POST['entrada3'];
        $saida = $_POST['saida3'];
        $historicoProf = new CRUD();
        $historicoProf->historico($empresa,$funcao,$entrada,$saida,$email_institucional,$n);
        return;
       
    }

    if (isset($_POST['empresa4']) != null) {
        $n = "4";
        $empresa = $_POST['empresa4'];
        $funcao = $_POST['funcao4'];
        $entrada = $_POST['entrada4'];
        $saida = $_POST['saida4'];
        $historicoProf = new CRUD();
        $historicoProf->historico($empresa,$funcao,$entrada,$saida,$email_institucional,$n);
        return;
       
    }

    if (isset($_POST['empresa5']) != null) {
        $n = "5";
        $empresa = $_POST['empresa5'];
        $funcao = $_POST['funcao5'];
        $entrada = $_POST['entrada5'];
        $saida = $_POST['saida5'];
        $historicoProf = new CRUD();
        $historicoProf->historico($empresa,$funcao,$entrada,$saida,$email_institucional,$n);
        return;
       
    }


    }



?>