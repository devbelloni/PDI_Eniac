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
    <title>Atividades como voluntário</title>

    <!-- css -->
    <link rel="stylesheet" href="../template/css/padrao.css">
    <link rel="stylesheet" href="../template/css/atividade_voluntario.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Righteous&display=swap" rel="stylesheet">
</head>

<body>
    <nav>

    </nav>

    <?php
    // convoca o rodapé
    include_once('../template/components/padrao.php');
    ?>

    <div id="voluntario_main">
        <br>
        <br>
        <h2>Atividades como voluntário</h2>
        <p>Olá,vamos criar um portifólio para você poder demonstrar todo o seu potencial?
            <br>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloribus perferendis libero laboriosam ullam
            minus reprehenderit, nobis nulla quae, est consectetur perspiciatis? Similique alias reiciendis molestias
            exercitationem quos velit dicta?
        </p>
        <div id="voluntario_botoes">
            <br>
            <br>
            <h2 id="voluntario_botoesh2">Conte-nos sobre seus trabalhos voluntários!</h2>
            <a href="trabalho_voluntario1.php">
                <button>Trabalho Voluntário 1</button>
            </a>
            <a href="trabalho_voluntario2.php">
                <button>Trabalho Voluntário 2</button>
            </a>
            <a href="trabalho_voluntario3.php">
                <button>Trabalho Voluntário 3</button>
            </a>
        </div>
    </div>
    <footer id="voluntario_footer">
        <?php
        // convoca o rodapé
        include_once('../template/components/_footer.html');
        ?>

    </footer>

</body>

</html>