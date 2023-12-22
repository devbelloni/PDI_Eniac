<?php
session_start();

if ((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email_institucional']);
    unset($_SESSION['senha']);
    unset($_SESSION['idcadastro_pdi']);
    header('Location: index.php');
    session_write_close();

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos de Extensão - PDI Eniac</title>

    <!-- css -->
    <link rel="stylesheet" href="../template/css/importancia_portifolio.css">
    <link rel="stylesheet" href="../template/css/padrao.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">
</head>

<body>

    <!-- <div class="div-header"></div> -->

    <?php
    //   convoca o rodapé
    include_once('../template/components/padrao.php');
    ?>


    <div id="importancia_main">
        <div id="importancia card1">
            <br>
            <br>
            <h2>Projetos de Extensão</h2>
            <p>Insira aqui os projetos que tenham relevância na sua carreira.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>

                Conte-nos sobre os seus projetos de extensão!
            </p>
        </div>
        <!-- <h2>Conte-nos sobre seus trabalhos voluntários!</h2> -->
        <div id="importancia_card2">
            <div id="importancia_botoes">

                <a href="../src/projetoDeExtensao1.php"> <button>Projeto de extensão 1</button> </a>
                <a href="../src/projetoDeExtensao2.php"> <button>Projeto de extensão 2</button> </a>
                <a href="../src/projetoDeExtensao3.php"> <button>Projeto de extensão 3</button> </a>
            </div>
        </div>

    </div>
    <footer id="importancia_footer">
        <?php
        // convoca o rodapé
        include_once('../template/components/_footer.html');
        ?>

    </footer>

</body>

</html>