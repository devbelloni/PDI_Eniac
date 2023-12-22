<?php 

include_once("./controller.php");
include_once("./db_conexao_dgh.php");

session_start();

$email_institucional = $_SESSION['email_institucional'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

$senha_antiga = $_POST['senha_antiga'];

$sql = "SELECT * FROM cadastro_pdi_2 WHERE email_institucional ='$email_institucional'";

$sql_query = $coat->query($sql) or die("Falha ao se conectar". $coat->error);

$quantidade = $sql_query->num_rows;
if($quantidade == 1){
 
    $usuario = $sql_query->fetch_assoc();

    $hashed_password_from_db = $usuario['senha'];

    // Verifique se a senha fornecida pelo usuário corresponde ao hash no banco de dados
    if (password_verify($senha_antiga, $hashed_password_from_db)) {
        if($senha == $conf_senha){
            $buscar = new CRUD();
            $buscar->Alterar_Senha($senha, $conf_senha, $email_institucional);
            
        }else{
            echo "Error ";
        }
      
    }else{
        echo "Erro no Hash";
    }
}
 




?>