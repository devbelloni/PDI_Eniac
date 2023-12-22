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
    <title>A importancia de criar um portifólio</title>

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
            <h2>A importancia de criar um portifólio</h2>
            <p>Olá,vamos criar um portifólio para você poder demonstrar todo o seu potencial?
                <br>
                <br>
                Um portfólio profissional é uma ferramenta valiosa para destacar suas habilidades e conquistas,
                construir credibilidade e se destacar em um mercado de trabalho competitivo. É uma representação
                tangível do que você pode fazer e uma prova do seu potencial. Não importa se você é um profissional
                experiente ou alguém que está começando a carreira, criar e manter um portfólio é uma decisão
                inteligente que pode abrir inúmeras portas para o sucesso profissional. Explore nossos recursos para
                aprender como criar um portfólio que reflita o seu potencial e conquiste oportunidades.
            </p>
        </div>
        <!-- <h2>Conte-nos sobre seus trabalhos voluntários!</h2> -->
        <div id="importancia_card2">
            <div id="importancia_botoes">

                <a href="../src/projetointegrador1.php"> <button>Projeto Integrador 1</button> </a>
                <a href="../src/projetointegrador2.php"> <button>Projeto Integrador 2</button> </a>
                <a href="../src/projetointegrador3.php"> <button>Projeto Integrador 3</button> </a>
                <a href="../src/projetointegrador4.php"> <button>Projeto Integrador 4</button> </a>
            </div>

            <div id="importancia_botoes2">

                <a href="../src/projetointegrador5.php"> <button>Projeto Integrador 5</button> </a>
                <a href="../src/projetointegrador6.php"> <button>Projeto Integrador 6</button> </a>
                <a href="../src/projetointegrador7.php"> <button>Projeto Integrador 7</button> </a>
                <a href="../src/projetointegrador8.php"> <button>Projeto Integrador 8</button> </a>
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