<?php
session_start();

if ((!isset($_SESSION['email_institucional']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email_institucional']);
    unset($_SESSION['senha']);
    unset($_SESSION['idcadastro_pdi']);
    header('Location: index.php');
    session_write_close();

}

include_once("../sql/db_conexao_dgh.php");

$sql = ("SELECT * FROM cadastro_pdi_2 WHERE email_institucional = '" . $_SESSION['email_institucional'] . "'");
$result = mysqli_query($coat, $sql);
$obj = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home - PDI Eniac</title>

    <!-- css -->
    <link rel="stylesheet" href="../template/css/homepage.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script&family=Lato:wght@100&family=Lobster&family=Montserrat:wght@300&family=Open+Sans&family=Poppins:wght@200;400&family=Righteous&family=Roboto+Slab:wght@200&family=Roboto:wght@500&family=Square+Peg&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script&family=Lato:wght@100&family=Lobster&family=Montserrat:wght@300&family=Open+Sans&family=Poppins:wght@200;400;600&family=Righteous&family=Roboto+Slab:wght@200&family=Roboto:wght@500&family=Square+Peg&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../template/css/style.css">

    <title>Homepage - PDI Eniac</title>
</head>

<body>
    </head>

    <body>
        <!-- header -->
        <header class="home_header">
            <nav class="home_headerNavbar">
                <?php include("../src/navbar.php") ?>
                <img class="home_headerNavbarLogo" src="../images/image 1@2x.png" alt="Logo do Carreiras">
            </nav>
            <section class="home_headerTitleBox">
                <h2 class="home_headerTitle">Carreiras</h2>
            </section>
        </header>
        <!-- main content -->
        <main class="home_mainContent">
            <!-- article section -->
            <article class="home_mainContentArticle">
                <section class="home_mainContentTextBox">
                    <p class="home_mainContentText">
                        Seja bem vindo(a),
                        <?php echo $_SESSION['nome_completo']; ?>, ao Programa de Desenvolvimento
                        de Carreiras.
                    </p>
                    <p class="home_mainContentText">
                        O programa é estruturado em duas etapas: Formativa e
                        Mentoria.
                    </p>
                    <p class="home_mainContentText">
                        A primeira consiste na participação dos encontros para
                        cumprimento da unidade curricular e preparação profissional
                        dos alunos, especialmente, no que diz respeito às Soft
                        Skills. Ao término da jornada, o aluno terá um Plano de
                        Desenvolvimento Individual (PDI) personalizado com todas
                        as suas competências e desenvolvimentos que construiu ao
                        longo da sua jornada profissional.
                    </p>
                    <h2 class="home_mainContentTextBoxMiniTitle">Principais atividades:</h2>
                    <p class="home_mainContentText">
                        Desenvolver o autoconhecimento e otimizar as Soft Skills;
                        Utilizar e aplicar as ferramentas atuais de mercado; Treinar
                        e utilizar softwares especialistas (Hard Skills); Desenvolver
                        e perceber o uso das Deep Skills.
                    </p>
                </section>
            </article>
            <!-- video section -->
            <section class="home_mainContentVideoSection">
                <h1 class="home_mainContentVideoTitle">Veja o vídeo</h1>
                <iframe class="home_mainContentVideo" src="https://www.youtube.com/embed/g4FIzt6wIgQ"
                    title="Programa de Desenvolvimento de Carreira - Abertura" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </section>
        </main>
        <!-- footer -->
        <footer class="home_footer">
            <p class="home_footerCopyright">© 2023 Code Factory</p>
        </footer>

    </body>

</html>