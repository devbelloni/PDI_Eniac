<?php 
include('./db_conexao_dgh.php');


$senha = '123';

$email = '65@eniac.edu.br';

$hashSenha = password_hash($senha, PASSWORD_DEFAULT);


$sql_busca_do_hash = "SELECT * FROM  cadastro_pdi_2 WHERE email_institucional ='$email'";
$result = $coat->query($sql_busca_do_hash);
$obj = mysqli_fetch_assoc($result);

$banco_hash = $obj["senha"];

$hashed_password_from_db = $banco_hash;

// Verifique se a senha fornecida pelo usuário corresponde ao hash no banco de dados
if (password_verify($senha, $hashed_password_from_db)) {
    // Senha correta, login bem-sucedido
    echo "Login bem-sucedido. Bem-vindo!";
    // Outras operações de login, redirecionamento, etc.
} else {
    // Senha incorreta
    echo "Senha incorreta. Tente novamente.";
    // Pode redirecionar de volta para a página de login ou exibir uma mensagem de erro
}




?>