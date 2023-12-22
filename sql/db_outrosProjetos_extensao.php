<?php 
session_start();
include_once("controller.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_SESSION['email_institucional'];
    
    if(isset($_POST['titiloOutro1']) != null){
        $n = "1";
        $tituloOutro = $_POST['titiloOutro1'];
        $linkOutro = $_POST['linkOutro1'];
        $resumoOutro = $_POST['resumoOutro1'];
        $exp = new EXP();
        $exp->inserirNoBanco($tituloOutro, $linkOutro, $resumoOutro, $email, $n);
        return;

    }

    if(isset($_POST['tituloOutro2']) != null){
        $n = "2";
        $tituloOutro = $_POST['tituloOutro2'];
        $linkOutro = $_POST['linkOutro2'];
        $resumoOutro = $_POST['resumoOutro2'];
        $exp = new EXP();
        $exp->inserirNoBanco($tituloOutro, $linkOutro, $resumoOutro, $email, $n);
        return;
    }

    if(isset($_POST['tituloOutro3']) != null){
        $n = "3";
        $tituloOutro = $_POST['tituloOutro3'];
        $linkOutro = $_POST['linkOutro3'];
        $resumoOutro = $_POST['resumoOutro3'];
        $exp = new EXP();
        $exp->inserirNoBanco($tituloOutro, $linkOutro, $resumoOutro, $email, $n);
        return;
    }
     
}


?>