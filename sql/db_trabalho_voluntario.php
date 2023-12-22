<?php 
session_start();

include('controller.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email_institucional = $_SESSION['email_institucional'];

    if(isset($_POST['tema_voluntario1']) != null){
        $n = "1";
        $tema_voluntario= $_POST['tema_voluntario1'];
        $descricao_voluntario = $_POST['descricao_voluntario1'];
        $data_voluntario = $_POST['data_voluntario1'];
        $exp = new CRUD();
        $exp->insertDB($tema_voluntario, $descricao_voluntario, $data_voluntario, $email_institucional, $n);
        return;

    }

    if(isset($_POST['tema_voluntario2']) != null){
        $n = "2";
        $tema_voluntario = $_POST['tema_voluntario2'];
        $descricao_voluntario = $_POST['descricao_voluntario2'];
        $data_voluntario = $_POST['data_voluntario2'];
        $exp = new CRUD();
        $exp->insertDB($tema_voluntario, $descricao_voluntario, $data_voluntario, $email_institucional, $n);
        return;        

    }

    if(isset($_POST['tema_voluntario3']) != null){
        $n = "3";
        $tema_voluntario = $_POST['tema_voluntario3'];
        $descricao_voluntario = $_POST['descricao_voluntario3'];
        $data_voluntario = $_POST['data_voluntario3'];
        $exp = new CRUD();
        $exp->insertDB($tema_voluntario, $descricao_voluntario, $data_voluntario, $email_institucional, $n);
        return;

    }
        
    
    
}

?>