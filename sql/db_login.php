<?php 


include_once("../sql/db_conexao_dgh.php");

if(isset($_POST['email_institucional']) || isset($_POST['senha'])){

  if(strlen($_POST['email_institucional']) == 0){
      echo "Preencher email";
  }else if(strlen($_POST['senha']) == 0){
      echo "Preencher Senha";
  }else{
      $email = $coat->real_escape_string($_POST['email_institucional']);
      $senha = $coat->real_escape_string($_POST['senha']);

      $sql = "SELECT * FROM cadastro_pdi_2 WHERE email_institucional ='$email'";

      $sql_query = $coat->query($sql) or die("Falha ao se conectar". $coat->error);

      $quantidade = $sql_query->num_rows;
      if($quantidade == 1){

          $usuario = $sql_query->fetch_assoc();

          $hashed_password_from_db = $usuario['senha'];

          // Verifique se a senha fornecida pelo usuário corresponde ao hash no banco de dados
          if (password_verify($senha, $hashed_password_from_db)) {
            if(!isset($_SESSION)){
              session_start();
          }
          $_SESSION['idcadastro_pdi'] = $usuario['idcadastro_pdi'];
          $_SESSION['path'] = $usuario['path'];
          $_SESSION['senha'] = $usuario['senha'];
          $_SESSION['data_nascimento'] = $usuario['data_nascimento'];
          $_SESSION['nome_completo'] = $usuario['nome_completo'];
          $_SESSION['data_aniversario'] = $usuario['data_aniversario'];
          $_SESSION['genero'] = $usuario['genero'];
          $_SESSION['celular'] = $usuario['celular'];
          $_SESSION['cep'] = $usuario['cep'];
          $_SESSION['pais'] = $usuario['pais'];
          $_SESSION['estado'] = $usuario['estado'];
          $_SESSION['bairro'] = $usuario['bairro'];
          $_SESSION['cidade'] = $usuario['cidade'];
          $_SESSION['endereco'] = $usuario['endereco'];
          $_SESSION['email_institucional'] = $usuario['email_institucional'];
          $_SESSION['curso'] = $usuario['curso'];
          $_SESSION['modaliadade_curso'] = $usuario['modaliadade_curso'];
          $_SESSION['inicio_curso'] = $usuario['inicio_curso'];
          $_SESSION['semestre_curso'] = $usuario['semestre_curso'];
          $_SESSION['codigo'] = $usuario['codigo'];
          session_write_close();
          echo "Login bem-sucedido. Bem-vindo!";

          header('Location:../src/homepage.php');

          } else {
            header('Location:../src/errousenha.php');

            // Senha incorreta
            echo "Senha incorreta. Tente novamente.";
            // Pode redirecionar de volta para a página de login ou exibir uma mensagem de erro
          }   

      }
      mysqli_close($coat);
  }
}
