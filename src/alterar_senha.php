<?php

include('../sql/db_conexao_dgh.php');

session_start();

if ((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email_institucional']);
    unset($_SESSION['senha']);
    unset($_SESSION['idcadastro_pdi']);
    header('Location: index.php');
    session_write_close();

}

$email_institucional = $_SESSION['email_institucional'];



$sql = "SELECT * FROM cadastro_pdi_2 WHERE email_institucional = '$email_institucional' ";
$result = $coat->query($sql);
$obj = mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>

    <!--css-->
    <link rel="stylesheet" href="../template/css/padrao.css">
    <link rel="stylesheet" href="../template/css/editarcadastro.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">

</head>

<body>
    <div id="editarcadastro_main">
        <div id="editarcadastro_card">
            <h1>Alterar Senha</h1>
            <div id="editarcadastro_header">
                <div id="editarcadastro_foto">
                    <?php echo ("<img id='editarcadastro_foto' src='../sql/imagesDB/" . $obj['path_foto'] . "' width='150' height='150' alt=''>"); ?>
                </div>
                <a href="../src/foto.php" style="text-decoration: none;">
                    <h2>Alterar foto</h2>
                </a>
                <a href="../src/homepage.php" style="text-decoration: none;">
                    <h2>Voltar index</h2>
                </a>

            </div>
            <form action="../sql/db_alterar_senha.php" method="post">
                <p>Senha Antiga</p>
                <input type="password" name="senha_antiga"> </input>
                <p>Senha</p>
                <input type="password" name="senha"> </input>
                <p>Confirmar Senha</p>
                <input type="password" name="conf_senha"> </input>
        </div>
        <button type="submit" name="submitBtn">Enviar</button>
        </form>
    </div>
    <footer>
        <?php
        // convoca o rodapé
        include_once('../template/components/_footer.html');
        ?>
    </footer>
</body>

</html>