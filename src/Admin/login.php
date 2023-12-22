<?php
include_once("../Admin/../../sql/db_conexao_dgh.php");

if (isset($_POST['codigo']) || isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['codigo']) == 0) {
        echo "Preencher código";
    } else if (strlen($_POST['email']) == 0) {
        echo "Preencher email";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencher senha";
    } else {
        $codigo = $coat->real_escape_string($_POST['codigo']);
        $email = $coat->real_escape_string($_POST['email']);
        $senha = $coat->real_escape_string($_POST['senha']);

        $sql = "SELECT * FROM cadastro_adm WHERE codigo ='$codigo'  AND email ='$email' AND senha ='$senha'";

        $sql_query = $coat->query($sql) or die("Falha ao se conectar" . $coat->error);

        $quantidade = $sql_query->num_rows;
        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['idcadastro_adm'] = $usuario['idcadastro_adm'];
            $_SESSION['ra'] = $usuario['ra'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['data_nascimento'] = $usuario['data_nascimento'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];
            $_SESSION['conf_senha'] = $usuario['conf_senha'];
            $_SESSION['codigo'] = $usuario['codigo'];

            $email = $_SESSION['email'];


            if (True) {
                date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para o Brasil (São Paulo)
                $data_e_hora = date('Y-m-d H:i:s');

                $sql = "UPDATE cadastro_adm SET loger = '$data_e_hora' WHERE email = '$email'";

                $results = $coat->query($sql);

            }


            session_write_close();

            header("Location:./dashboard.php ");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
        mysqli_close($coat);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0px;
            padding: 0px;
            background-color: #FFFEFC;


        }

        .page {
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
            width: 100%;
            height: 100vh;


        }

        .formLogin {
            display: flex;
            flex-direction: column;
            background: #5787E6;
            border-radius: 10px;
            padding: 80px;
            gap: 10px;

        }

        .formLogin h1 {
            padding: 0;
            margin: 0;
            font-weight: 500;
            font-size: 2.3em;
            color: white;
        }

        .formLogin p {
            display: inline-block;
            font-size: 14px;
            color: rgb(255, 255, 255);
            margin-bottom: 25px;
        }

        .formLogin input {
            padding: 15px;
            font-size: 14px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            margin-top: 5px;
            border-radius: 4px;
            transition: all linear 160ms;
            outline: none;
        }


        .formLogin input:focus {
            border: 1px solid #25f730;
        }

        .formLogin label {
            font-size: 14px;
            font-weight: 600;
            color: white;
        }

        .btn {
            background-color: #3700ff;
            color: rgb(255, 255, 255);
            font-size: 14px;
            font-weight: 600;
            border: none !important;
            transition: all linear 160ms;
            cursor: pointer;
            margin: 0 !important;

        }

        .btn:hover {
            transform: scale(1.05);
            background-color: #5295bb;

        }
    </style>
</head>

<div class="page">

    <form method="POST" class="formLogin" action="login.php">
        <h1>Login do Administrador</h1>
        <label for="number">Código</label>
        <input name="codigo" type="text" placeholder="Código" autofocus="true" required>
        <label for="E-mail">E-mail</label>
        <input name="email" type="email" placeholder="E-mail institucional" autofocus="true" required />
        <label for="password">Senha</label>
        <input name="senha" type="password" placeholder="Senha" required />
        <input type="submit" value="Login" class="btn" />
    </form>

</div>

</section>

</body>

</html>